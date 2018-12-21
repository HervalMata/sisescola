<?php

namespace SON\Forms;

use Carbon\Carbon;
use Kris\LaravelFormBuilder\Form;

class ClassInformationForm extends Form
{
    public function buildForm()
    {
        $formatDate = function ($value) {
            return ($value && $value instanceof Carbon) ? $value->format('Y-m-d'): $value;
        };
        $this
            ->add('date_start', 'date', [
                'label' => 'Data Inicio',
                'ruled' => 'required|date',
                'value' => $formatDate
            ])
            ->add('date_end', 'date', [
                'label' => 'Data Final',
                'ruled' => 'required|date',
                'value' => $formatDate
            ])
            ->add('cycle', 'number', [
                'label' => 'Ciclo',
                'ruled' => 'required|integer'
            ])
            ->add('subdivision', 'number', [
                'label' => 'Sub-divisão',
                'ruled' => 'required|integer'
            ])
            ->add('semester', 'number', [
                'label' => 'Semestre (1 ou 2)',
                'ruled' => 'required|integer'
            ])
            ->add('year', 'number', [
                'label' => 'Ano',
                'ruled' => 'required|integer'
            ]);
    }
}
