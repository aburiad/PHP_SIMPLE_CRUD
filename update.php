<?php
include 'config/config.php';
include 'config/Database.php';

$db = new Database();

?>


<?php 
 $id = $_GET['id'];
 $query = "select * from student_data WHERE id=$id";
 $data = $db->selectdta($query)->fetch_assoc();
 
 if(isset($_POST['submit'])){
  $name  = $_POST['namee'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $semester = $_POST['semester'];
  $sessionn = $_POST['sessionn'];
  $dept =  $_POST['department'];
  $addresss = $_POST['addresss'];

  $query = "
  UPDATE student_data
  SET 
  namee ='$name',
  email ='$email',
  phone ='$phone',
  semester ='$semester',
  sessionn ='$sessionn',
  department ='$dept',
  addresss ='$addresss'
  WHERE ID= '$id' ";
  $update = $db->update($query);

  header("Location:admin.php");

  if($update){
    echo "<script>
      window.alert('data updated successfully');
    </script>";
  }else{
    echo "nothing update here";
  }
 }


?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>student data Record</title>
  <meta namee="description" content="">
  <meta namee="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.ico in the root directory -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- css stylesheet here  -->
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
<div class="loading">
    <h2 class='text-white'>Loading............</h2>
</div>
  <div class="admin_panel">
    <!-- start header section  -->
    <div class="header_area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-12">
            <div class="title_box">
              <h2>Update Student Data </h2>
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
    <!-- end header section  -->

    <!-- get input area start  -->
    <div class="data_input_area">
      <div class="container-fluid">
        <form action="update.php?id=<?php echo $id?>" method="post">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">First Name</label>
                <input name="namee" type="text" class="form-control" value="<?php echo $data['namee'];?>">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Semester</label>
                <select name="semester">
                  <option class="form-control" value="<?php echo $data['semester'];?>"><?php echo $data['semester'];?></option>
                  <option class="form-control" value="2nd">2nd Semester</option>
                  <option class="form-control" value="3rd">3rd Semester</option>
                  <option class="form-control" value="4th">4th Semester</option>
                  <option class="form-control" value="5th">5th Semester</option>
                  <option class="form-control" value="6th">6th Semester</option>
                  <option class="form-control" value="7th">7th Semester</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Department</label>
                <select name="department" id="">
                  <option class="form-control" value="<?php echo $data['department'];?>"><?php echo $data['department'];?></option>
                  <option class="form-control" value="Electrical">Electrical</option>
                  <option class="form-control" value="Mechanical">Mechanical</option>
                  <option class="form-control" value="Civil">Civil</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Session</label>
                <select name="sessionn" id="">
                  <option class="form-control" value="<?php echo $data['sessionn'];?>"><?php echo $data['sessionn'];?></option>
                  <option class="form-control" value="2018 2019">2018-2019</option>
                  <option class="form-control" value="2019 2020">2019-2020</option>
                  <option class="form-control" value="2020 2021">2020-2021</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">email</label>
                <input name="email" type="email" value="<?php echo $data['email'];?>" class="form-control" placeholder="email here">
              </div>
            </div>
            <div class="col-lg-6">
              <div>
                <label class="form-label">Mobile Number</label>
                <input type="phone" value="<?php echo $data['phone'];?>" name="phone" type="number" class="form-control" placeholder="Mobile Number">
              </div>
            </div>
            <div class="col-lg-6">
              <div>
                <label class="form-label">Present Address / Permanent Address</label>
                <textarea type="email"  name="addresss" class="form-control" placeholder="Address"><?php echo $data['addresss'];?></textarea>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="submit_btn">
                <input type="submit" name="submit" class="form-control btn btn-success" value="submit" />
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- get input area end  -->
  </div>


  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>