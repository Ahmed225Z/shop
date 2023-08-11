<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update product</title>
    <link rel="stylesheet" href="memo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up=mysqli_query($con, "SELECT * FROM prod WHERE id =$ID");
    $data=mysqli_fetch_array($up);
    ?>
   <center>
       <div class="main">
           <form action="up.php" method="post" enctype="multipart/form-data">
       <h1>تعديل المنتجات</h1>
       <img src="setting.png" alt="logo" width="200px";>
       <input type="text" name='id' value='<?php echo $data['id']?>'>
       <br>
       <input type="text" name="name" value='<?php echo $data['name']?>'>

       <br>
       <input type="text" name="price"value='<?php echo $data['price']?>'>
       <br/>
       <input type="file" id="file" name="image"style="display: none;" >
       <label for="file">تحديث صورة المنتج</label>
       <button name='update' type='submit'>تعديل المنتج </button>
       <br><br>
<a class="product" href="products.php">عرض كل المنتجات</a>
</form>
</div>
   </center>
</body>
</html>