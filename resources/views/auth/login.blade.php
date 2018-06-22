@extends('layouts.app')

@section('content')
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css/usuario.css" rel="stylesheet" type="text/css">
            <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
                <title>
                    Login - GesFlotas
                </title>
                <link href="assets/css/style.css" rel="stylesheet">
                    <link href="https://minkay.com.pe/img/favicon.ico" rel="shortcut icon">
                    </link>
                </link>
            </link>
        </link>
    </link>
<body>
    <div class="wrapper">
        <form action="{{ route('login') }}" class="form-signin" method="POST">
            {!! csrf_field() !!}
            <div align="center">
                <img src="assets/img/usuarios.png">
                </img>
            </div>
            <h4 align="center" style="padding-bottom: 15px; letter-spacing: 0.5px; font-weight: bold" >
                Ingrese sus datos
            </h4>
            {{--  {!! $errors->first('email','
            <span class="error">
                :message
            </span>
            ') !!} --}} 
            <ul >
                @foreach ($errors -> all() as $error)
                <li style="color: red" >
                    {{ $error }}
                </li>
                @endforeach
            </ul>
            <input autofocus="" class="form-control" name="email" placeholder="Email" style="margin-bottom:10px" type="email" value="{{ old('email') }}"/>
            {{--   {!! $errors->first('password','
            <span class="error">
                :message
            </span>
            ') !!}  --}} 
            <input class="form-control" name="password" placeholder="Contraseña" type="password"/>
         
            <input button="" class="btn btn-lg btn-primary btn-block" type="submit" value="Entrar">
            
        </form>
    </div>
    @endsection
</body>