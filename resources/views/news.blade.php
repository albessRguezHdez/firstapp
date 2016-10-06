@extends('master')

@section('content')
        <div class="container-fluid">
            <div>
                <div class="title">News</div>
                <h2>Noticias</h2>
            </div>
            <div>
                @if($theNews)
        		    <ul>
                        @foreach($theNews as $news)
                            <li>{{ $news }}</li>
                        @endforeach      
                    </ul>
                @else
                    <ul>
                        <li>No hay noticias.</li>
                    </ul>
                @endif
        		    <ul>
                        @foreach($theOptionsNews as $optionsNews)
                            <li>{{ $optionsNews }}</li>
                        @endforeach  
                    </ul>
        	</div>
            <div>
                Eventos.
            </div>
        </div>
        
@stop