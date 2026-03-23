<?php

namespace App\Http\Controllers;

use App\Superhero;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $heroes = Superhero::all();
        return view('superheroes.index', compact('heroes'));
    }

    public function create()
    {
        return view('superheroes.create');
    }

    public function store(Request $request)
    {
        Superhero::create($request->all());
        return redirect('/superheroes');
    }

    public function show(Superhero $superhero)
    {
        return view('superheroes.show', compact('superhero'));
    }

    public function edit(Superhero $superhero)
    {
        return view('superheroes.edit', compact('superhero'));
    }

    public function update(Request $request, Superhero $superhero)
    {
        $superhero->update($request->all());
        return redirect('/superheroes');
    }

    public function destroy(Superhero $superhero)
    {
        $superhero->delete();
        return redirect('/superheroes');
    }
}