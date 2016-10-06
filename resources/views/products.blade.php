@extends('master')

@section('content')
        <div class="container-fluid">
            <div>
                <div class="title">Products</div>
                <h2>Productos</h2>
            </div>
            <div>
        		Productos
        	</div>
        </div>
        <div class="rows">
        	<div class="col-md-6">
                @if($theProductsVideos)
        		    <ul class="glyphicon glyphicon-facetime-video list-group">
                        @foreach($theProductsVideos as $productsVideos)
                            <li class="list-group-item">{{ $productsVideos }}</li>
                        @endforeach      
                    </ul>
                @else
                    <ul class="glyphicon glyphicon-facetime-video list-group">
                        <li class="list-group-item">No hay vídeos.</li>
                    </ul>
                @endif
        		    <ul class="glyphicon glyphicon-facetime-video list-group">
                        @foreach($theOptionsVideos as $optionsVideos)
                            <li class="list-group-item">{{ $optionsVideos }}</li>
                        @endforeach  
                    </ul>
        	</div>
        	<div class="col-md-6">
                @if($theProductsImages)
        		    <ul class="glyphicon glyphicon-picture list-group">
                        @foreach($theProductsImages as $productsImages)
                            <li class="list-group-item">{{ $productsImages }}</li>
                        @endforeach      
                    </ul>
                @else
                    <ul class="glyphicon glyphicon-picture list-group">
                        <li class="list-group-item">No hay imágenes.</li>
                    </ul>
                @endif
        		    <ul class="glyphicon glyphicon-picture list-group">
                        @foreach($theOptionsImages as $optionsImages)
                            <li class="list-group-item">{{ $optionsImages }}</li>
                        @endforeach  
                    </ul>
        	</div>
        </div>
        
@stop