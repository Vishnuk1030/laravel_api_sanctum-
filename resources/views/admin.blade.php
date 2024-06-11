<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pusher</title>
</head>

<body>
    <h2>Welcome to Laravel Pusher</h2>
    <h3 id="name">New order name: <span> </span></h3>
    <h3 id="email">New order email: <span> </span></h3>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('8fe09979c89cb9780ae3', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('orders');
        channel.bind('new-order', function(data) {
            $('h3#name>span').html(data.user.name);
            $('h3#email>span').html(data.user.email);

        });
    </script>

</body>

</html>
