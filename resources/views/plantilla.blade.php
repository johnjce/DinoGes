@extends('layouts.app')

@section('title','DinoGes V1.0')
@section('content')
    <div class="panel panel-info">
        <div class="panel-heading"><b>Generador de plantillas:</b></div>
        <div class="panel-body">
            <div class="form-group pull-left">
                <form method="post" action="{{ action('PlantillaController@generatePlantilla') }}" class="navbar-form navbar-left" >
                    <input type="text" class="search form-control" placeholder="Sede para generar plantilla" name="sede">
                    <input type="text" class="form-control" placeholder="IP Gestión 3G" name="ip3g">
                    <button type="submit" class="btn btn-default">Generar</button>
                {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

@endsection