<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

<form action="/record" method="post" enctype="multipart/form-data">
@csrf
<input type="file" name="mycsv" id="mycsv">
<input type="submit" value="submit">
</form>


<div id="app">
<example-component />
</div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>