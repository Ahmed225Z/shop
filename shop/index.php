<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onlone shop</title>
    <link rel="stylesheet" href="memo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
</head>
<body>
   <center>
       <div class="main">
           <form action="insert.php" method="post" enctype="multipart/form-data">
       <h1>تسوق اونلاين</h1>
       <img src="shopping.png" alt="logo" width="400px";>
       <input type="text" name="name">
       <br/>
       <input type="text" name="price">
       <br/>
       <input type="file" id="file" name="image"style="display: none;" >
       <label for="file">اختيار صورة للمنتج</label>
       <button name="upload">رفع المنتج </button>
       <br><br>
<a class="product" href="products.php">عرض كل المنتجات</a>
</form>
</div>
   </center>
</body>
</html>