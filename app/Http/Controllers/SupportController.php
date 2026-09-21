<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Str;

/**
 * Class SupportController
 * 
 * Manages the unlisted Enterprise Systems Support & SLA Portal.
 * Delivers ExtremeSolutions technical stewardship standards ("Building Digital Systems that last"),
 * enterprise SLA commitments, support channels, and links to active product deployments.
 */
class SupportController extends Controller
{
    /**
     * Display the Enterprise Support & Systems Architecture Standard.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $sanitized = $this->sanitizeParams($request);

        return view('support.index', [
            'name' => $sanitized['name'],
            'referrer' => $sanitized['referrer'],
            'refCode' => $sanitized['refCode'],
            'dateStr' => $sanitized['dateStr'],
            'exportPdfUrl' => route('support.pdf', $sanitized['rawParams']),
            'calBookingUrl' => 'https://cal.com/samuel-ekunyan',
        ]);
    }

    /**
     * Export the Institutional Vision & Mission Memo as an A4 PDF.
     *
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function exportPdf(Request $request): \Symfony\Component\HttpFoundation\Response
    {
        $sanitized = $this->sanitizeParams($request);

        $logoBase64 = $this->assetToBase64(public_path('images/es-mark.png'));
        $sigBase64 = $this->assetToBase64(public_path('images/signature.png'));

        $viewData = [
            'name' => $sanitized['name'],
            'referrer' => $sanitized['referrer'],
            'refCode' => $sanitized['refCode'],
            'dateStr' => $sanitized['dateStr'],
            'logoBase64' => $logoBase64,
            'sigBase64' => $sigBase64,
            'isPrintFallback' => false,
        ];

        $targetSlug = Str::slug($sanitized['name']);
        $filename = "ExtremeSolutions-Institutional-Memo-{$targetSlug}.pdf";

        // 1. Barryvdh DomPDF Facade Integration
        if (class_exists(\Barryvdh\DomPDF\Facade\Pdf::class)) {
            /** @var \Barryvdh\DomPDF\PDF $pdf */
            $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.support-memo', $viewData)
                ->setPaper('a4', 'portrait')
                ->setOptions([
                    'isRemoteEnabled' => true,
                    'isHtml5ParserEnabled' => true,
                    'defaultFont' => 'Helvetica',
                    'dpi' => 150,
                ]);

            return $pdf->download($filename);
        }

        // 2. Direct Dompdf Fallback
        if (class_exists(\Dompdf\Dompdf::class)) {
            $options = new \Dompdf\Options();
            $options->set('isRemoteEnabled', true);
            $options->set('isHtml5ParserEnabled', true);
            $options->setDefaultFont('Helvetica');
            $options->setDpi(150);

            $dompdf = new \Dompdf\Dompdf($options);
            $html = view('pdf.support-memo', $viewData)->render();
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            return response($dompdf->output(), 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
                'Cache-Control' => 'private, max-age=0, must-revalidate',
            ]);
        }

        // 3. Resilient Print Fallback
        $viewData['isPrintFallback'] = true;
        return response()->view('pdf.support-memo', $viewData);
    }

    /**
     * Sanitize query parameters against reflected XSS with strict whitelisting.
     *
     * @param Request $request
     * @return array<string, mixed>
     */
    private function sanitizeParams(Request $request): array
    {
        $rawName = $request->query('name');
        $rawReferrer = $request->query('referrer');

        $cleanName = $this->filterAlphanumeric($rawName, 80);
        $cleanReferrer = $this->filterAlphanumeric($rawReferrer, 80);

        $name = !empty($cleanName) ? $cleanName : 'Engr. Tayo Balogun';
        $referrer = !empty($cleanReferrer) ? $cleanReferrer : 'ExtremeSolutions';

        $refCode = 'EXS-MEMO/SEC-' . date('Y') . '/08';
        $dateStr = date('F j, Y');

        $rawParams = array_filter([
            'name' => $rawName ? $cleanName : null,
            'referrer' => $rawReferrer ? $cleanReferrer : null,
        ]);

        return [
            'name' => htmlspecialchars($name, ENT_QUOTES | ENT_HTML5, 'UTF-8'),
            'referrer' => htmlspecialchars($referrer, ENT_QUOTES | ENT_HTML5, 'UTF-8'),
            'refCode' => $refCode,
            'dateStr' => $dateStr,
            'rawParams' => $rawParams,
        ];
    }

    /**
     * Filter string to clean institutional tokens.
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

        $clean = strip_tags($input);
        $clean = preg_replace('/[^\p{L}\p{N}\s\.\,\&\-\(\)\']/u', '', $clean);
        $clean = preg_replace('/\s+/', ' ', (string) $clean);

        return mb_substr(trim($clean), 0, $maxLength);
    }

    /**
     * Convert an asset to inline base64 Data URI.
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

