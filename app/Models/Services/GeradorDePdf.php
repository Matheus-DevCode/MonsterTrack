<?php

namespace App\Models\Services;

use Barryvdh\DomPDF\PDF;
use Illuminate\Contracts\Container\BindingResolutionException;

class GeradorDePdf
{
    /**
     * @throws BindingResolutionException
     */
    public static function gerarPdfDesempenhoSegunda(array $treino): string
    {
        $html = view('desempenhoSegunda_pdf', compact('treino'))->render();
        $pdf = app()->make(PDF::class);
        $pdf->loadHTML($html);

        $filename = storage_path('app/desempenhoSegunda.pdf');
        $pdf->save($filename);

        return $filename;
    }

    /**
     * @throws BindingResolutionException
     */
    public static function gerarPdfDesempenhoTerca(array $treino): string
    {
        $html = view('desempenhoTerca_pdf', compact('treino'))->render();
        $pdf = app()->make(PDF::class);
        $pdf->loadHTML($html);

        $filename = storage_path('app/desempenhoTerca.pdf');
        $pdf->save($filename);

        return $filename;
    }

    /**
     * @throws BindingResolutionException
     */
    public static function gerarPdf(array $treino): string
    {
        $html = view('treino_pdf', compact('treino'))->render();

        /** @var PDF $pdf */
        $pdf = app()->make(PDF::class);
        $pdf->loadHTML($html);

        $filename = storage_path('app/treino.pdf');
        $pdf->save($filename);

        return $filename;
    }

}
