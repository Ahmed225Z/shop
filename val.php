<?php
include('config.php');
$ID=$_GET['id'];
$UP=mysqli_query($con,"select * from prod where id=$ID");
$data=mysqli_fetch_array($UP);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تاكيد شراء المنتج</title>
    <link rel="stylesheet" href="memo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center>
        <div class="main">
        <form action="insert_card.php" method="POST">
            <h2>هل تريد فعلا شراء المنتج ؟</h2>
            <input type="text" name="id" value='<?php echo $data['id'] ?>'>
            <input type="text" name="name"  value='<?php echo $data['name'] ?>'>
            <input type="text" name="price"  value='<?php echo $data['price'] ?>'>
            <button name="add" type="submit" class="btn btn-warning">تأكيد اضافة المنتج للعربة</button>
            <br>
            <a href="shop.php">الرجوع لصفحة المنتجات</a>
        </form>
        </div>
    </center>
    <style>
        body{
            font-family: 'Changa', sans-serif;
            font-weight: bold;
        }
        button{
    margin-top: 15px;
    margin-bottom:15px;
}
a{
    text-decoration:none;
    
}
input{
    display:none;
}
.main{
    width:40%;
    padding:20px;
    box-shadow:1px 1px 10px silver;
    margin-top:5-px;
}
        </style>
</body>
</html>