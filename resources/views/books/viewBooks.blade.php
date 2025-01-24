@extends('layouts.app')

@section('title', 'Books List')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 style="color: var(--primary);">Books List</h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">Add Book</a>
    </div>

    <div class="input-group mb-3">
        <input
            type="text"
            id="searchInput"
            class="form-control"
            placeholder="Search by Title or Author"
        >
    </div>

    @if($books->isEmpty())
        <div class="alert alert-warning">No books available.</div>
    @else
        <table class="table table-hover text-center shadow-sm" id="booksTable">
            <thead class="table-light">
            <tr style="background-color: var(--secondary); color: var(--text);">
                <th class="col-3">Title</th>
                <th class="col-3"> Author</th>
                <th class="col-3">Publication Year</th>
                <th class="col-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr style="color: var(--text);">
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->publication_year }}</td>
                    <td>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="confirmDelete({{ $book->id }})">Delete</button>
                        <form id="delete-form-{{ $book->id }}" action="{{ route('books.destroy', $book) }}"
                              method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div id="noResultsMessage" class="alert alert-warning mt-3" style="display: none;">
            No books match your search.
        </div>
    @endif

    <!-- SweetAlert for Delete Confirmation -->
    <script>
        function confirmDelete(bookId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`delete-form-${bookId}`).submit();
                }
            });
        }

        // Filtering logic with "No Results" message
        document.getElementById('searchInput').addEventListener('keyup', function () {
            const filter = this.value.toLowerCase();
            const rows = document.querySelectorAll('#booksTable tbody tr');
            let visibleRows = 0;

            rows.forEach(row => {
                const title = row.cells[0].textContent.toLowerCase();
                const author = row.cells[1].textContent.toLowerCase();

                if (title.includes(filter) || author.includes(filter)) {
                    row.style.display = '';
                    visibleRows++;
                } else {
                    row.style.display = 'none';
                }
            });

            // Show "No Results" message if no rows are visible
            const noResultsMessage = document.getElementById('noResultsMessage');
            if (visibleRows === 0) {
                noResultsMessage.style.display = 'block';
            } else {
                noResultsMessage.style.display = 'none';
            }
        });
    </script>
@endsection
