@extends('layouts.erp')
    @section('content')
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Empresas</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Empresa</th>
                                        <th>Tipo</th>
                                        <th>Cif</th>
                                        <th>Conta.</th>
                                        <th>Banco</th>
                                        <th>Iban</th>
                                        <th>Per.Pago</th>
                                        <th>For.Pago</th>
                                        <th>Dia Fra</th>
                                        <th>Dia Vto</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresas as $empresa)
                                    <tr>
                                        <th scope="row">{{$empresa->id}}</th>
                                        <td>{{$empresa->name}}</td>
                                        <td>{{$empresa->tipoempresa->tipempr3}}</td>
                                        <td>{{$empresa->cifnif}}</td>
                                        <td>{{$empresa->cuentacontable}}</td> 
                                        
                                        @foreach ($empresa->bancos as $banco)
                                            <td>{{$banco->bank5}}</td>
                                            <td>{{$banco->iban}}</td>
                                        @endforeach
                                    
                                        @foreach ($empresa->condFacturacions as $condFact)
                                            <td>{{$condFact->perpago3}}</td>
                                            <td>{{$condFact->forpago3}}</td>
                                            <td>{{$condFact->diafactura}}</td>
                                            <td>{{$condFact->diavencimiento}}</td>
                                        @endforeach
                                        <td>{{$empresa->estado}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


