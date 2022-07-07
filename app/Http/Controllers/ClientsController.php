<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){

        $clients = Clients::get();


        return view('clients.index',[
            'clients' => $clients,
        ]);

    }

    public function create(){

        return view('clients.new_client');

    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required|unique:clients',
            'email' => 'required|email|unique:clients',
            'address' => 'required',
            'population' => 'required',
        ],[
            'name.required' => 'El nombre del cliente es requerido',
            'lastname.required' => 'El apellido del cliente es requerida',
            'phone.unique' => 'El télefono debe ser único',
            'phone.required' => 'El télefono es requerido',
            'email.unique' => 'El email debe ser único',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email es no tiene el formato correcto',
            'address.required' => 'La dirección requerida',
            'population.required' => 'La población es requerida',
        ]

    );

        $client = new Clients;
        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->email = $request->email;
        $client->population = $request->population;
        $client->save();


        return back()->with('success','Cliente creado exitosamente');


    }

    public function edit($id){

        $client = Clients::where('id',$id)->first();

        return view('clients.edit_client',[
            'client' => $client,
        ]);

    }

    public function update(Request $request, $id){


        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'population' => 'required',
        ],[
            'name.required' => 'El nombre del cliente es requerido',
            'lastname.required' => 'El apellido del cliente es requerida',
            'phone.required' => 'El télefono es requerido',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email es no tiene el formato correcto',
            'address.required' => 'La dirección requerida',
            'population.required' => 'La población es requerida',
        ]

    );

        $client = Clients::where('id',$id)->first();
        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->email = $request->email;
        $client->population = $request->population;
        $client->save();


        return back()->with('info','Cliente actualizado exitosamente');;;


    }

    public function delete($id){

        Clients::where('id',$id)->delete();

        return back()->with('warning','Cliente eliminado exitosamente');;;

    }

}
