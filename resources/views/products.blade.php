@extends('master')

@section('content')
        <div class="container">
            <div class="content">
                <div class="title">Productos/Products</div>
                <h2>Productos/Products</h2>
            </div>
            <div>
        		Productos
        	</div>
        </div>
        <div class="rows">
        	<div class="col-md-6">
                @if($theProductsVideos)
        		    <ul>
                        @foreach($theProductsVideos as $productsVideos)
                            <li>{{ $productsVideos }}</li>
                        @endforeach      
                    </ul>
                @else
                    <ul>
                        <li>No hay vídeos.</li>
                    </ul>
                @endif
        		    <ul>
                        @foreach($theOptionsVideos as $optionsVideos)
                            <li>{{ $optionsVideos }}</li>
                        @endforeach  
                    </ul>
        	</div>
        	<div class="col-md-6">
                @if($theProductsImages)
        		    <ul>
                        @foreach($theProductsImages as $productsImages)
                            <li>{{ $productsImages }}</li>
                        @endforeach      
                    </ul>
                @else
                    <ul>
                        <li>No hay imágenes.</li>
                    </ul>
                @endif
        		    <ul>
                        @foreach($theOptionsImages as $optionsImages)
                            <li>{{ $optionsImages }}</li>
                        @endforeach  
                    </ul>
        	</div>
        </div>
        
@stop