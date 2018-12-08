<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

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
        if (Auth::check()) {
            return redirect('erp/empresas');
        }
        return redirect('login');
    }

    public function show()
    {
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

}
