<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Carousel</title>
</head>

<body>
    <h1>EDIT</h1>
    <img src="{{ $carousel->image }}" alt="">
    <form method="POST" action="{{ route('carousel.update', ['carousel' => $carousel]) }}" enctype="multipart/form-data">
        @csrf
        @method('put');
        <div>
            <label>Title</label>
            <input type="text" name="carousel_title" placeholder="Carousel Title"
                value="{{ $carousel->carousel_title }}" />
        </div>
        <div>
            <label>Image</label>

            <input type="file" name="image" value="{{ $carousel->image }}" />
        </div>
        <div>
            <input type="submit" value="Update" />
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
