<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <h2 class="py-4">Comment</h2>

                <form action="{{ route('comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="discussion_id" value="{{ $discussion->id }}">

                    <div class="mb-3">
                        <textarea name="content" id="comment" class="form-control" rows="2"></textarea>
                    </div>

                    <button type="submit" class="btn bg-blue-400 text-white">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>