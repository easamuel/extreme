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
 * Manages the unlisted Enterprise & Institutional Partnership Portal.
 * Delivers ExtremeSolutions collaboration frameworks ("Building Digital Systems that last"),
 * technology co-creation, regional distribution tracks, and active sector deployments (ExtremeSMS).
 */
class PartnerController extends Controller
{
    /**
     * Display the Enterprise Partnership & Institutional Framework.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        return view('partner.index', [
            'schoolProposalUrl' => route('partner.school'),
            'calBookingUrl' => 'https://cal.com/samuel-ekunyan',
        ]);
    }

    /**
     * Display the Commercial School Partnership Proposal Letter.
     *
     * @param Request $request
     * @return View
     */
    public function schoolProposal(Request $request): View
    {
        $sanitized = $this->sanitizeParams($request);

        return view('partner.school', [
            'proprietor' => $sanitized['proprietor'],
            'school' => $sanitized['school'],
            'refCode' => $sanitized['refCode'],
            'dateStr' => $sanitized['dateStr'],
            'isPersonalized' => $sanitized['isPersonalized'],
            'exportPdfUrl' => route('partner.pdf', $sanitized['rawParams']),
        ]);
    }

    /**
     * Display the Secret Admin Dispatch Console for generating personalized School Proposals.
     *
     * @param Request $request
     * @return View
     */
    public function dispatchProposal(Request $request): View
    {
        $sanitized = $this->sanitizeParams($request);

        return view('partner.dispatch', [
            'initialProprietor' => $sanitized['isPersonalized'] ? $sanitized['proprietor'] : 'Mrs. Adeleke',
            'initialSchool' => $sanitized['isPersonalized'] ? $sanitized['school'] : 'Royal Crown College',
            'refCode' => $sanitized['refCode'],
            'dateStr' => $sanitized['dateStr'],
            'schoolBaseUrl' => route('partner.school'),
            'pdfBaseUrl' => route('partner.pdf'),
        ]);
    }

    /**
     * Export the School Partnership Proposal as an A4 PDF.
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
            'proprietor' => $sanitized['proprietor'],
            'school' => $sanitized['school'],
            'refCode' => $sanitized['refCode'],
            'dateStr' => $sanitized['dateStr'],
            'logoBase64' => $logoBase64,
            'sigBase64' => $sigBase64,
            'isPrintFallback' => false,
        ];

        $targetSlug = Str::slug($sanitized['school'] ?: $sanitized['proprietor']);
        $filename = "ExtremeSolutions-School-Proposal-{$targetSlug}.pdf";

        // 1. Barryvdh DomPDF Facade Integration
        if (class_exists(\Barryvdh\DomPDF\Facade\Pdf::class)) {
            /** @var \Barryvdh\DomPDF\PDF $pdf */
            $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.partner-proposal', $viewData)
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
            $html = view('pdf.partner-proposal', $viewData)->render();
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
        return response()->view('pdf.partner-proposal', $viewData);
    }

    /**
     * Sanitize query parameters with strict token-level filtering against reflected XSS.
     *
     * @param Request $request
     * @return array<string, mixed>
     */
    private function sanitizeParams(Request $request): array
    {
        $rawProprietor = $request->query('proprietor');
        $rawSchool = $request->query('school');

        $cleanProprietor = $this->filterAlphanumeric($rawProprietor, 80);
        $cleanSchool = $this->filterAlphanumeric($rawSchool, 100);

        $proprietor = !empty($cleanProprietor) ? $cleanProprietor : 'School Proprietor / Principal';
        $school = !empty($cleanSchool) ? $cleanSchool : 'Your Secondary Institution';

        $refCode = 'PROP-SEC/RCC/' . date('Y');
        $dateStr = date('F j, Y');

        $rawParams = array_filter([
            'proprietor' => $rawProprietor ? $cleanProprietor : null,
            'school' => $rawSchool ? $cleanSchool : null,
        ]);

        return [
            'proprietor' => htmlspecialchars($proprietor, ENT_QUOTES | ENT_HTML5, 'UTF-8'),
            'school' => htmlspecialchars($school, ENT_QUOTES | ENT_HTML5, 'UTF-8'),
            'refCode' => $refCode,
            'dateStr' => $dateStr,
            'rawParams' => $rawParams,
            'isPersonalized' => !empty($cleanProprietor) || !empty($cleanSchool),
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
