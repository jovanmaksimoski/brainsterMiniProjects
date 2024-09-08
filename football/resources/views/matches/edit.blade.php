@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Match') }}</div>

                <div class="card-body">
                    @include('errors')
                    <form action="{{ route('matches.update', ['id' => $match->id]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="team1">Home Team</label>
                            <select name="team1" id="team1" class="form-control">
                                <option value="0" selected disabled>Select team</option>
                                @foreach($teams as $team)
                                    <option value="{{ $team->id }}" {{ $match->team1_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="team2">Guest Team</label>
                            <select name="team2" id="team2" class="form-control">
                                <option value="0" selected disabled>Select team</option>
                                @foreach($teams as $team)
                                    <option value="{{ $team->id }}" {{ $match->team2_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" name="date" id="date" value="{{ $match->date }}">
                        </div>
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
