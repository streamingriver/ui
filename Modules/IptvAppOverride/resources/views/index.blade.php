@extends('iptvappoverride::layouts.master')

@section('content') 
    <h1>Hello World Override</h1>

    <p>Module: {!! config('iptvappoverride.name') !!}</p>

@endsection
