@extends('layouts.master')

@section('title', ' | LRWebs')

@section('styles')
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
@include('_includes.nav.nav')
@include('post')
@endsection

