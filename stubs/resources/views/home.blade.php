@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="box app-box has-background-info py-6 mb-5">
        <h1 class="title has-text-white ">
            Welcome, {{ Auth::user()->name }}!
        </h1>
        <h2 class="subtitle has-text-white">
            It's
            <time datetime="{{ now()->format('c') }}">
                {{ now()->format('l, F \\t\\h\\e jS \\@ g:i a') }}!
            </time>
        </h2>
    </div>
@endsection
