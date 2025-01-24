@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4" style="color: var(--primary);">Edit Book</h1>
        <form action="{{ route('books.update', $book) }}" method="POST" class="p-4 border rounded shadow-sm" style="background-color: var(--background);" novalidate>
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input
                    type="text"
                    class="form-control @error('title') is-invalid @enderror"
                    id="title"
                    name="title"
                    value="{{ old('title', $book->title) }}"
                    required
                >
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Author:</label>
                <input
                    type="text"
                    class="form-control @error('author') is-invalid @enderror"
                    id="author"
                    name="author"
                    value="{{ old('author', $book->author) }}"
                    required
                >
                @error('author')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="publication_year" class="form-label">Publication Year:</label>
                <input
                    type="text"
                    class="form-control @error('publication_year') is-invalid @enderror"
                    id="publication_year"
                    name="publication_year"
                    value="{{ old('publication_year', $book->publication_year) }}"
                    required
                >
                @error('publication_year')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Book</button>
            <a href="{{ route('books.view') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $('#publication_year').datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true,
            startDate: "1901",
            endDate: "{{ date('Y') }}"
        });
    </script>
@endsection
