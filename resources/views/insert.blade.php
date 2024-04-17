<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
   <div class="container p-5">
    <form action="" method="post">
        @csrf
<div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" id="" value="{{old('name'}}" class="form-control" placeholder="" aria-describedby="helpId">
  @error('name')
  <small class="text-danger">{{$message}}</small>
  @enderror
</div>
<div class="form-group">
  <label for="">Email</label>
  <input type="text" name="email" id="" value="{{old('email'}}" class="form-control" placeholder="" aria-describedby="helpId">
  @error('email')
  <small class="text-danger">{{$message}}</small>
  @enderror
</div>
<div class="form-group">
  <label for="">password</label>
  <input type="text" name="pass" id="" value="{{old('pass'}}" class="form-control" placeholder="" aria-describedby="helpId">
  @error('pass')
  <small class="text-danger">{{$message}}</small>
  @enderror
</div>
<button type="submit" class="btn btn-info">submit</button>

    </form>
   </div>
  </body>
</html>