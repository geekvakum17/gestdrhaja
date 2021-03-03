<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class PosteController extends Controller
{

    //https://spatie.be/docs/laravel-permission/v3/installation-laravel
    public function index()
    {
        $roles = Role::get();
        return view('gestionUsers.poste', compact('roles'));
    }

    public function store(Request $request)
    {
        if (!$request->name) {
            // Flashy::error('ajouter un nom');
            return back();
        }

        try {
            Role::create($request->all());
            // Flashy::success('Enregistrement effectue');
        } catch (\Exception $exception) {
            // Flashy::error('Enregistrement annule');
        }
        return back();
    }

    public function update(Request $request)
    {

        if (!$request->name) {
            // Flashy::error('ajouter un name');
            return back();
        }
        $role = Role::findById($request->id);
        if ($role) {
            $role->update($request->all());
            // Flashy::success('Modification effectue');
        }
        return back();
    }

    public function destroy(Request $request)
    {
        try {
            Role::destroy($request->id);
        } catch (\Exception $exception) {
            //Flashy::error('Suppression interrompu');
        }
        //Flashy::success('Roles efface');
        return back();
    }
}
