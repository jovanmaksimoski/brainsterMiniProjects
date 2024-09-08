@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('sessionMessages')
            <div class="card">
                <div class="card-header">{{ __('Teams') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(auth()->user()->role_id == 1)
                    <div class="d-flex justify-content-end">
                        <a href="/teams/create" class="btn btn-primary">Add new team</a>
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Year of Foundation</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($teams as $team)
                            <tr>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->year_of_foundation }}</td>
                                <td>
                                    <a href="{{ route('teams.edit', ['id' => $team->id]) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('teams.delete', ['id' => $team->id]) }}" method="POST" class="d-inline-block">
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
