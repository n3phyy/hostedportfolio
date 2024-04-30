<?php
include('../includes/bootstrp.php'); 
?>
<?php
include('../dbconn.php');
?>

<?php 

    if (isset($_GET['id'])){
        $id = $_GET['id'];
   
									
        $query = "SELECT * from main_ab where id = '$id'";

        $result = mysqli_query($connection, $query);


        if(!$result) {
            die ("query failed".mysqli_error($connection));
        }

        else {
            $row = mysqli_fetch_assoc($result);     
            

    }
}
?>


    <?php

        if (isset($_POST['update_ab']))
        {

            if(isset($_GET['id_new'])) {
                $idnew = $_GET['id_new'];
            }

            $abinter =$_POST['interests'];
            $abeduc =$_POST['education'];
            $abinfo =$_POST['information'];

            $query = "UPDATE `main_ab` SET `interests` = '$abinter', `education` = '$abeduc', `information` = '$abinfo' WHERE `id` = '$idnew'";


            
            $result = mysqli_query($connection, $query);


        if(!$result) {
            die ("query failed".mysqli_error($connection));
        }

        else {
            header('location:../index.php?updateab_msg= Note: About Section successfully updated!');

        }


        }
    ?>


<form style="margin: 15%" action="updatemainab.php?id_new=<?php echo $id; ?>" method="post">

  <div class="form-group" style="margin: 20px">

    <label for="formGroupExampleInput"><b>Interest Label</label>
    <input type="text" name="interests"class="form-control" value="<?php echo $row ['interests']?>">

  </div>


  <div class="form-group" style="margin: 20px">

    <label for="formGroupExampleInput"><b>Education Label</label>
    <input type="text" name="education" class="form-control" value="<?php echo $row ['education']?>">

  </div>

  
  <div class="form-group" style="margin: 20px">

    <label for="formGroupExampleInput"><b>Short Information</label>
    <input type="text" name="information" style="height: 90px" class="form-control" value="<?php echo $row ['information']?>">

  </div>

  <button type="submit" class="btn btn-success" name="update_ab" style="margin: 20px">Update</button>

</form>

