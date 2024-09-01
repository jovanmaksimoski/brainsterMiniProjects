<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container pt-5">

    <h1 class="text-center text-4xl pb-5">Welcome to the Forum</h1>

        <div class="pb-5">
            @auth
            <div class="pb-2 pl-5"> <a href="{{ route('discussions.create') }}" class="btn btn-secondary text-light">Add
                    New Discussion</a>
            </div>

            <!-- Approve Discussions Button for Admin -->
            @if(auth()->user()->isAdmin())
            <!-- Replace isAdmin() with your method to check if the user is an admin -->
            <div class="pl-5"> <a href="{{ route('discussions.approve.list') }}"
                    class="btn btn-primary text-dark">Approve
                    Discussions</a>
            </div>
            @endif
            @endauth
        </div>
        <div class="container pt-4">


            {{-- Check if there are any discussions to display --}}
            @if($discussions->isNotEmpty())
            @foreach($discussions as $discussion)
            <div class="media mb-3 shadow-sm bg-white h-32">
                {{-- Display the discussion photo --}}
                <img src="{{ asset('images/' . $discussion->picture) }}" class="align-self-center mr-3 media-img-size"
                    alt="{{ $discussion->title }}" style="width: 100px;">

                <div class="media-body d-flex justify-content-between pt-5">
                    <div class="left-side">
                        {{-- Display the discussion title and description --}}
                        <h3 class="mt-0">{{ $discussion->title }}</h3>
                        <p>{{ $discussion->description }}</p>
                    </div>
                    <div class="right-side d-flex justify-space-around">

                        <div class="left-side mr-3">
                            {{-- Action buttons --}}
                            <div class="mt-2">
                                <form action="{{ route('discussions.approve.single', $discussion->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit"><i class="fa-solid fa-check"></i></button>
                                </form>
                                <a href="{{ route('discussions.edit', $discussion->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('discussions.delete', $discussion->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="right-side mr-2">
                            {{-- Display the category and creator --}}
                            <p class="text-muted">{{ $discussion->category->name }} | {{
                                $discussion->user->username
                                }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No discussions pending approval.</p>
            @endif
        </div>
    </div>
</x-app-layout>