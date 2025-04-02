<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    @include('partials.header')

    <div class="container mx-auto p-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-3xl font-bold mb-4">{{ $book->title }}</h2>
            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
            <p><strong>Published:</strong> {{ $book->date_published }}</p>
            <p><strong>Description:</strong> {{ $book->description }}</p>
            <a href="{{ route('books.index') }}" class="text-blue-500 mt-4 inline-block">Back to Books List</a>
        </div>
    </div>

    @include('partials.footer')

</body>
</html>
