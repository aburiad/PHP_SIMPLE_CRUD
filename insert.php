<?php 
    include 'config/config.php';
    include 'config/Database.php';

?>


<?php 
  $db = new Database();
  if(isset($_POST['submit'])){
  $name  = $_POST['namee'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $semester = $_POST['semester'];
  $sessionn = $_POST['sessionn'];
  $dept =  $_POST['department'];
  $addresss = $_POST['addresss'];

  if($name == "" || $email == "" || $phone == "" || $semester== "" || $sessionn=="" || $dept=="" || $addresss==""){
    echo "field must be selected";
  }else{
    $query = "INSERT INTO student_data(namee,email,phone, semester,sessionn,department,addresss) 
    Values('$name','$email','$phone','$semester','$sessionn', '$dept','$addresss')";
  $create = $db->insert($query);
  }


}
?>

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
              <h2>Add Student Data</h2>
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
        <form action="insert.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">First Name</label>
                <input id="name" name="namee" type="text" class="form-control" placeholder="Enter your first name">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Semester</label>
                <select name="semester" id="semester">
                  <option class="form-control" value="1st">1st Semester</option>
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
                <select name="department" id="department">
                  <option class="form-control" value="Computer">Computer</option>
                  <option class="form-control" value="Electrical">Electrical</option>
                  <option class="form-control" value="Mechanical">Mechanical</option>
                  <option class="form-control" value="Civil">Civil</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">Session</label>
                <select name="sessionn" id="sesson">
                  <option class="form-control" value="2016 2017">2016-2017</option>
                  <option class="form-control" value="2018 2019">2018-2019</option>
                  <option class="form-control" value="2019 2020">2019-2020</option>
                  <option class="form-control" value="2020 2021">2020-2021</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label class="form-label">email</label>
                <input id="email" name="email" type="email" class="form-control" placeholder="email here">
              </div>
            </div>
            <div class="col-lg-6">
              <div>
                <label class="form-label">Mobile Number</label>
                <input id="phone" name="phone" type="number" class="form-control" placeholder="Mobile Number">
              </div>
            </div>
            <div class="col-lg-6">
              <div>
                <label class="form-label">Present Address / Permanent Address</label>
                <textarea id="address" name="addresss" class="form-control" placeholder="Address"></textarea>
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