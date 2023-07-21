<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Card editing Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-bottom/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body>

    <main class="container">
        <div class="bg-light p-5 rounded mt-3">
            <h1>Card.{{$card->id}}</h1>

            <form method="post" action="{{ route('card.updatecard', ['card' => $card]) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form mb-3">
                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea">{{ $card->description }}</textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-primary">Update card</button>
                </div>
            </form>


        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
