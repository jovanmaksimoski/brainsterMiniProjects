@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('sessionMessages')
            <div class="card">
                <div class="card-header">{{ __('Matches') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(auth()->user()->role_id == 1)
                    <div class="d-flex justify-content-end">
                        <a href="/matches/create" class="btn btn-primary">Add new match</a>
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Team 1</th>
                            <th scope="col">Team 2</th>
                            <th scope="col">Result</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($matches as $match)
                            <tr>
                                <td>{{ $match->team1->name }}</td>
                                <td>{{ $match->team2->name }}</td>
                                <td>
                                    @if($match->team1_goals == null && $match->team2_goals == null)
                                        /
                                    @else
                                        {{ $match->team1_goals }} : {{ $match->team2_goals }}
                                    @endif
                                </td>
                                @if(auth()->user()->role_id == 1)
                                    <td>
                                        <a href="{{ route('matches.edit', ['id' => $match->id]) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('matches.delete', ['id' => $match->id]) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                @endif
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
