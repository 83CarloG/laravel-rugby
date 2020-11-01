<?php

namespace App\Http\Controllers;

use App\Component;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $components = Component::all();
        return view('components.index', compact('components'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'nome' => 'required|max:20',
            'cognome' => 'required|max:20',
            'data_nascita' => 'required|date',
            'comune_nascita' => 'required|max:30',
            'provincia_nascita' => 'required|max:30',
            'stato_nascita' => 'required|max:30',
            'comune_residenza' => 'required|max:30',
            'provincia_residenza' => 'required|max:30',
            'indirizzo_residenza' => 'required|max:30',
            'civico_residenza' => 'required|integer',
            'stato_residenza' => 'required|max:30',
            'telefono' => 'required|integer|min:5',
            'email' => 'required|email',
            'ruolo' => 'required|max:20',
            'tesserino' => 'required|unique:components|max:20',
            'note' => 'required|max:400'
        ]);

        $newComponent = new Component();

        $newComponent->fill($validateData)->save();

        return redirect()->route('component.index')->with('success','Componente creato con successo.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $component = Component::find($id);
        return view('components.show', compact('component'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $component = Component::find($id);
        return view('components.edit', compact('component'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nome' => 'required|max:20',
            'cognome' => 'required|max:20',
            'data_nascita' => 'required|date',
            'comune_nascita' => 'required|max:30',
            'provincia_nascita' => 'required|max:30',
            'stato_nascita' => 'required|max:30',
            'comune_residenza' => 'required|max:30',
            'provincia_residenza' => 'required|max:30',
            'indirizzo_residenza' => 'required|max:30',
            'civico_residenza' => 'required|integer',
            'stato_residenza' => 'required|max:30',
            'telefono' => 'required|integer|min:5',
            'email' => 'required|email',
            'ruolo' => 'required|max:20',
            'tesserino' => ['required',
                            'max:20',
                            Rule::unique('components')->ignore($id)
                ],
            'note' => 'required|max:400'
        ]);


        $component = Component::findOrFail($id);

        $component->fill($validateData)->update();

        return redirect()->route('component.show', $component->id)->with('success','Componente modificato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $component = Component::find($id);

        $component->delete();

        return redirect()->route('component.index')->with('success','Componente modificato con successo.');

    }
}
