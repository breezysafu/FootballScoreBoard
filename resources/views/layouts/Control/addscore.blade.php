@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success alert-dismissable custom-success-box" style="margin:15px;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong> {{ session('message') }} </strong>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Team Details</div>
                    <div class="card-body">
                        <form action="{{route('control.update')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$control->id}}">
                            <div class="form-group">
                                <label for="team_a_name">Team A Name</label>
                                <input type="text" name="team_a_name" id="team_a_name" class="form-control" value="{{$control->team_a_name}}">
                            </div>
                            <div class="form-group">
                                <label for="team_b_name">Team B Name</label>
                                <input type="text" name="team_b_name" id="team_b_name" class="form-control" value="{{$control->team_b_name}}">
                            </div>
                            <div class="form-group">
                                <label for="team_a_score">Team A Score</label>
                                <input type="number" name="team_a_score" id="team_a_score" class="form-control" value="{{$control->team_a_score}}">
                            </div>
                            <div class="form-group">
                                <label for="team_b_score">Team B Score</label>
                                <input type="number" name="team_b_score" id="team_b_score" class="form-control" value="{{$control->team_b_score}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">Update Score</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection