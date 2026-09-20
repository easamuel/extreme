<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Str;

/**
 * Class PartnerController
 * 
 * Manages institutional partnership memos, high-conversion proposal portals,
 * server-side A4 PDF exports, empirical field discoveries, and onboarding support.
 */
class PartnerController extends Controller
{
    /**
     * Display the personalized executive partnership portal.
     *
     * @param Request $request
     * @return View
     */
    public function partner(Request $request): View
    {
        $sanitized = $this->sanitizeParams($request);

        return view('pages.partner', [
            'title' => $sanitized['title'],
            'name' => $sanitized['name'],
            'org' => $sanitized['org'],
            'refCode' => $sanitized['refCode'],
            'dateStr' => $sanitized['dateStr'],
            'exportPdfUrl' => route('partner.pdf', $sanitized['rawParams']),
            'calBookingUrl' => 'https://cal.com/samuel-ekunyan',
        ]);
    }

    /**
     * Export the executive letterhead as a print-optimized A4 PDF.
     *
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function exportPdf(Request $request): \Symfony\Component\HttpFoundation\Response
    {
        $sanitized = $this->sanitizeParams($request);

        // Pre-convert corporate assets to base64 Data URIs for bulletproof, offline Dompdf rendering
        $logoBase64 = $this->assetToBase64(public_path('images/es-mark.png'));
        $sigBase64 = $this->assetToBase64(public_path('images/signature.png'));

        $viewData = [
            'title' => $sanitized['title'],
            'name' => $sanitized['name'],
            'org' => $sanitized['org'],
            'refCode' => $sanitized['refCode'],
            'dateStr' => $sanitized['dateStr'],
            'logoBase64' => $logoBase64,
            'sigBase64' => $sigBase64,
            'isPrintFallback' => false,
        ];

        $targetSlug = Str::slug($sanitized['org'] ?: $sanitized['name']);
        $filename = "ExtremeSolutions-Executive-Memo-{$targetSlug}.pdf";

        // 1. Barryvdh DomPDF Facade Integration (Laravel Standard)
        if (class_exists(\Barryvdh\DomPDF\Facade\Pdf::class)) {
            /** @var \Barryvdh\DomPDF\PDF $pdf */
            $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.letterhead', $viewData)
                ->setPaper('a4', 'portrait')
                ->setOptions([
                    'isRemoteEnabled' => true,
                    'isHtml5ParserEnabled' => true,
                    'defaultFont' => 'Helvetica',
                    'dpi' => 150,
                ]);

            return $pdf->download($filename);
        }

        // 2. Direct Dompdf library fallback (if Barryvdh service provider is unregistered)
        if (class_exists(\Dompdf\Dompdf::class)) {
            $options = new \Dompdf\Options();
            $options->set('isRemoteEnabled', true);
            $options->set('isHtml5ParserEnabled', true);
            $options->setDefaultFont('Helvetica');
            $options->setDpi(150);

            $dompdf = new \Dompdf\Dompdf($options);
            $html = view('pdf.letterhead', $viewData)->render();
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            return response($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
                'Cache-Control' => 'private, max-age=0, must-revalidate',
                'Pragma' => 'public',
            ]);
        }

        // 3. Resilient Zero-Crash Runtime Fallback
        // Serves print-optimized CSS2.1 layout with auto-trigger print dialog
        $viewData['isPrintFallback'] = true;
        return response()->view('pdf.letterhead', $viewData);
    }

    /**
     * Display empirical field research and educational data insights.
     *
     * @return View
     */
    public function discoveries(): View
    {
        return view('pages.discoveries');
    }

    /**
     * Display institutional onboarding, teacher certification, and support hub.
     *
     * @return View
     */
    public function support(): View
    {
        return view('pages.support');
    }

    /**
     * Validate, sanitize and normalize incoming query parameters with defensive anti-XSS filtering.
     *
     * @param Request $request
     * @return array<string, mixed>
     */
    private function sanitizeParams(Request $request): array
    {
        $rawTitle = $request->query('title');
        $rawName = $request->query('name');
        $rawOrg = $request->query('org');

        // Sanitization pipeline: Strip tags -> regex whitelist -> trim -> length clamp
        $cleanTitle = $this->filterAlphanumeric($rawTitle, 20);
        $cleanName = $this->filterAlphanumeric($rawName, 80);
        $cleanOrg = $this->filterAlphanumeric($rawOrg, 120);

        // Institutional Defaults
        $title = !empty($cleanTitle) ? $cleanTitle : 'Partner';
        $name = !empty($cleanName) ? $cleanName : 'Valued Stakeholder';
        $org = !empty($cleanOrg) ? $cleanOrg : null;

        // Deterministic, verifiable memorandum reference
        $hashSeed = ($org ?? $name) . date('Ymd');
        $refCode = 'ES-MEMO-' . date('Y') . '-' . strtoupper(substr(md5($hashSeed), 0, 6));
        $dateStr = date('F j, Y');

        $rawParams = array_filter([
            'title' => $rawTitle ? $cleanTitle : null,
            'name' => $rawName ? $cleanName : null,
            'org' => $rawOrg ? $cleanOrg : null,
        ]);

        return [
            'title' => htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8'),
            'name' => htmlspecialchars($name, ENT_QUOTES | ENT_HTML5, 'UTF-8'),
            'org' => $org ? htmlspecialchars($org, ENT_QUOTES | ENT_HTML5, 'UTF-8') : null,
            'refCode' => $refCode,
            'dateStr' => $dateStr,
            'rawParams' => $rawParams,
        ];
    }

    /**
     * Filter string to clean institutional tokens, preventing script injection or control characters.
     *
     * @param mixed $input
     * @param int $maxLength
     * @return string
     */
    private function filterAlphanumeric(mixed $input, int $maxLength): string
    {
        if (!is_string($input)) {
            return '';
        }

        // Strip HTML/PHP tags
        $clean = strip_tags($input);

        // Normalize spaces and remove hazardous punctuation
        // Allowed: letters, numbers, spaces, periods, commas, ampersands, hyphens, parentheses, apostrophes
        $clean = preg_replace('/[^\p{L}\p{N}\s\.\,\&\-\(\)\']/u', '', $clean);
        $clean = preg_replace('/\s+/', ' ', (string) $clean);

        return mb_substr(trim($clean), 0, $maxLength);
    }

    /**
     * Convert an image file to a base64 Data URI for inline CSS/PDF rendering.
     *
     * @param string $path
     * @return string
     */
    private function assetToBase64(string $path): string
    {
        if (file_exists($path)) {
            $data = file_get_contents($path);
            $mime = pathinfo($path, PATHINFO_EXTENSION) === 'svg' ? 'image/svg+xml' : 'image/png';
            return 'data:' . $mime . ';base64,' . base64_encode($data);
        }

        return '';
    }
}
