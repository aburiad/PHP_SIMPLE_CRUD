<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

<style>

.login_area {
    max-width: 500px;
    background: #ddd;
    padding: 68px;
}
.login_box{
    position: absoulute;
    top: 50%;
    left: 0;
    transform: translateY(50%);
    display: flex;
    justify-content:center;
    align-items:center;
}

</style>

</head>

<body>

<div class="loading">
    <h2 class='text-white'>Loading............</h2>
</div>
<?php



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == 'ahsan' && $pass == 123){
        header("Location:admin.php");
        echo "login successfull";
    }else{
        echo "<h2>login fail......</h2>";
    }
}
?>

<div class="bg">
<div class="login_box">
<div class="login_area">
    <form action="#" method="post">
        <input name='user' type="text" class="form-control" placeholder="enter your username"><br>
        <input name='pass'  type="password" class="form-control" placeholder="enter your password"><br>
        <input type="submit" class="form-control btn-success" value="login">
    </form>
    </div>
</div>
</div>

<script src="js/main.js"></script>
</body>

</html>