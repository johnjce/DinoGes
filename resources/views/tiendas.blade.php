@extends('layouts.app')

@section('title','DinoGes V1.0')
@section('content')
<h2>Tiendas</h2><br/>
<span class='alert alert-info'>Lineas FTTH</span>
<span class='alert alert-warning'>Teldat C1i+</span><br/><br/>
<table class='table table-hover table-bordered results table-responsive table-striped' id="paginatioe">
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
                <div class="WOCUgreen"></div>
                {{$sede->id_sede}}
            </td>
            <td>
                {{$sede->isla}}
            </td>
            <td>
                {{$sede->tienda}}
            </td>
            <td>
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
<div class="col-md-12 text-center">
    <ul class="pagination pagination-lg pager" id="myPager"></ul>
</div>
@endsection


