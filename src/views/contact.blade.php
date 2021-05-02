<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package Dev Learn</title>
</head>

<body>
    <h1>Contact Us Any Time</h1>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" autofocus="true">
        <br />
        <br />
        <input type="email" name="email" placeholder="Enter your email">
        <br />
        <br />
        <textarea name="message" cols="30" rows="10" placeholder="Enter your query"></textarea>
        <br />
        <button type="submit">Submit</button>
    </form>
</body>

</html>
