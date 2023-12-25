<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        @vite('resources/js/app.js')
</head>
<body>
    <div>
    <ul id="ul">

    </ul>
    <form action="" id = 'form'>
        @csrf
            <label for="">
                input message:
            </label>
            <input type="text" id="input">
    </form>
</div>
</body>
</html>
