@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Player') }}</div>

                <div class="card-body">
                    @include('errors')
                    <form action="{{ route('players.update', ['id' => $player->id]) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $player->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="surname">Surname</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" value="{{ $player->surname }}">
                        </div>
                        <div class="mb-3">
                            <label for="dateOfBirth">Date of birth</label>
                            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" placeholder="" value="{{ $player->date_of_birth }}">
                        </div>
                        <div class="mb-3">
                            <label for="team">Team</label>
                            <select name="team" id="team" class="form-control">
                                <option value="0" selected disabled>Select team</option>
                                @foreach($teams as $team)
                                    <option value="{{ $team->id }}" {{ $player->team_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
