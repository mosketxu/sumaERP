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
                                        <th>Empresa</th>
                                        <th>Tipo</th>
                                        <th>Cif</th>
                                        <th>Conta.</th>
                                        <th>Banco</th>
                                        <th>Iban</th>
                                        <th>P.Pago</th>
                                        <th>F.Pago</th>
                                        <th>Dia</th>
                                        <th>Dia</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empresas as $empresa)
                                    <tr>
                                        <td>{{$empresa->name}}</td>
                                        <td>{{$empresa->tipoempresa->tipempr3}}</td>
                                        <td>{{$empresa->cifnif}}</td>
                                        <td>{{$empresa->cuentacontable}}</td> 
                                        
                                        @foreach ($empresa->bancos as $banco)
                                            <td>{{substr($banco->bank,0,5)}}</td>
                                            <td>{{$banco->iban}}</td>
                                        @endforeach
                                    
                                        @foreach ($empresa->condFacturacions as $condFact)
                                            <td>{{substr($condFact->periodopago,0,5)}}</td>
                                            <td>{{substr($condFact->formapago,0,5)}}</td>
                                            <td>{{$condFact->diafactura}}</td>
                                            <td>{{$condFact->diavencimiento}}</td>
                                        @endforeach
                                        <td>@if($empresa->estado==1)
                                            <i class="fa fa-check "></i>
                                            @endif
                                        </td>
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


