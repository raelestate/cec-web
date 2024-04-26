<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carousel</title>
</head>

<body>
    <h1>CAROUSEL</h1>
    <div>
        @if (session()->has('success'))
            <div>{{ session('success') }}</div>
        @endif
    </div>
    <div>Create a Carousel</div>
    <a href="{{ route('carousel.create') }}">Create</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($carousel as $carousels)
            <tr>
                <td>{{ $carousels->id }}</td>
                <td>{{ $carousels->carousel_title }}</td>
                <td>
                    <img src="{{ $carousels->image }}" alt="">
                    {{ $carousels->image }}
                </td>
                <td>{{ $carousels->created_at }}</td>
                <td>{{ $carousels->updated_at }}</td>
                <td>
                    <a href="{{ route('carousel.edit', ['carousel' => $carousels]) }}">Edit</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('carousel.destroy', ['carousel' => $carousels]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
