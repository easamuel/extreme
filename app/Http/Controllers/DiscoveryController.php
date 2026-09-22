<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

/**
 * Class DiscoveryController
 * 
 * Manages the unlisted R&D pipeline & systems intelligence platform:
 * Track 1: Public Systems Teardown (Espass & ExtremeSMS architectural deconstructions).
 * Track 2: Private Founder Brief (token-gated, unindexed memorandum by Samuel Ekunyan).
 */
class DiscoveryController extends Controller
{
    /**
     * Display the Public Systems Engineering Teardown (Espass & ExtremeSMS).
     *
     * @return View
     */
    public function systemsIndex(): View
    {
        return view('discoveries.systems');
    }

    /**
     * Display the Token-Gated Private Founder Brief (Stealth Track).
     *
     * @param Request $request
     * @param string $token
     * @return View
     */
    public function stealthBrief(Request $request, string $token): View
    {
        $this->authorizeToken($token);

        return view('discoveries.stealth', [
            'token' => $token,
            'exportPdfUrl' => route('discoveries.stealth.pdf', ['token' => $token]),
            'dateStr' => date('F j, Y'),
        ]);
    }

    /**
     * Export the Private Founder Brief as a minimalist A4 PDF.
     *
     * @param Request $request
     * @param string $token
     * @return Response|\Symfony\Component\HttpFoundation\Response
     */
    public function exportStealthPdf(Request $request, string $token): \Symfony\Component\HttpFoundation\Response
    {
        $this->authorizeToken($token);

        $logoBase64 = $this->assetToBase64(public_path('images/es-mark.png'));
        $sigBase64 = $this->assetToBase64(public_path('images/signature.png'));

        $viewData = [
            'token' => $token,
            'dateStr' => date('F j, Y'),
            'logoBase64' => $logoBase64,
            'sigBase64' => $sigBase64,
            'isPrintFallback' => false,
        ];

        $filename = "ExtremeSolutions-Stealth-Founder-Brief-" . date('Ymd') . ".pdf";

        // 1. Barryvdh DomPDF Facade Integration
        if (class_exists(\Barryvdh\DomPDF\Facade\Pdf::class)) {
            /** @var \Barryvdh\DomPDF\PDF $pdf */
            $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.stealth-memo', $viewData)
                ->setPaper('a4', 'portrait')
                ->setOptions([
                    'isRemoteEnabled' => true,
                    'isHtml5ParserEnabled' => true,
                    'defaultFont' => 'DejaVu Sans',
                    'dpi' => 96,
                ]);

            return $pdf->download($filename);
        }

        // 2. Direct Dompdf Fallback
        if (class_exists(\Dompdf\Dompdf::class)) {
            $options = new \Dompdf\Options();
            $options->set('isRemoteEnabled', true);
            $options->set('isHtml5ParserEnabled', true);
            $options->setDefaultFont('DejaVu Sans');
            $options->setDpi(96);

            $dompdf = new \Dompdf\Dompdf($options);
            $html = view('pdf.stealth-memo', $viewData)->render();
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
        return response()->view('pdf.stealth-memo', $viewData);
    }

    /**
     * Enforce strict token authorization for the private founder brief.
     *
     * @param string $token
     * @return void
     */
    private function authorizeToken(string $token): void
    {
        $validToken = (string) config('services.stealth.token', 'alpha-es-stealth-7749');

        if (!hash_equals($validToken, $token)) {
            abort(404);
        }
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

