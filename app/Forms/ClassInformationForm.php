<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class ClassInformationForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('date_start', 'date', [
                'label' => 'Data Inicio',
                'ruled' => 'required|date'
            ])
            ->add('date_end', 'date', [
                'label' => 'Data Final',
                'ruled' => 'required|date'
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
