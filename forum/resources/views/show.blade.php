<x-app-layout>
<h1 class="text-center text-4xl pb-5 pt-3">Welcome to the Forum</h1>

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="text-end">
                        <p class="card-text p-3"><small class="text-muted">{{ $discussion->category->name
                                }} | {{ $discussion->user->username
                                }}</small></p>
                    </div>
                    <div>
                        <img src="{{ asset('images/' . $discussion->picture) }}" class="card-img-top custom-img-size"
                            alt="{{ $discussion->title }}">

                        <div class="pl-5 pt-5 pb-5"> 
                            <h5 class="ml-5 card-title text-lg font-bold">{{ $discussion->title }}</h5>
                            <p class="ml-5 card-text text-gray-600">{{ $discussion->description }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="row">
            <div class="col-8 offset-2">
                <h5 class="card-title text-2xl py-1">Comments:</h5>


                @auth
                <a href="{{ route('comments.create', ['discussion' => $discussion->id]) }}" class="btn btn-primary">Add
                    Comment</a>

                @endauth
                @foreach($discussion->comments as $comment)
                <div class="media border border-gray-300 p-3 mt-3 bg-white">
                    <div class="media-body d-flex justify-content-between">
                        <div class="left">
                            <p>{{ $comment->user->username }} says:</p>
                            <p style="display: inline-block">{{ $comment->content }}</p><span> @if(auth()->id() ==
                                $comment->user_id)
                                <a href="{{ route('comments.edit', $comment->id) }}" class="hover:text-black"><i
                                        class="fa-solid fa-pen-to-square"></i></a>

                                <form action="{{ route('comments.destroy', $comment->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure?')"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>@endif
                            </span>
                        </div>

                        <div>
                            <small class="text-right">{{ $comment->created_at->format('Y-m-d H:i:s')
                                }}</small>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-app-layout>