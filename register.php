  <?php include "Header.php" ?>
  <?php include "DBConnect.php" ?>
  <section class="contact-form-wrap section">
    <div class="container">
      <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Sign Up Form</h2>
                    <div class="divider mx-auto my-4"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form class="contact__form " method="post">
                    <div class="row">
                        <div class="col-lg-3"></div>    
                        <div class="col-lg-6">
                            <div class="form-group">
                              <select name="userType" class="form-control" onchange="changeContent(this.value)">
                                <option value="">--- Select User ---</option>
                                <option value="Patient">Patient</option>
                                <option value="Doctor">Doctor</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                    <div class="row" id="registration">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include "Footer.php" ?>
<?php
//Insert Records
if(isset($_REQUEST["patient_registration"])){
  $sql = "INSERT INTO `patient`(`name`, `gender`, `age`, `weight`, `contact`, `email`, `address`, `username`, `password`) VALUES ('".$_REQUEST["patient_name"]."','".$_REQUEST["gender"]."','".$_REQUEST["age"]."','".$_REQUEST["weight"]."','".$_REQUEST["contact"]."','".$_REQUEST["email"]."','".$_REQUEST["address"]."','".$_REQUEST["username"]."','".$_REQUEST["password"]."')";

  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registration successfull');window.location='Login.php';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
} else if(isset($_REQUEST["doctor_registration"])){
  $sql = "INSERT INTO `doctor`(`name`, `gender`, `contact`, `email`, `address`, `degree`, `specialist`, `username`, `password`) VALUES ('".$_REQUEST["doctor_name"]."','".$_REQUEST["gender"]."','".$_REQUEST["contact"]."','".$_REQUEST["email"]."','".$_REQUEST["address"]."','".$_REQUEST["degree"]."','".$_REQUEST["specialist"]."','".$_REQUEST["username"]."','".$_REQUEST["password"]."')";
  echo $sql;
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registration successfull');window.location='Login.php';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
?>