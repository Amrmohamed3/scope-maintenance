

<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "login";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$country = $_POST['country'];
	$subjectone = $_POST['subjectone'];
	
			$sql = "INSERT INTO users (firstname, lastname, country, subjectone )
					VALUES ('$firstname', '$lastname', '$country', '$subjectone' )";
			$result = mysqli_query($conn, $sql);


			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$firstname = "";
				$lastname = "";
				$country = "";
				$subjectone = "";
			
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>scopy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 
      <style>
        .subscribe .sub{
              text-align: center;
              display: flex;
              flex-direction: column;
              align-items: center;
            }
            .subscribe .inp{
              width:100%;
              margin-left:0 !important;
            }

            /* Full-width input fields */
                input[type=text], input[type=password] {
                  width: 100%;
                  padding: 12px 20px;
                  margin: 8px 0;
                  display: inline-block;
                  border: 1px solid #ccc;
                  box-sizing: border-box;
                }

                /* Set a style for all buttons */
                button {
                  background-color: rgb(0,0,100);
                  color: white;
                  padding: 15px 30px;
                  margin: 0px 0;
                  border: none;
                  cursor: pointer;
                  width: 100%;
                  border-radius: 10px;
                }
                label {
                    color: white;}

                button:hover {
                  opacity: 0.8;
                }

                /* Extra styles for the cancel button */
                .cancelbtn {
                  width: auto;
                  padding: 10px 18px;
                  background-color: rgb(30,30,100);
                }

                /* Center the image and position the close button */
                .imgcontainer {
                  text-align: center;
                  margin: 24px 0 12px 0;
                  position: relative;
                }

                img.avatar {
                  width: 10%;
                  border-radius: 50%;
                }

                .container {
                  padding: 16px;
                  background-color: t;
                }

                span.psw {
                  float: right;
                  padding-top: 16px;
                }

                /* The Modal (background) */
                .modal {
                  display: none; /* Hidden by default */
                  position: fixed; /* Stay in place */
                  z-index: 1; /* Sit on top */
                  left: 0;
                  top: 0;
                  width: 100%; /* Full width */
                  height: 100%; /* Full height */
                  overflow: auto; /* Enable scroll if needed */
                  background-color: rgb(0,0,0); /* Fallback color */
                  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                  padding-top: 60px;
                }

                /* Modal Content/Box */
                .modal-content {
                  background-color: #0000aab0;
                  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                  border: 1px solid #888;
                  width: 80%; /* Could be more or less, depending on screen size */
                }

                /* The Close Button (x) */
                .close {
                  position: absolute;
                  right: 25px;
                  top: 0;
                  color: #000;
                  font-size: 35px;
                  font-weight: bold;
                }

                .close:hover,
                .close:focus {
                  color: red;
                  cursor: pointer;
                }

                /* Add Zoom Animation */
                .animate {
                  -webkit-animation: animatezoom 0.6s;
                  animation: animatezoom 0.6s
                }

                @-webkit-keyframes animatezoom {
                  from {-webkit-transform: scale(0)} 
                  to {-webkit-transform: scale(1)}
                }
                  
                @keyframes animatezoom {
                  from {transform: scale(0)} 
                  to {transform: scale(1)}
                }

                /* Change styles for span and cancel button on extra small screens */
                @media screen and (max-width: 300px) {
                  span.psw {
                    display: block;
                    float: none;
                  }
                  .cancelbtn {
                    width: 100%;
                  }
                }
      </style>
 

</head>
<body>
    <!-- navbar -->
    <div class="navss" >
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Scopy maintenance company</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#hm">Home</a></li>
            <li class="active"><a href="services.php">services</a></li>

            <li class="active"><a href="form/index.php">form</a></li>
            <li class="active"><a href="#con">contact</a></li>
            <button class="seen" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

          </ul>
        </div>
      </nav>
    </div>
     <!-- end navbar-->
 
    <div class="klam">
      <h1>Scope maintenance <br>company</h1>
    </div>  
<!-- -----------------login-------------------------- -->
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!-- <img src="image/User-avatar.svg.png" alt="Avatar" class="avatar" width="10%" height="100"> -->
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="  background-color: transparent; color: wheat;    ">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#" style="color: wheat;">password?</a></span>
    </div>
  </form>
