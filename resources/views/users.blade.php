<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>User List</h1>

    <table border=1>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Profile Photo</td>
        </tr>
        @foreach ($collection as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['first_name']}}</td>
            <td>{{$item['email']}}</td>
            <td><img src="{{$item['avatar']}}" alt=""></td>
        </tr>
        @endforeach
    </table>

<!-- <h1>User Login</h1> -->

    <!-- @if($errors->any())
    @foreach ($errors->all() as $err)
    <li>{{$err}}</li>
    @endforeach
    @endif -->
    <!-- <form action="users" method="POST">
        @csrf
        <input type="text" name="username" placeholder="enter user id" /> <br></br>
        <span style="color: red">@error('username'){{$message}}@enderror</span><br></br>
        <input type="password" name="userpassword" placeholder="enter user password" /> <br></br>
        <span style="color: red">@error('userpassword'){{$message}}@enderror</span><br></br>
        <button type="submit">Login</button>
    </form> -->
</body>
</html>