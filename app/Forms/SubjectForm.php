<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class SubjectForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'label' => 'Nome',
                'ruled' => 'required|max:255'
            ]);
    }
}
