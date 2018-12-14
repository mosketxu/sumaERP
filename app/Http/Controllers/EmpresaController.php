<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Input;
// use Illuminate\Support\Facades\Storage;


class EmpresaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // if (Auth::check()) {
        //     return redirect('erp/empresas');
        // }
        // return redirect('login');
        // $empresas = DB::table('empresas')
        //     ->join('bancos', 'empresas.id', '=', 'bancos.empresa_id')
        //     ->join('condicion_facturacions', 'empresas.id', '=', 'condicion_facturacions.empresa_id')
        //     ->join('forma_pagos', 'forma_pagos.id', '=', 'condicion_facturacions.formapago_id')
        //     ->join('periodo_pagos', 'periodo_pagos.id', '=', 'condicion_facturacions.periodopago_id')
        //     ->join('tipo_empresas', 'tipo_empresas.id', '=', 'empresas.tipoempresa_id')
        //     ->get();

        $empresas = Empresa::with([
            'tipoempresa',
            'bancos' => function ($q) {
                $q->join('banks', 'banks.id', '=', 'bancos.bank_id')
                    ->where('principal', '=', '1');
            },
            'condFacturacions' => function ($q) {
                $q->join('forma_pagos', 'forma_pagos.id', '=', 'condicion_facturacions.formapago_id')
                    ->join('periodo_pagos', 'periodo_pagos.id', '=', 'condicion_facturacions.periodopago_id');
            }
        ])->get();
        // dd($empresas);
        // dd($empresas->banco->banco);
        // dd($empresas->tipoempresa->tipoempresa);
        if (auth()->user()->role_id == '1') {
            return view('partials.erp.admin', compact('empresas'));
        } elseif (auth()->user()->role_id == '2') {
            return view('partials.erp.suma', compact('empresas'));
        }
        return view('partials.erp.cliente', compact('empresas'));
    }

    public function create()
    {
        $empresas = Empresas::all();
        return view('partials.erp.cliente', compact('empresas'));
    }

    public function store(Request $request)
    {
        $empresa = new Empresa();

        $empresa->name = $request->name;
        $empresa->direccion = $request->direccion;
        $empresa->codpostal = $request->codpostal;
        $empresa->localidad = $request->localidad;
        $empresa->provincia_id = $request->provincia_id;
        $empresa->pais_id = $request->pais_id;
        $empresa->cifnif = $request->cifnif;
        $empresa->tfno = $request->tfno;
        $empresa->email = $request->email;
        $empresa->web = $request->web;
        $empresa->idioma = $request->idioma;
        $empresa->cuentacontable = $request->cuentacontable;
        $empresa->marta = $request->marta;
        $empresa->susana = $request->susana;
        $empresa->observaciones = $request->observaciones;
        $empresa->estado = 1;

        $empresa->save();;

        return redirect('erp/empresas')->with('message', 'Guardado Satisfactoriamente !');
    }

    public function show()
    {
    }

}
