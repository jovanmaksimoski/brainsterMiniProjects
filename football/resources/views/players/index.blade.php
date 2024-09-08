@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('sessionMessages')
            <div class="card">
                <div class="card-header">{{ __('Players') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(auth()->user()->role_id == 1)
                    <div class="d-flex justify-content-end">
                        <a href="/players/create" class="btn btn-primary">Add new player</a>
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">Team</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($players as $player)
                            <tr>
                                <td>{{ $player->name }} {{ $player->surname }}</td>
                                <td>{{ $player->date_of_birth }}</td>
                                <td>{{ $player->team->name }}</td>
                                <td>
                                    <a href="{{ route('players.edit', ['id' => $player->id]) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('players.delete', ['id' => $player->id]) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>        
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
