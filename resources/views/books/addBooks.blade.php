@extends('layouts.app')

@section('title', 'Add Book')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4" style="color: var(--primary);">Add a New Book</h1>
        <form action="{{ route('books.store') }}" method="POST" class="p-4 border rounded shadow-sm"
              style="background-color: var(--background);">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input
                    type="text"
                    id="title"
                    name="title"
                    class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title') }}"
                    required
                >
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input
                    type="text"
                    id="author"
                    name="author"
                    class="form-control @error('author') is-invalid @enderror"
                    value="{{ old('author') }}"
                    required
                >
                @error('author')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="publication_year" class="form-label">Publication Year</label>
                <input
                    type="text"
                    id="publication_year"
                    name="publication_year"
                    class="form-control @error('publication_year') is-invalid @enderror"
                    value="{{ old('publication_year') }}"
                    required
                >
                @error('publication_year')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add Book</button>
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
