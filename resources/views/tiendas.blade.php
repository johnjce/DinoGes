@extends('layouts.app')

@section('title','DinoGes V1.1')
@section('content')

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script>
    $.noConflict();
    jQuery(document).ready(function ($) {
        var table = $('#example').DataTable({
            "dom": '<"top"f>rt<"bottom"ip><"clear">'
        });

        $('#example tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });

        $('#button').click(function () {
            table.row('.selected').remove().draw(false);
        });

    });
</script>
<h2>Tiendas</h2><br/>
<span class='alert alert-info'>Lineas FTTH</span>
<span class='alert alert-warning'>Teldat C1i+</span><br/><br/>
<table id="example" class='table table-hover table-bordered results table-responsive table-striped' id="paginatioe">
    <tbody>

        @foreach ($Tiendas as $sede)
        <tr>
            <td colspan="5"><div class="WOCUgreen"></div><b>{{$sede->id_sede}} - 
                    {{$sede->tienda}} - {{$sede->isla}}</b><br> 
                {{$sede->tipo_via}} {{$sede->domicilio}}, 
                {{$sede->num}}, 
                CP {{$sede->cp}},
                ({{$sede->municipio}},{{$sede->poblacion}})
            </td>
        </tr>
        <tr>
            <td><b>TEL:</b> {{$sede->telefono}}</td>
            <td><b>IP:</b> {{$sede->ip}}</td>
            <td colspan="2">
                <div class="PING"><a href="comando.php?c=p&ip={{$sede->ip}}">ping</a></div>
                <div class="TELNET"><a href="comando.php?c=p&ip={{$sede->ip}}">telnet</a></div>
                <div class="SIGA">SIGA</div>
                <div class="SERA">SERA</div>
                <div class="XLAN">XLAN</div>
            </td>
            <td><div class="Datos"></div></td>
        </tr>
        <tr>
            <td><b>TEL bck:</b> {{$sede->backup}}</td>
            @if($sede->ipBck != "") 
                <td><b>IP bck:</b> {{$sede->ipBck}}</td>
                <td colspan="2">                            
                    <div class="PING"><a href="comando.php?c=p&ip={{$sede->ipBck}}">ping</a></div>
                    <div class="TELNET"><a href="comando.php?c=p&ip={{$sede->ipBck}}">telnet</a></div>
                </td> 
            @else
                <td colspan="3"> 
            @endif
            <td><div class="    Voz"></div></td>
        </tr>
        @endforeach

</table>
<div class="col-md-12 text-center">
    <ul class="pagination pagination-lg pager" id="myPager"></ul>
</div>
@endsection


