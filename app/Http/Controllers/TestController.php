<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toy;

class TestController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function create()
    {
        return view('create');
    }
    public function insert(Request $request)
    {
         //Validar
         $messages = [
            'name.required' => 'Es necesario ingresar un nombre para el juguete.',
            'name.min' => 'El nombre del jueguete debe tener al menos 3 carecteres.',
            'description.required' => 'La descripción es un campo obligatorio.',
            'description.max' => 'La descrpción sólo admite hasta 200 caracteres.',
            'comment.required' => 'El comentario es un campo obligatorio.',
            'comment.max' => 'El comentario sólo admite hasta 200 caracteres.'
             
        ];
        $rules = [
            'name' => 'required|Min:3',
            'description' => 'required|max:200',
            'comment' => 'required|max:200'
        ];
        $this->validate($request, $rules, $messages);
        $toy = new Toy();
        $toy->name = $request->input('name');
        $toy->description = $request->input('description');
        $toy->comment = $request->input('comment');

        $toy->save();
        $notification = 'Se registró el juguete correctamente';
        return back()->with(compact('notification'));
    }

    public function list()
    {
        $toys = TOY::all ();
        return view('listtoy')->with(compact('toys'));
    }

    public function descriptiontoy($id)
    {
        $showtoy = TOY::find($id);
        return view('descriptiontoy')->with(compact('showtoy'));
    }
}
