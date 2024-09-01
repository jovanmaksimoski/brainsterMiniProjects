<x-app-layout>
    <div class="py-12">
        <div>
            @if (session('success'))
            <div class="alert alert-success mx-5 px-5">
                {{ session('success') }}
            </div>
            @endif
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 class="text-center text-4xl pb-5">Welcome to the Forum</h1>

            <div class="bg-gray-100 sm:rounded-lg">
                <div class="text-gray-900">
                    @auth
                    <!-- <a href="{{ route('discussions.create') }}" class="btn btn-primary">Add New Discussion</a> -->
                    @else
                    <a href="{{ route('login') }}" class="btn btn-secondary"
                        onclick="event.preventDefault(); document.getElementById('redirect-form').submit();">
                        Add new discussion
                    </a>

                    <form id="redirect-form" action="{{ route('login') }}" method="GET" style="display: none;">
                        <input type="hidden" name="error" value="You have to be logged in to do that!">
                    </form>
                    @endauth

                    <div class="container-fluid pr-5">
                        @auth
                        <div class="pb-5"> <a href="{{ route('discussions.create') }}"
                                class="btn btn-secondary text-light">Add New Discussion</a>
                        </div>

                        <!-- Approve Discussions Button for Admin -->
                        @if(auth()->user()->isAdmin())
                        <div> <a href="{{ route('discussions.approve.list') }}"
                                class="btn btn-primary text-white">Approve
                                Discussions</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @endauth

    </div>
    <div class="container pt-3">

        <div>
            @if($discussions->isNotEmpty())

            @foreach($discussions as $discussion)

            @if($discussion->is_approved) {{-- Ensure discussion is approved --}}

            <div class="media mb-3 shadow-sm h-32 bg-white" style="cursor:pointer">
                <a href="{{ route('show', $discussion->id) }}" class="hover:no-underline hover:text-black">
                    {{-- Display the discussion photo --}}
                    <img src="{{ asset('images/' . $discussion->picture) }}"
                        class="align-self-center mr-3 media-img-size" alt="{{ $discussion->title }}"
                        style="width: 150px; height: auto;">

                    <div class="media-body d-flex justify-content-between align-self-center">
                        <div class="left-side">
                            <h3 class="mt-0">{{
                                $discussion->title }}</h3>
                            <p>{{ $discussion->description }}</p>
                        </div>
                        <div class="right-side d-flex justify-space-between">
                </a>
                {{-- Edit and Delete buttons (visible only to the creator of the discussion and the admin) --}}

                @if(auth()->check() && (auth()->user()->isAdmin() || auth()->id() == $discussion->user_id))
                <a href="{{ route('discussions.edit', $discussion->id) }}" class="px-1 mx-1"><i
                        class="fa-solid fa-pen-to-square"></i></a>
                <form action="{{ route('discussions.delete', $discussion->id) }}" method="POST"
                    style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure?')"><i
                            class="fa-solid fa-trash"></i></button>
                </form>
                @endif
                <a href="{{ route('show', $discussion->id) }}" class="hover:no-underline hover:text-black">

                    {{-- Display the category and creator;s username --}}
                    <p class="text-muted pl-3 pr-3">{{ $discussion->category->name }} | {{ $discussion->user->username
                        }}</p>
                </a>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    @else
    <p class="text-muted text-2xl text-center">Nothing yet! Start a topic!</p>
    @endif
    </div>
    </div>

    </div>
    </div>
</x-app-layout>
