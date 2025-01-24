<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Book Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>
<div class="container-fluid vh-100 d-flex align-items-center">
    <div class="row w-100">
        <div class="col-lg-6 d-none d-lg-block p-0">
            <div class="image-side">
                <img src="{{ asset('images/modern-book.jpg') }}" alt="Bookshelf" class="img-fluid vh-100">
            </div>
        </div>

        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <div class="content">
                <h1 class="display-1 fw-bold">Welcome to Your Library</h1>
                <p class="lead mt-3">Manage your books effortlessly and explore the joy of organized reading.</p>

                <div class="mt-9">
                    <a href="{{ route('books.view') }}" class="btn btn-primary btn-lg me-3">View Collection</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
