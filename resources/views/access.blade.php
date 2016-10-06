@extends('master')

@section('content')
        <div class="container-fluid">
            <div>
                <div class="title">Bienvenido: {{ $theEmail }}</div>
                <div class="title">Operative System: {{ $theOS }}</div>
            </div>
            <div>
        		Your interests: <br>
                {{ $theInterests }}
            </div>
                @if($message)
                <div>Aceptó</div>
                @else
                <div>No aceptó</div>
                @endif
        </div>
        
@stop