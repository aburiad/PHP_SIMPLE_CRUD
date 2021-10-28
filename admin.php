<?php
    include 'content/header.php';
    include 'config/config.php';
    include 'config/Database.php';

    $db = new Database();

    $query = "select * from student_data";
    $data = $db->selectdta($query)

?>
<div class="loading">
    <div class="spinner-border text-white" style="width: 3rem; height: 3rem;" role="status">
  <span class="sr-only"></span>
</div>
</div>

    <!-- table area  -->
    <div class="container">
        <div class="overflow">
            <table class="table table-striped">
                <tr>
                    <td>serial</td>
                    <td>namee</td>
                    <td>email</td>
                    <td>phone</td>
                    <td>semester</td>
                    <td>sessionn</td>
                    <td>Department</td>
                    <td>addresss</td>
                    <td>Data Options</td>
                </tr>
                <?php if($data){
                    while($showdata = $data->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $showdata['id'];?></td>
                    <td><?php echo $showdata['namee'];?></td>
                    <td><?php echo $showdata['email'];?></td>
                    <td><?php echo $showdata['phone'];?></td>
                    <td><?php echo $showdata['semester'];?></td>
                    <td><?php echo $showdata['sessionn'];?></td>
                    <td><?php echo $showdata['department'];?></td>
                    <td><?php echo $showdata['addresss'];?></td>
                    <td>
                        <a href="update.php?id=<?php echo urlencode($showdata['id']);?>" class="btn btn-warning">edit</a>
                        <a onclick="return confirm('are you sure want to delete ?')"; href="delete.php?delid=<?php echo $showdata['id'];?>" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                <?php }}else{echo "data not available";}?>
            </table>
        </div>
    </div>



<?php include 'content/footer.php';?>