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
<table class="table">
    <thead>
        <tr>
             <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($allUsersData as $user)
        <tr>
            <td scope="row">{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['pass']}}</td>
            <td><a class="btn btn-info" href="edit/id={{$user['id']}}">Edit</a></td>
        </tr>
        @endforeach
            
    </tbody>
</table>
    </div>
</html>