<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="users.css">
</head>
<body>

    <form action="/users/login" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="registerEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="registerEmail" aria-describedby="emailHelp" value="{{old('email')}}" name="email">
            @error('email') 
                <p class="error-msg">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="registerPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="registerPassword"  name="password">
            @error('password') 
                <p class="error-msg">{{$message}}</p>
            @enderror
        </div>
        
        <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn btn-primary" name="submit">Login</button>
            <p class="m-0"> You don't have an account ? Register <a class="text-decoration-none" href="/Register">here</a></p>
        </div>
    </form>
    
</body>
</html>