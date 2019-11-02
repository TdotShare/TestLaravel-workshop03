<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เข้าสู่ระบบ</title>

    @include('layout.script_header')
</head>

<body>
    <div class="container">

        <center><h3>เข้าสู่ระบบ<h3></center>

        <br>

        <form action="{{route('login')}}" method="post">
            @csrf
            
                <div class="form-group">
                        <label >Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
        </form>

     


    </div>


</body>

</html>