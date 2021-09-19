<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta id="csrf" name="csrf-token" content="{{csrf_token()}}">
    <title>Input:file</title>
</head>
<body>
<form action="/register" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="img_file" id="image" />
    <img width="480" />
    <br />
    <br />
    <button type="submit">Send image</button>
</form>
</body>

<script src="/js/register/script.js"></script>
</html>
