<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>student data Record</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- css stylesheet here  -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<?php 
    include 'config/config.php';
    include 'config/Database.php';

    $db = new Database();

    $id = $_GET['delid'];
    $query = "delete from student_data where id=$id";
    $deletedata = $db->delete($query);
?>
  <div class="admin_panel">
    <!-- start header section  -->
    <div class="header_area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <div class="title_box">
              <h2><?php     if($deletedata){
                    echo "<h2>successfully deleted</h2>";
                }else{
                    echo "<h2>data not delete</h2>";
                }?></h2>
            </div>
          </div>
          <div class="col-xl-12">
            <div class="back_btn">
              <a href="admin.php" class="btn btn-primary custom_theme_btn">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>