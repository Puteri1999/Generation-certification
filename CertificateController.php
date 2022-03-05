<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Http\Requests\CertificateRequest;
use \PDF;

class CertificateController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Certificate::class);
    }

    public function __invoke()
    {
        $pdf = PDF::loadView('certificate')->setPaper('a4', 'landscape');

        return $pdf->download('certificate.pdf');
    }

    /**
     * Display the certificate
     *
     * @param \App\Certificate  $model
     * @return \Illuminate\View\View
     */
    public function index(Certificate $model)
    {
        $pdf = PDF::loadView('certificates.index', ['name' => 'PUTERI WARDIAH QASRINA'])->setPaper('a4', 'landscape');
        return $pdf->stream('certificate.pdf');
    }

}
