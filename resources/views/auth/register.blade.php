@extends('app')
@section('content')
    <div class="col-md-6 col-md-offset-2">
        <h1>注册</h1>
        {!! Form::open(['url'=>'auth/register']) !!}
        <div class="form-group">

            {!! Form::label('name','用户名:') !!}

            {!! Form::text('name',null,['class'=>'form-control']) !!}

        </div>
        <div class="form-group">

            {!! Form::label('email','Email:') !!}

            {!! Form::email('email',null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('password','Password:') !!}

            {!! Form::password('password',['class'=>'form-control']) !!}

        </div>
        <div class="form-group">

            {!! Form::label('password_confirmation','Password_confirmation:') !!}

            {!! Form::password('password_confirmation',['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('注册',['class'=>'btn btn-success form-control']) !!}

        </div>

        {!! Form::close() !!}
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection