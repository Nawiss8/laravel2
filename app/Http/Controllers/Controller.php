<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public function create()
    {
        return view('characters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $character = new Character();
        $character->nom = $request->nom;
        $character->prenom = $request->prenom;

        if ($request->hasFile('picture')) {
            $path = $request->file('picture')->store('characters', 'public');
            $character->picture = $path;
        }

        $character->save();

        return redirect()->back()->with('success', 'Personnage ajouté avec succès !');
    }
}