</div>
<!--------------------end login------------------  -->
   
    <section class="main " id="hm">
        <div class="min">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="im">
                            <img src="image/x1.jpg.pagespeed.ic.B6b9CCuLbz.jpg" alt="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="abt">
                            <h1>welcome to our company</h1>
                            <h4>I am the manager of scopy maintenance company</h4>
                            <mark style="background-color:rgba(6, 118, 246, 0.707) ; padding:10px; color:white;
                            border-radius: 5px;">Our Scope is:</mark>
                            <p>we are responsible for maintenance rigid and flexiable scope & we have a professional engineers in this company who are recognised anywhere through our reputation and our work</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
      </section>
 
    <section class="mind">
          <div class="min" data-aos="fade-right" data-aos-duration="1000">
              <div class="container">
                  <div class="row">
                      <div class="col">
                          <div class="abt">
                              <h1>How to use it</h1>
                              <p>we will learn you how to use the scope protect it from broken &etc and to reduce maintaining scope  </p>
                          </div>
                      </div>
                      <div class="col">
                          <div class="im">
                              <img src="image/images.jpg" alt="">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        <div class="min med"  data-aos="fade-right" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="im">
                            <img src="image/images (1).jpg" alt="">
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="abt">
                            <h1>How to sterilization</h1>
                            <p>we will learn you how to sterilize the scope from any issues like by using Endozyme & then after it we use sidex and etc </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section class="employees">
        <div class="employe">
            <div class="head">
                <h1>Our Engineers</h1>
                <p>Best Engineers in This field with a very good experince</p>
            </div>
                <div class="row" >
                    <div class="col colcard" data-aos="flip-up" data-aos-duration="1000">
                        <div class="card" >
                            <div class="forimg">
                                <img src="image/x1.png.pagespeed.ic.8A9ZGghBRB.webp"   class="card-img-top" alt="..."  style="object-fit:cover; width:100%; height:400px;">
                                <div class="over">

                                </div>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">ENG/sadek hussin</h5>
                              <p class="card-text">who is responsible for maintenance pentex<br> scope </p>
                              <div class="buttony">
                                <a href="portfolio/senioo.php" class="btn">Portflio</a>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col colcard" data-aos="flip-up" data-aos-duration="2000">
                        <div class="card" >
                            <div class="forimg">
                                <img src="image/x2.png.pagespeed.ic.b9HMsw9NcQ.webp"   class="card-img-top" alt="..." style="object-fit:cover; width:100%; height:400px;">
                                <div class="over">
                                </div>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">ENG/Ayman Mohamed</h5>
                              <p class="card-text">Who is responsible for maintenance olympus scope</p>
                              <div class="buttony">
                                <a href="portfolio/sen.php" class="btn">Portflio</a>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col colcard" data-aos="flip-up" data-aos-duration="3000">
                        <div class="card" >
                            <div class="forimg">
                                <img src="image/x3.png.pagespeed.ic.bvpUUE6n6E.webp"   class="card-img-top" alt="..." style="object-fit:cover; width:100%; height:400px;">
                                <div class="over"></div>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">ENG/mahmoud Mohamed</h5>
                              <p class="card-text">Who is responsible for maintenance olympus scope</p>
                              <div class="buttony">
                                <a href="portfolio/portfoliotwo.php" class="btn">portfolio</a>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col colcard">
                        <div class="card"  data-aos="flip-up" data-aos-duration="3000">
                            <div class="forimg">
                                <img src="image/d4.jpg.webp"   class="card-img-top" alt="..." style="object-fit:cover; width:100%; height:400px;">
                                <div class="over"></div>
                            </div>
                            <div class="card-body">
                              <h5 class="card-title">ENG/mahmoud Mohamed</h5>
                              <p class="card-text">who is responsible for maintenance pentex<br> scope </p>
                              <div class="buttony">
                                <a href="portfolio/portfoliothree.php" class="btn">portfolio</a>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
        </div>
    </section>  
 
    <section class="subscribe" >
      <div class="sub" data-aos="fade-up" data-aos-duration="1000">
        <h1>subscribe to pur newsletter</h1>
        <p>far far away behind the word mountains far from the countries vokalia and consontnia there<br> live the blind texts separated they live in</p>
        <div class="inp">
          <input type="text" value="enter your email">
          <button class="bin">subscribe</button>
        </div>
      </div>
    </section>

    <section class="contact" id="con">
            <div class="cool">
              <h1>Contact </h1>
            </div>
            <div class="container" data-aos="fade-down" data-aos-duration="1000">
              <form action="" method="POST">
                    <label for="fname">First Name</label>
                    <textarea  id="fname" name="firstname" placeholder="Your name.."  value="<?php echo $firstname; ?>" required></textarea>

                    <label for="lname">Last Name</label>
                    <textarea  id="lname" name="lastname" placeholder="Your last name.."  value="<?php echo $lastname; ?>"></textarea>

                    <label for="country">Country</label>
                    <textarea  id="country" name="country" placeholder="country.."  value="<?php echo $country; ?>"> </textarea>


                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subjectone" placeholder="Write something.." style="height:200px"  value="<?php echo $subjectone; ?>" required></textarea>

                    <div class="input-group">
			            	<button name="submit" class="btn">submit</button>
			            </div>
              </form>
            </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
  
</body>
</html>