@extends('layouts/master')

@section('content')
    <h2>Welcome to your special page "{{ Auth::user()->username }}"</h2>
    Your ID is "{{ Auth::user()->id }}"
@stop
