<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Edit Discussion</h1>

                    {{-- Display errors, if any --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {{-- Edit Discussion Form --}}
                    <form action="{{ route('discussions.update', $discussion->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        {{-- Title --}}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $discussion->title }}" required>
                        </div>

                        {{-- Picture --}}
                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <input type="file" class="form-control" id="picture" name="picture">
                            <small>Current Picture: {{ $discussion->picture }}</small>
                        </div>

                        {{-- Description --}}
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description"
                                required>{{ $discussion->description }}</textarea>
                        </div>

                        {{-- Category --}}
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select class="form-control" id="category_id" name="category_id">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $discussion->category_id == $category->id ?
                                    'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Submit --}}
                        <button type="submit" class="btn bg-blue-400">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>