<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="{{route('test-post-uploadimage')}}" method="post" enctype="multipart/form-data">
@csrf
upload gambar 
<input type="file" name="image_menu">
<button type="submit">upload</button>
</form>
    
</body>
</html>