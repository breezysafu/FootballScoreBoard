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
                        <form action="{{route('control.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="team_a_name">Team A Name</label>
                                <input type="text" name="team_a_name" id="team_a_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="team_b_name">Team B Name</label>
                                <input type="text" name="team_b_name" id="team_b_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="team_a_score">Team A Score</label>
                                <input type="number" name="team_a_score" id="team_a_score" class="form-control" value="0">
                            </div>
                            <div class="form-group">
                                <label for="team_b_score">Team B Score</label>
                                <input type="number" name="team_b_score" id="team_b_score" class="form-control" value="0">
                            </div>

                            <div class="form-group">
                                <label for="starting_time">Starting Time</label>
                                <div id="picker"> </div>
                                <input type="hidden" id="result" value="">
                            </div>
                            <script>
                                $('#picker').dateTimePicker();
                                $('#picker').dateTimePicker({
                                    dateFormat: "YYYY-MM-DD HH:mm"
                                });
                                $('#picker').dateTimePicker({
                                    locale: 'en'
                                });
                                $('#picker').dateTimePicker({
                                    showTime: true
                                });
                                $('#picker').dateTimePicker({
                                    selectData: "now",
                                    positionShift: { top: 20, left: 0},
                                    title: "Select Date and Time",
                                    buttonTitle: "Select"
                                });
                            </script>

                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection