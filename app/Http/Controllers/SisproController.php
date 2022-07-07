<?php

namespace App\Http\Controllers;

use App\Models\Sispro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class SisproController extends Controller
{
    public function index(){

        return view('sispro.index');

    }

    public function generateToken(Request $request){

        $generate_token = \Http::withOptions(['verify' => false])->get("https://tablas.sispro.gov.co/WSSUMMIPRESNOPBS/api/GenerarToken/$request->nit/$request->token");

        if ($generate_token->status()==200) {

            $token = $generate_token->json();
            $DireccionamientoXFecha = \Http::withOptions(['verify' => false])->get("https://tablas.sispro.gov.co/WSSUMMIPRESNOPBS/api/DireccionamientoXFecha/$request->nit/$token/2019-07-30");

            return view('sispro.list',[
                'fields' => $DireccionamientoXFecha->json(),
            ]);

        }else{
            return back()->with('error','El token no es valido, vuelva a ingresar las credenciales');
        }


    }
}
