<?php
   include_once'config.php';
?>

<?php
  $id      = $_POST["field1"];
  $name    = $_POST["field2"];
  $story    = $_POST["field3"];
  


  $sql = "insert into story(ID_no,Name,story)values('','$name','$story')";

  if(mysqli_query($conn,$sql))
 {
   echo "<script>alert ('Record Inserted Succesfully')</script>";
    header("Location:viewstory.php");
 }

  else {
   echo "<script>alert ('Error In Inserting Records') </script>";
  }


   mysqli_close($conn);

?>