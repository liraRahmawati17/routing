<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach ($data1 as $dataa)
        id : {{$dataa['id']}} <br>
        name : {{$dataa['name']}} <br>
        username : {{$dataa['username']}} <br>
        email : {{$dataa['email']}} <br>
        alamat : {{$dataa['alamat']}} <br>
        mataPelajaran :
        @foreach($dataa['mapel'] as $mapel)
        <li>{{$mapel}}</li>
        @endforeach
        <hr>
        @endforeach
    </ul>
</body>
</html>
