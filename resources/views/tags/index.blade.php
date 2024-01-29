<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
Bonjour {{ $site_name }}

<h1>Tags : </h1>

<form action="{{ route("create-label") }}" method="post">
    @csrf

    <input type="text" name="label" id="">

    @error('label')
        <p>{{ $message  }}</p>
    @enderror
    <button type="submit">submit</button>
</form>

<hr>
@foreach($tags as $tag)
    <h2>{{ $tag->id  }} | {{ $tag->label }}</h2>
    <form action="{{ route("edit-label", $tag) }}" method="post">
        @csrf
        @method('PATCH')

        <input type="text" name="label" id="">

        @error('label')
            <p>{{ $message  }}</p>
        @enderror
        <button type="submit">submit</button>
    </form>
    <form action="{{ route("delete-label", $tag) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
    <hr>
@endforeach


</body>
</html>
