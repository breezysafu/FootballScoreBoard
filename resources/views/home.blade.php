@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="col-md-7">
                            <i class="fas fa-users fa-5x">
                              <a class="addteam" href="{{ route('control.index') }}" style="font-size:50%">  Add Team</a>
                            </i> <br><br><br>
                            <i class="fas fa-futbol fa-5x">
                              <a class="addscore" href="{{ route('control.manage') }}" style="font-size:50%">   Add Score</a>
                            </i><br><br><br>
                            <i class="fas fa-file-alt fa-5x">
                              <a class="scoreboard" href="{{route('ScoreCard.index')}}" style="font-size:50%">  ScoreBoard</a>
                            </i>
                        </div>
        </div>
    </div>
</div>
@endsection
