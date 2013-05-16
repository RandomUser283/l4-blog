@extends('layouts/master')

@section('content')
<h1>Login page</h1>
@if (Session::has('flash_error'))
    {{ Session::get('flash_error') }}
@endif

{{ Form::open(array('url' => 'login')) }}

</p>
{{ Form::label('username')}}
<br />
{{ Form::text('username', 'Kullanıcı Adınızı Girin') }}
<br /><br />
{{ Form::label('password', 'Şifre') }}
<br />
{{ Form::password('password') }}
<br />
{{ Form::submit('Gönder') }}

{{ Form::close() }}

@stop
