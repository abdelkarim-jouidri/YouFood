<!-- <form action="/plates" method="POST">
    @csrf
    <label for="">name</label>
    <input type="text" name="name">
    @error('name')
        <p style="color:red;"> {{$message}}</p>
    @enderror
    <label for="">description</label>
    <input type="text" name="description">
    <input type="submit" name="submit">
</form> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="form-container">
    <form  method="POST" class="d-flex flex-column" action="/plates/{{$plate->id}}">
        @csrf
        @method('PUT')
        <div class="input-group">
            <label for="">name</label>
            <input type="text" name="name" value="{{$plate->name}}">
            @error('name')
                <p style="color:red;"> {{$message}}</p>
            @enderror
        </div>
        <div class="input-group">
            <label for="">description</label>
            <input type="text" name="description" value="{{$plate->description}}">
            @error('description')
                <p style="color:red;"> {{$message}}</p>
            @enderror
        </div>
        <input type="submit" name="submit">
    </form>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
</body>
</html>