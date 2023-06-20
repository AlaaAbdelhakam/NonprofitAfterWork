<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Forms\SongForm;
use App\Models\Song;

class SongsController extends BaseController {

    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\SongForm::class, [
            'method' => 'POST',
            'url' => route('song.store')
        ]);

        return view('song.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(\App\Forms\SongForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }
        Song::create($form->getFieldValues());

      
    }
     public function update(int $id, Request $request)
    {
        $songForm = Song::findOrFail($id);

        $form = $this->getForm($songForm);
        $form->redirectIfNotValid();

        $songForm->update($form->getFieldValues());
        return redirect()->back();
        // Do redirecting...
    }
}
