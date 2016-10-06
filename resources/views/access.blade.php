@extends('master')

@section('content')
        <div class="container">
            <div class="content">
                <div class="title">Bienvenido: {{ $theEmail }}</div>
                <h2>Operative System: {{ $theOS }}</h2>
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