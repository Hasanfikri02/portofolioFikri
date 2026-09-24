@extends('layouts.app')

@section('title', 'Fikri - Portfolio')

@section('content')

    @include('components.navbar')
    @include('components.hero')
    @include('components.about')
    @include('components.skills')
    @include('components.experience')
    @include('components.projects')
    @include('components.design')
    @include('components.contact')
    @include('components.footer')

@endsection