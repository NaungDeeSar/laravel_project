<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    @foreach($students as $stu)

        <p>{{$stu->id}} | {{$stu->rollno}} | {{$stu->name}} | {{$stu->email}} | {{$stu->phone}} | {{$stu->address}} | {{$stu->created_at}} | {{$stu->updatedat}} </p>

    @endforeach
</div>

</body>
</html>