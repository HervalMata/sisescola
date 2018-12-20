<?php

namespace SON\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $id = $this->getData('id');
        $this
            ->add('name', 'text', [
                'label' => 'Nome',
                'ruled' => 'required|max:30'
            ])
            ->add('email', 'email', [
                'label' => 'Email',
                'ruled' => 'required|max:255|unique:users,email,{$id}'
            ])
            ->add('send_mail', 'checkbox', [
                'label' => 'Enviar e-mail de boas vindas',
                'value' => true,
                'checked' => false
            ]);
    }
}
