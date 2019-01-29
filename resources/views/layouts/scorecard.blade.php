@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Started At: {{ $control->created_at->format('G:i a') }}</h1>
            <h1>{{ $control->team_a_name}}</h1>
            <h1>{{ $control->team_a_score }}</h1>
            <h1>{{ $control->team_b_name }}</h1>
            <h1>{{ $control->team_b_score }}</h1>
        </div>
    </div>
@endsection