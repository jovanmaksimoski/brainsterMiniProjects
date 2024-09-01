<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div>

                    <form action="{{ route('discussions.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="pb-4 form-group">
                            <label for="title">
                                Title:</label>
                            <input class="form-control" type="text" id="title" name="title" required>

                        </div>

                        <div class="d-flex flex-column pb-4">
                            <label for="picture">Photo</label>
                            <input type="file" id="picture" name="picture" required>
                        </div>

                        <div class="form-group pb-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="3" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group pb-3">
                            <label for="category_id">Category:</label>
                            <select name="category_id" id="category_id" required>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn bg-blue-400 text-white">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>