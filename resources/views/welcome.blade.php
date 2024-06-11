<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New User</title>
</head>

<body>
    <form action="{{ route('login.save') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="enter the name" id="" class="form-control">
        <input type="text" name="mobile" id="" placeholder="Enter the mobile number" class="form-control">
        <input type="email" name="email" id="" placeholder="Enter the email id" class="form-control">

        <input type="submit" value="Create User">
    </form>

</body>

</html>
