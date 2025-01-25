<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>Add New User</h1>
            <form action="{{route('addUser')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <level class="form-level">Name</level>
                    <input type="text"  value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror"  name="username">
                    <span class="text-danger">
                        @error('username')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <level class="form-level">Email</level>
                    <input type="email" value="{{old('useremail')}}" class="form-control @error('useremail') is-invalid @enderror" name="useremail">
                     <span class="text-danger">
                        @error('useremail')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
