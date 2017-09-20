@extends('app')
@section('content')
    <div class="col-md-6 col-md-offset-2">
        <h1>登录</h1>
        {!! Form::open(['url'=>'auth/login']) !!}

        <div class="form-group">

            {!! Form::label('email','Email:') !!}

            {!! Form::email('email',null,['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('password','Password:') !!}

            {!! Form::password('password',['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('登录',['class'=>'btn btn-success form-control']) !!}

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