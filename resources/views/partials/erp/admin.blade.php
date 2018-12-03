@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Empresas</h1>
    {{-- @foreach ($empresas as $emp)
        {{$emp->name}}
        <br>
        {{$emp->tipoempresa->tipoempresa}}
        <br>
        @foreach ($emp->bancos as $banco)
            {{$banco->banco}}        
        @endforeach
    @endforeach --}}
    
    <table class="table table-sm table-hover">
        <thead class="thead-dark ">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Empresa</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cif</th>
                <th scope="col">CuentaCtble</th>
                <th scope="col">Banco</th>
                <th scope="col">Iban</th>
                <th scope="col">Periodo Pago</th>
                <th scope="col">Forma Pago</th>
                <th scope="col">Dia Fra</th>
                <th scope="col">Dia Vto</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($empresas as $empresa)
            <tr>
                <th scope="row">{{$empresa->id}}</th>
                <td>{{$empresa->name}}</td>
                <td>{{$empresa->tipoempresa->tipoempresa}}</td>
                <td>{{$empresa->cifnif}}</td>
                <td>{{$empresa->cuentacontable}}</td> 
                
                @foreach ($empresa->bancos as $banco)
                    <td>{{$banco->banco}}</td>
                    <td>{{$banco->iban}}</td>
                @endforeach
               
                @foreach ($empresa->condFacturacions as $condFact)
                    <td>{{$condFact->perpago3}}</td>
                    <td>{{$condFact->forpago3}}</td>
                    <td>{{$condFact->diafactura}}</td>
                    <td>{{$condFact->diavencimiento}}</td>
                @endforeach
                <td>{{$empresa->estado}}</td>
            {{-- </tr> --}}
        @endforeach
      </tbody>
    </table>
</div>
@endsection

