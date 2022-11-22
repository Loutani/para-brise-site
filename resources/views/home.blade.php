@extends('layouts.index')

@section('seo')

@endsection

@section('title', "L'as de carreau")

@section('content')
    <h1>SITE</h1>

    @include('partials.offer')

    @include('partials.insurance')

    @include('partials.services')

    @include('partials.contact')

    @include('partials.feedback')
@endsection