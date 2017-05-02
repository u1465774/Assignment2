<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
  public function store(Request $request, Card $card)
  {
    //$note = new Note;

    //$note->body = $request->body;

    //$card->notes()->save($note);

    //return back();
    $this->validate($request, ['body' => 'required|min:8'
    ]);

    $note = new Note($request->all());

    $card->addNote($note, 1);

    return back();
  }

  public function edit(Note $note)
  {
    return view('notes.editnote', compact('note'));
  }

  public function update(Request $request, Note $note)
  {
    $note->update($request->all());
    return back();
  }
}
