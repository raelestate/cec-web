<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Carousel</title>
</head>

<body>
    <h1>CREATE</h1>

    <form method="POST" action="{{ route('carousel.store') }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="carousel_title" placeholder="Carousel Title" />
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="image" />
        </div>
        <div>
            <input type="submit" value="Save" />
        </div>
    </form>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</body>

</html>
