<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عربة التسوق</title>
    <link rel="stylesheet" href="memo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    h3{
        font-family: 'Changa', sans-serif;
    font-weight: bold;
    color:black;
    }
    main{
        width:40%;
        margin-top:30px;
    }
    table{
        box-shadow:1px 1px 10px silver;
        
    }
    thead{
        font-weight: bold;
        font-family: 'Changa', sans-serif;
        font-weight: bold;
        background-color: black;
        color:white;
        text-align: center;
      }
      tbody{
        
        text-align: center;
        /* background-color:#fbad21; */
        color: white;
        font-weight: bold;
        font-family: 'Changa', sans-serif;
        font-weight: bold;
        color:black;
      }
      a{
        
text-decoration: none;
font-family: 'Changa', sans-serif;
    font-weight: bold;
    font-size:20px;
    
      }
</style>
<body>
    <center>  
          <h3>عربتك التسوقسة</h3>
</center>
    <?php
    include('config.php');
    $result=mysqli_query($con,"SELECT * FROM addcard");
    while($row =mysqli_fetch_array($result)){
        echo "<center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Product name</th>
                        <th scope ='col'>Product price</th>
                        <th scope ='col'>delete product</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>ازالة</a></td>
                        
                    </tr>
                </tbody>
            </table>
        </main>
    </center>";
    }
    ?>
    <center><a href="shop.php">الرجوع لجميع المنتجات</a></center>
    
</body>
</html>