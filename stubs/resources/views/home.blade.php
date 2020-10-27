@extends('layouts.app')

@section('content')
    <section class="hero is-info is-large">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Welcome, {{ Auth::user()->name }}!
                </h1>
                <h2 class="subtitle">
                    It's
                    <time datetime="{{ now()->format('c') }}">
                        {{ now()->format('l, F \\t\\h\\e jS \\@ g:i a') }}!
                    </time>
                </h2>
            </div>
        </div>
    </section>
@endsection
