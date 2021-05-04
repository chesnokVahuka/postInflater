<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Posts</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @foreach ($posts as $post)       
                <div class="col-md-4">
                    @foreach ($post->resources as $image)
                        <div class="card" style="width: 100%;">
                        <img class="card-img-top" src={{asset('storage/'. $image['path'])}} alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">{{$post['text']}}</p>
                                <p class="card-text">{{$post['published_at']}}</p>
                            </div>
                        </div>
                    @endforeach               
                </div>
            @endforeach 
        </div>
         
    </div>
</body>
</html>