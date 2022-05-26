<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="{{route('showdich')}}" method="post">
      @csrf
      Nhập từ cần dịch
      <input type="text" name="dich" placeholder="Nhập từ cần dịch"><br>  
      <input type="submit" value="Dịch">
   </form>
</body>

</html>