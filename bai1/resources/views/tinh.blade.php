<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <form action="{{route('show')}}" method="post">
      @csrf
      Product Description:
      <input type="text" name="product" placeholder="Nhập mô tả"><br>
      Price:
      <input type="number" name="price" placeholder="Nhập giá"><br>
      Discount Percent:
      <input type="number" name="discountpercent" placeholder="Nhập chiết khấu"><br>
      <input type="submit" value="Tính chiết khấu">
   </form>
</body>

</html>