<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'label' => 'Nome',
                'ruled' => 'required|max:30'
            ])
            ->add('email', 'email', [
                'label' => 'Email',
                'ruled' => 'required|max:255|unique:users'
            ]);
    }
}
