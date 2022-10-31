<?php
require_once("connect.php");
?>
<!DOCTYPE html>

<head>
    
    <title >GEMSTONE CONSTRUCTION</title>
    <style>
         label.logo{
        color:chocolate;
        font-size:35px;
        margin-right:80px;
    }
    .submit{
        background-color: #62529c;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border: 4px solid #1c87c9;
        border-radius: 10px; 
      }
    



    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
</head>

<body>

    <div class="main">
        <nav>
            <!--<img src="vecteezy_creative-real-estate-logo-design-house-logo-design-real_6309685.jpg"  alt="">-->
            <label class="logo" >GEMSTONE CONSTRUCTION AND SERVICES</label>
        <ul>
                <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="about.php"><i class="fa fa-users"></i>About Us</a></li>
                <li><a href="services.php"><i class="fa fa-clone"></i>Services</a></li>
                <li><a href="contact.php"><i class="fa fa-clone"></i>Contact</a></li>
        </ul>
        </nav>
    </div>

    <img src="construction3.jpeg" alt="Cover page">
    <br>

<div class="container2">
  <form action=""  method="post" name="contact-form">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="mobile">Last Name</label>
    <input type="text" id="mobile" name="mobile" placeholder="Your mobile..">
    
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
<button type="button" class="submit">Submit</button>

  </form>
  <?php
        if (isset($_POST["submit"])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $message = $_POST['subject'];

            $qry = "INSERT INTO datainfo(fname, lname, email, mobile,message) 
            VALUES('$fname', '$lname','$email','$mobile','$message')";

            $insert = $conn->query($qry);
            if ($insert == TRUE) {
                echo "successfully submitted!";
            } else {
                echo "something wrong!";
            }
        }
        ?>

</div>



 
</body>
 <a class="gotopbtn" href="#"><i class="fas fa-arrow-up"></i>Scroll Top</a>
</html>