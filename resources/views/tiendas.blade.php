@extends('layouts.app')

@section('title','DinoGes V1.0')
@section('content')
<h2>Tiendas</h2>
<table class='table table-hover table-bordered results table-responsive'>
    <span class='label pull-left label-info'>Lineas FTTH</span>
    <span class='label pull-left label-warning'>Teldat C1i+</span><br>
    <thead>
        <tr>
            <th>
                Sede
            </th>
            <th>
                Isla
            </th>
            <th>
                Tienda
            </th>
            <th>
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Sedes as $sede)
        <tr>
            <td>
                {{$sede->id_sede}}
            </td>
            <td>
                {{$sede->isla}}
            </td>
            <td>
                {{$sede->tienda}}
            </td>
            <td>
                <div class="WOCUgreen"></div>
                <div class="WOCUyellow"></div>
                <div class="WOCUblue"></div>
                <div class="WOCUred"></div>
                <div class="Datos"></div>
                <div class="Voz"></div>
                <div class="PING">ping</div>
                <div class="TELNET">telnet</div>

                <div class="SIGA">SIGA</div>
                <div class="SERA">SERA</div>
                <div class="XLAN">XLAN</div>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection


