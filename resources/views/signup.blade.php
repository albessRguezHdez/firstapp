@extends('master')

@section('content')
        <div class="container">
            <div class="content">
                <div class="title">Ingresar/Sign Up</div>
                <h2>Ingresar/Sign Up</h2>
            </div>
            <div>
        		<h3>Iniciar sesión.</h3>
                Creativeuser...
        	</div>
        </div>

        <div class="rows">
            {!! Form::open(['url'=>'home/access', 'method' => 'post', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                {!! Form::label('email', 'E-mail Address') !!}
                {!! Form::text('email') !!}
                </div>

                <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'awesome']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('os','Operating System') !!}
                {!! Form::select('os', array(
                    'linux' => 'Linux',
                    'mac' => 'Mac OS X',
                    'win' => 'Windows'
                )) !!}
                </div>

                <div class="form-group">
                {!! Form::label('comment', 'Comments') !!}
                {!! Form::textarea('comment', '', array('placeholder' => 'What are your interests?')) !!}
                </div>

                <div class="form-group">
                {!! Form::checkbox('agree','yes', false) !!}
                {!! Form::label('agree','I agree to your terms of service.') !!}
                </div>

                <div class="form-group">
                {!! Form::submit('Sign Up', array('class' => 'btn btn-primary')) !!}
                </div>

            {!! Form::close() !!}
        </div>
@stop