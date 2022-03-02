<?php
   include_once'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title> Success Stories</title>
	
	<link rel="stylesheet" href="../styles/styles.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
</head>
<body>

<img src="../images/logo1.jpg" width="200" height="200" class="logo">

<li class="login1"><a href="#">Login</a></li>

<li class="signup1"><a href="#">Sign Up</a></li>

<center>
	<h1 id="fitness">ONLINE FITNESS TRAINER</h1>
</center>

<br/><br/><br/>

<hr class="new1">

<ul class="menu">
	<li class="menu"><a href="../html/Home_Page.html">Home</a></li>
	<li class="menu"><a href="../html/Planes Page.html">Workout Plans</a></li>
	<li class="menu"><a href="../html/Training_staff_members.html">Trainers</a></li>
        <li class="menu"><a href="../html/Training_staff_members.html">Staff</a></li>
        <li class="menu"><a href="../html/videos.html">Workouts</a></li>
	<li class="menu"><a href="../html/about Us.html">About Us</a></li>
	<li class="menu"><a href="../html/contact us.html">Contact Us</a></li>
	<li class="menu"><a href="../html/Feedback_Page.html">Feedback</a></li>
	<li class="menu"><a href="#">Success Stories</a></li>
	<li class="menu1"><a href="../html/User Page.html">My Account</a></li>
        <li class="menu1"><a href="customerDetails.php">Customer Details</a></li>
</ul>
<br/><br/>

       <div class="typ">
   
       <button class="button"> <a href="../html/addstory.html"> Add New Story </a> </button>
       <br> <br>

       


      <div class="productdata" id="tbl" style="border-style:groove; border-color:DarkBlue; background-color:#66ff99;">
      <table border="2" width="100%">
      <tr>
           <th> User ID </th> 
           <th> User Name </th>
           <th>  Story </th> 
           
           
       </tr>
      <?php
       $sql = "select * from story";
       $result = $conn->query($sql);

        if($result-> num_rows> 0) {
           
           while($row=$result->fetch_assoc()){
              echo "<tr><td>".$row["ID_no"]."</td><td>".$row["Name"]."</td><td>".$row["story"]."</td><tr>";
              }
          }

         else {
           echo "There is no result to display";
         }

        echo "</table>";
         
        $conn->close();

      ?> 

       </table>
       </div>
       <br>

      <br> <br>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Fitness<span>Guru</span></h3>

				<p class="footer-links">
					<a href="#" class="link-1">Home</a>
					
					<a href="#">Workout Plans</a>
				
					<a href="#">Trainers</a>
				
					<a href="#">About Us</a>
					
					<a href="#">Faq</a>
					
					<a href="#">Contact Us</a>
				</p>

				
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>324, George Street,</span> Colombo</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>011486781</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@fitnessguru.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About FitnessGuru</span>
					FitnessGuru is an online fitness platform that helps you to be healthy and strong.
				</p>

				<br/>
				
					<a href="https://www.facebook.com/"><i class="facebook">Facebook</i></a><br/>
					<a href="https://www.twitter.com/"><i class="twitter">Twitter</i></a><br/>
					<a href="https://www.linkedin.com/"><i class="linkedin">Linkedin</i></a><br/>
					<a href="https://www.github.com/"><i class="github">Github</i></a><br/>

			</div>

		</footer>

</body>
</html>
