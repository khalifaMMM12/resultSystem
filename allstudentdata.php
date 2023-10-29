<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location:login.php');
				}
				
?>
<html>
<head>
    <title>All Student Detail</title>
<link rel="stylesheet" href="css/allstudentdata.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
  <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php"><b>HOME</b></a></li>
                <li class="logout"><a href="admindash.php"><b>DASHBOARD</b></a></li>
                <li><a href="aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="contactus.php"><b>CONTACT</b></a></li>
                
          </ul>
        </div>
      </nav>
    </header>
      <div class="main-content-header">
        <h2>Student Record</h2>
        <form>
         <table>
          <tr>
           <th class="id_h1">Id </th>
           <th class="name_h1">Name </th> 
           <th class="contact_h1">Level </th> 
           <th class="contact_h1">Reg No.</th>
           <th class="name_h1">Mobile No</th>
           <th class="name_h1">Image</th>
           
         </tr>
        
<?php
include('dbcon.php');
  $sql="SELECT * FROM `student_data`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
            <th class="name_h"> <?php  echo $row['u_name'].'<br>'; ?></th> 
            <th class="email_h"> <?php  echo $row['u_level'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_regno'].'<br>'; ?></th> 
            <th class="massage_h"><?php  echo $row['u_mobile'].'<br>'; ?></th> 
            <th class="image_h"> <img src="uploaded-img/<?php  echo $row['u_image']; ?>" class="image2" /></th>
        </tr>     
        <?php    
        }
   
}
else{
    echo "No Record Found";
}

?>
              </table>
        </form>
      </div>
</body>
</html>