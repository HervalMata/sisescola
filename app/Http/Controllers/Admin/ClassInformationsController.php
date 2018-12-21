<?php

namespace SON\Http\Controllers\Admin;

use Illuminate\Http\Request;
use SON\Http\Controllers\Controller;
use SON\Models\ClassInformation;

class ClassInformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_informations = ClassInformation::paginate();
        return view('admin.class_informations.index', compact('class_informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = \FormBuilder::create(ClassInformation::class, [
            'url' => route('admin.class_informations.store'),
            'method' => 'POST'
        ]);
        return view('admin.class_informations.create', compact('form'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** @var \Form $form */
        $form = \FormBuilder::create(ClassInformation::class);

        if (!$form->isValid()) {
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }

        $data = $form->getFieldValues();
        ClassInformation::create($data);
        $request->session()->flash('message', 'Turma criada com sucesso.');
        return redirect()->route('admin.class_informations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ClassInformation $class_informations)
    {
        return view('admin.class_informations.show', compact('class_informations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassInformation $class_informations)
    {
        $form = \FormBuilder::create(SubjectForm::class, [
            'url' => route('admin.class_informations.update', ['class_informations' => $class_informations->id]),
            'method' => 'PUT',
            'model' => $class_informations
        ]);

        return view('admin.class_informations.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClassInformation $class_informations)
    {
        /** @var \Form $form */
        $form = \FormBuilder::create(ClassInformation::class);

        if (!$form->isValid()) {
            return redirect()
                ->back()
                ->withErrors($form->getErrors())
                ->withInput();
        }

        $data = $form->getFieldValues();
        $class_informations->update($data);
        session()->flash('message', 'Turma editada com sucesso.');
        return redirect()->route('admin.class_informations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassInformation $class_informations)
    {
        $class_informations->delete();
        session()->flash('message', 'Turma excluida com sucesso.');
        return redirect()->route('admin.class_informations.index');
    }
}
