<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Posts create</title>
</head>
<body>

      @if ($errors->any())
        @foreach ($errors->all() as $error)
          <div class="error_message">
            <span>{{$error}}</span>
          </div>         
        @endforeach
      @endif

      @if (session()->has('success'))
        <div>
          <span>{{session()->get('success')}}</span>
        </div>          
      @endif
      <div class="container-fluid">
        <div class="mx-auto" style="width:500px">
          <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="external_id">
                External_id
              </label>
              <input class="form-control" id="external_id" type="text" placeholder="98765" name="external_id">
            </div>
    
            <div class="form-group">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="text">
                  Text
              </label>
              <input class="form-control" id="text" type="text" placeholder="text" name="text">
            </div>
    
            <div class="form-group">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="datetime">
                Date
                </label>
                <input class="form-control" id="datetime" type="datetime-local" name="published_at" value="" required>
            </div>
    
            <div class="form-group">
              <label for="exampleFormControlSelect1">Social network</label>
              <select class="form-control" id="exampleFormControlSelect1" name="social_network">
                <option>VK</option>
                <option>Instagram</option>
              </select>
            </div>
    
            <div class="form-group">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                Image
              </label>
              <input class="form-control" id="image" type="file" placeholder="Choose image" name="image">
            </div>
    
            <button type="submit" class="btn btn-primary">
                Save
            </button>
          </form>
        </div>
      </div>
</body>
</html>