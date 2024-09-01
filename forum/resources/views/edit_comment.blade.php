<x-app-layout>

<div class="container pt-5">
    <h2 class="py-3">Edit Comment:</h2>

    <form action="{{ route('comments.update', $comment->id) }}" method="POST">
        @csrf
        @method('PATCH') 

        <div class="mb-3">
            <textarea name="content" id="content" class="form-control" rows="4">{{ $comment->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Update Comment</button>
    </form>
</div>
</x-app-layout>
