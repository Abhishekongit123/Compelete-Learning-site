<?php include "All links.php"; ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Website using Bootstrap4 </title>
      
      <link href="https://fonts.googleapis.com/css2?family=Piedra|Courgette&display=swap">
      <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono:ital@1&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="CSS3 Style Code(CssSC)/homepagecss.css">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <script>
      $(document).ready(function() {
      $('#hmlbtn').click(function() {
      $('#informationstatus').load("html-info.html");
      });
      $('#cssbtn').click(function() {
      $('#informationstatus').load("css3-info.html");
      });
      $('#phpbtn').click(function() {
      $('#informationstatus').load("php-info.html");
      });
      $('#msqlbtn').click(function() {
      $('#informationstatus').load("sql-info.html");
      });
      $('.hoverbox').click(function() {
      $('.go').slideDown('fast');
      });
      $('.hoverbox').dblclick(function() {
      $('.go').slideUp('fast');
      });
      $('#btna').click(function() {
      location.replace("http://localhost/CRUD/About.html");
      });
      });
      </script>
   </head>
   <body>
      <!-- website navbar -->
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top">
         <div class="container-fluid">
            <a class="navbar-brand mb-0 h1">Built concepts</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ml-auto mb-2 mb-lg-0 mr-0 mt-2">
                  <li class="nav-item mr-2">
                     <a href="Bloggingpage.php" class="nav-link btn btn-outline-secondary btn-sm font-weight-bold font-italic my-sm-1"style="color: white;">More<i class="fas fa-link ml-2"></i></a>
                  </li>
                  <li class="nav-item mr-2">
                     <a href="logout.php" class="nav-link btn btn-outline-secondary btn-sm font-weight-bold font-italic my-sm-1"style="color: white;">Logout<i class="fas fa-sign-out-alt ml-2 "></i></a>
                  </li>
                  <li class="nav-item ml-2">
                     <a class="nav-link btn btn-outline-secondary btn-sm font-weight-bold font-italic my-sm-1 mr-lg-3"style="color: white;" id="btna">About<img src="images/info.svg" class="img-fluid ml-2" style="width: 20px;height: auto;"></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link btn btn-outline-secondary btn-sm font-weight-bold font-italic my-sm-1 mr-lg-3"style="color: white;" type="button" data-toggle="modal" data-target="#feedback">Feedback<img src="images/pen.svg" class="img-fluid ml-2" style="width: 20px;height: auto;"></a>
                  </li>
                  <li class="nav-item dropdown">
                     <a href="userpage.php" class="nav-link btn btn-sm font-italic mx-lg-1 my-sm-1" id="imgiddd"><?php echo $_SESSION['name'];?>
                        <img src="<?php echo $_SESSION['img'];?>" style="width: 23px; height: 23px;clip-path: circle(50%); margin-left: 1px;">
                     </a>
                  </li>
                  <li class="nav-item ml-2">
                     <a href="" class="nav-link btn btn-outline-secondary btn-sm font-weight-bold font-italic my-sm-1 mr-lg-3" style="color: white;" id="btna">Menu<img src="images/menu.svg" class="img-fluid ml-2" style="width: 20px;height: auto; margin-bottom: 1px;"></a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="modal fade" id="feedback">
         <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md rounded">
            <div class="modal-content bg-light">
               <div class="modal-body">
                  <div class="modal-header" style="background:#40739e;">
                     <h6 class="mt-0 rounded text-white" >Send feedback</h6>
                  </div>
                  <?php
                  if (isset($_POST['go'])) {
                  $person = $_SESSION['name'];
                  $content = $_POST['fb'];
                  $improve = $_POST['improve'];
                  $emojicon = $_POST['emoji'];
                  $post_d = date("d F,Y");
                  $fbconn = mysqli_connect("localhost","root","","my_collage_project") or die("connection failed");
                  $fbquery = "INSERT INTO feedback_record (Name,Heading,MainFB,PD) VALUES ('{$person}','{$improve}','{$content}','{$post_d}')";
                  $fbqu = "UPDATE feedback_record SET Overall = '$overall', Emoji = '$emojicon' WHERE Name = '$person' ";
                  $fbresult = mysqli_query($fbconn , $fbquery);
                  $fbupdate = mysqli_query($fbconn , $fbqu);
                  }
                  ?>
                  <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                     <textarea type="text" name="fb" style="width: 100%;min-height: 110px; max-height:all;background:#f7f1e3;" class="form-control my-2 p-2 font-weight-bold font-italic" placeholder="Have feedback? We'd love to hare it,but please don't share sensitive information.Have question?Try help to support."></textarea>
                     <div class="border-top border-bottom" style="min-height: 110px; max-height: all;">
                        <h6 class="font-weight-bold">Overall,how did you feel about this website or our services?</h6>
                        <div class="mb-3 p-2">
                           <p><input type="checkbox" name="s" value="Very Satisfied" class="mr-2">Very Satisfied</p>
                           <p><input type="checkbox" name="s" value="Satisfied" class="mr-2">Satisfied</p>
                           <p><input type="checkbox" name="s" value="Nither Satisfied or dissatisfied" class="mr-2">Nither Satisfied or dissatisfied</p>
                           <p><input type="checkbox" name="s" value="Dissatisfied" class="mr-2">Dissatisfied</p>
                           <p><input type="checkbox" name="s" value="Very Dissatisfied" class="mr-2">Very Dissatisfied</p>
                        </div>
                        <p class="text-center font-weight-bold">We would like your feedback to improve our website</p>
                        <p class="text-center font-weight-bold font-italic">What is your opinion for this website</p>
                        <p class="d-flex justify-content-center">
                           <select class="form-control" name="emoji" style="background:#f7f1e3;">
                              <option class="font-italic text-center d-flex justify-content-center">...select emoji...</option>
                              <option class="font-weight-bold">☹ Poor</option>
                              <option class="font-weight-bold">😕 Not Bad</option>
                              <option class="font-weight-bold">🤩 Amazing</option>
                              <option class="font-weight-bold">😍 Excellent</option>
                           </select>
                           
                        </p>
                        <div class="mb-3 mt-2 p-2 border-top border-bottom">
                           <label class="font-weight-bold font-italic">Give heading to your feedback</label>
                           <textarea class="form-control font-weight-bold font-italic" style="background: #f7f1e3;" name="improve">You may use emoji icon and word limit is 20 words.</textarea>
                        </div>
                        <input type="submit" name="go" class="btn btn-sm btn-block btn-primary text-white font-weight-bold mb-3" value="Send" id="feedbackbtn">
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container mt-3 mb-3 p-2 justify-content-center" style="background-color: black;">
         <div class="row justify-content-center">
            <div class="col-sm-5 text-center">
               <h2 class="text-white font-weight-bold">We Stand Against Racism</h2>
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-sm-6 text-center">
               <small class="text-white font-italic">Let education unite us against inequality.Listen.learn and explore courses on ungerstanding racism,inequality and social justice.</small><br>
               <a href="#!" class="btn btn-sm rounded-pill text-dark font-weight-bold mx-auto my-2" style="background-color: yellow;">Learn More</a>
            </div>
         </div>
      </div>
      <div class="container-sm my-5 p-2 justify-content-center">
         <div class="row justify-content-center mx-auto">
            <div class="col-sm-6 text-center">
               <h3 class="font-weight-bold ">Achieve your goals with us</h3>
            </div>
         </div>
         <div class="row justify-content-center mx-auto">
            <div class="col-sm-3 my-sm-2">
               <img src="images/brain.svg" class="img-fluid mx-auto d-block my-2" style="width: 70px;height: 70px;">
               <h6 class="text-center text-muted">Learn the latest skills<br>
               <small class="text-center text-muted font-italic">like graphic design,php and many more</small>
               </h6>
               
            </div>
            <div class="col-sm-3 my-sm-2">
               <img src="images/career.svg" class="img-fluid mx-auto d-block my-2" style="width: 70px;height: 70px;">
               <h6 class="text-center text-muted">Get ready for career<br>
               <small class="text-center text-muted font-italic">In high demand-feilds like IT,AI and cloud engineering</small>
               </h6>
            </div>
            <div class="col-sm-3 my-sm-2">
               <img src="images/certificate.svg" class="img-fluid mx-auto d-block my-2" style="width: 70px;height: 70px;">
               <h6 class="text-center text-muted">Get free study material<br>
               <small class="text-center text-muted font-italic">Download free study material to learn</small>
               </h6>
            </div>
            <div class="col-sm-3 my-sm-2">
               <img src="images/note.svg" class="img-fluid mx-auto d-block my-2" style="width: 70px;height: 70px;">
               <h6 class="text-center text-muted">Earn a certificate or degree<br>
               <small class="text-center text-muted font-italic">From leading university of CS in india</small>
               </h6>
            </div>
         </div>
      </div>
      <!-- card items-->
      <div class="container-fluid bg-light mt-1">
         <div class="row">
            <div class="col-sm-4 mt-3 mb-3">
               <div class="card w-60 p-4 text-center shadow-none  rounded border-0">
                  <img src="images/computer1.png" class="card-img m-auto" style="width: 100px; height: 100px;">
                  <div class="card-body mt-3 rounded bg-dark text-white">
                     <h4 class="card-title">LANGUAGES</h4>
                     <i class="fas fa-laptop w-25 h-25 text-info"></i><h6 class="card-subtitle sm-2 text-muted ml-0">Workframe and Scripting</h6>
                     <p class="card-text font-weight-bold">HTML,CSS3,BOOTSTRAP,MATRALIZED-CSS,JQUERY,JAVA SCRIPT and PHP(core part only and not OOP)</p>
                     <a href="CRUD-doc/COMPUTERdoc.php" class="btn btn-primary" ><i class="fas fa-hand-point-up mr-2 text-danger"></i>Click Me</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4 mt-3 mb-3">
               <div class="card w-60 p-4 text-center shadow-none rounded border-0">
                  <img src="images/Student1.png" class="card-img m-auto" style="width: 100px; height: 100px;">
                  <div class="card-body mt-3 rounded bg-dark text-white">
                     <h4 class="card-title">VIDEODS TOPIC-WISE </h4>
                     <i class="fas fa-user-graduate w-25 h-25 text-danger"></i><h6 class="card-subtitle sm-2 text-muted">Videos of each topic </h6>
                     <p class="card-text font-weight-bold">We provide all basic and advance knowledge including notes.And get video on each perticular topic</p>
                     <a href="CRUD-doc/VIDEOTOPICdoc.php" class="btn btn-primary"><i class="fas fa-hand-point-up mr-2 text-danger"></i>Click Me</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4 mt-3 mb-3">
               <div class="card w-60 p-4 text-center shadow-none rounded border-0">
                  <img src="images/list.png" class="card-img m-auto" style="width: 100px; height: 100px;">
                  <div class="card-body mt-3 rounded bg-dark text-white">
                     <h4 class="card-title">PDF FILES</h4>
                     <i class="fas fa-file-pdf w-25 h-25" style="color:#e1b12c;"></i><h6 class="card-subtitle sm-2 text-muted">Get contant to download</h6>
                     <p class="card-text font-weight-bold">Here,we going to provide all courses PDF for download,free of cost no need to make any type of registration.</p>
                     <a href="PDF-download.php" class="btn btn-primary"><i class="fas fa-hand-point-up mr-2 text-danger"></i>Click Me</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <h4 class="text-center font-weight-bold mt-3 mb-2">Our Internship Courses (free/premimum) </h4>
            <div class="row justify-content-center py-2">
               <div class="col-sm-2 p-2 mx-2 hoverbox">
                  <img src="images/svgHtml.svg" class="img-fluid mx-auto d-block my-2" style="width: 130px; height: 130px;">
                  <center><span class="font-weight-bold text-dark my-2">HTML5(Basic/Adv.)<br><strong>(Code:HTML09AE)</strong></span></center>
               </div>
               <div class="col-sm-2 mx-2 p-2 hoverbox">
                  <img src="images/svgcss.svg" class="img-fluid mx-auto d-block my-2" style="width: 130px; height: 130px;">
                  <center><label class="font-weight-bold text-dark my-2">CSS3 Basic/Adv.<br><strong>(Code:CSSS04CC)</strong></label></center>
               </div>
               <div class="col-sm-2 mx-2 p-2 hoverbox">
                  <img src="images/BOOTSTRAP.png" class="img-fluid mx-auto d-block my-2" style="width: 128px; height: 128px;">
                  <center><label class="font-weight-bold text-dark text-center my-2">BOOTSTRAP latest<br><strong>(Code:BOST00AA)</strong></label></center>
               </div>
               <div class="col-sm-2 mx-2 p-2 hoverbox">
                  <img src="images/JS.png" class="img-fluid mx-auto d-block my-2" style="width: 130px; height: 130px;">
                  <center><label class="font-weight-bold text-dark my-2">J-Script Basic/Adv.<br><strong>(Code:JSSS06JE)</strong></label></center>
               </div>
               <div class="col-sm-2 mx-2 p-2 hoverbox">
                  <img src="images/svgphp.svg" class="img-fluid mx-auto d-block my-2" style="width: 130px; height: 130px;">
                  <center><label class="font-weight-bold text-dark my-2">PHP Advance<br><strong>(Code:PHPA08PH)<strong class="font-italic d-block" style="color: #e84118;">(permimum)</strong></strong></label></center>
               </div>
            </div>
            <div class="row justify-content-center py-2 my-3">
               <div class="col-sm-2 mx-2 p-2 hoverbox">
                  <img src="images/svgpython.svg" class="img-fluid mx-auto d-block my-2" style="width: 130px; height: 130px;">
                  <center><label class="font-weight-bold text-dark my-2">Python Advance<br><strong>(Code:PYTN01PY)<strong class="font-italic d-block" style="color: #e84118;">(permimum)</strong></strong></label></center>
               </div>
               <div class="col-sm-2 mx-2 p-2 hoverbox">
                  <img src="images/svgelectronic.svg" class="img-fluid mx-auto d-block my-2" style="width: 130px; height: 130px;">
                  <center><label class="font-weight-bold text-dark my-2">Electronics<br><strong>(Code:ELEC77TR)<strong class="font-italic d-block" style="color: #e84118;">(permimum)</strong></strong></label></center>
               </div>
               <div class="col-sm-2 mx-2 p-2 hoverbox">
                  <img src="images/svgrobot.svg" class="img-fluid mx-auto d-block my-2" style="width: 130px; height: 130px;">
                  <center><label class="font-weight-bold text-dark my-2">Robotics<br><strong>(Code:ROBT11LL)<strong class="font-italic d-block" style="color: #e84118;">(permimum)</strong></strong></label></center>
               </div>
            </div>
         </div>
         <div class="container-sm go">
            <h5 class="text-left p-2 font-italic"><i class="fab fa-leanpub d-inline mr-2" style="color:#2c3e50;"></i>Get Start Learning .........................<button type="button" class="btn btn-primary border-0 float-right" data-toggle="modal" data-target="#staticdrop" style="background-color: transparent;"><i class="fas fa-download"></i></button></h5>
            <!--Modal-->
            <div class="modal fade" id="staticdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm">
                  <div class="modal-content">
                     <div class="modal-header" style="background: linear-gradient(#f3a683,#f7d794);">
                        <h5 class="modal-title mx-auto font-weight-bold font-italic">Enter Type of Course</h5>
                     </div>
                     <?php
                     if (isset($_POST['ctype'])) {
                     $_SESSION['selectedct'] = $_POST['value'];
                     $_SESSION['father'] = $_POST['fn'];
                     if ($_SESSION['selectedct'] = "permimum") {
                     $_SESSION['permimum_select'] = "(PER)";
                     ?>
                     <script>
                     location.replace("http://localhost/CRUD/payment-gateway.php");
                     </script>
                     <?php
                     }
                     }
                     ?>
                     <div class="modal-body">
                        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                           <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" style="color:#34495e;"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="text" class="form-control" name="value" placeholder="enter permimum/free">
                           </div>
                           <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" style="color:#34495e;"><i class="fas fa-tasks"></i></span>
                              </div>
                              <input type="text" name="fn" class="form-control" placeholder="enter father's full name">
                           </div>
                           <button type="submit" name="ctype" class="btn text-light font-weight-bold btn-sm d-block mx-auto my-2" style="background-color:green;">Process</button>
                        </form>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn text-dark font-weight-bold mx-auto" style="background-color: #fab1a0;" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
            <?php
            if (isset($_POST['go'])) {
            $course_codef = $_SESSION['select'] = $_POST['promocode'];
            $str =$_SESSION['select'];
            $strsplit = explode(" ", $str);
            $_SESSION['coursename'] = $strsplit[0];
            if ($course_codef == "HTML09AE" || $course_codef =="HTML5(Basic/Adv.) Code:HTML09AE") {
            ?>
            <script>
            location.replace("http://localhost/CRUD/Internships/html-internship.php");
            </script>
            <?php
            }else{
            echo "Either coursename or code are wrong.try again";
            }
            if ($course_codef == "CSSS04CC") {
            ?>
            <script>
            location.replace("http://localhost/CRUD/Internships/css-internship.php");
            </script>
            <?php
            }
            if ($course_codef == "BOST00AA") {
            ?>
            <script>
            location.replace("http://localhost/CRUD/Internships/boot-internship.php");
            </script>
            <?php
            }
            if ($course_codef == "JSSS06JE") {
            ?>
            <script>
            location.replace("http://localhost/CRUD/Internships/js-internship.php");
            </script>
            <?php
            }
            }
            ?>
            <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
               <label class="font-weight-bold font-italic">Write Selected Course Code:</label>
               <div class="input-group pb-2">
                  <div class="input-group-prepend">
                     <span class="input-group-text font-weight-bold text-dark" style="color: #f0932b;">Course</span>
                  </div>
                  <input type="text" name="promocode" class="form-control font-weight-bold" placeholder="Enter Course Code & Coursename (Make gap b/w them)">
                  <div class="input-group-append">
                     <button type="submit" name="go" class="input-group-btn btn btn-info font-weight-bold text-dark">Go</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <br>
      <div class="container-fluid pt-1 pl-1 pr-1 pb-1 mt-0 bg-light shadow-none">
         <h4 class="text-center font-weight-bold" style="color: #e84118;">Learn More About Web-Designing/Development<br><small class="text-uppercase font-weight-bold text-dark" style="font-size: 12px; letter-spacing: 12px;">make learning easy</small></h4>
         <div class="row mt-5">
            <div class="col-sm-4">
               <div class="card text-center bg-light shadow-none rounded border-0">
                  <img src="images/web.png" class="card-img m-auto" style="width: 100px; height: 100px;">
                  <div class="card-body">
                     <h4 class="card-title" style="text-shadow: 0px -3px 3px black;color:#FFC312;">DESIGNING & DEVELOPMENT</h4>
                     <h6 class="card-subtitle text-muted font-weight-bolder">What is web-deg/development?</h6>
                     <a href="CRUD-doc/Design-development.php" class="btn btn-info text-dark font-weight-bold mt-3"><i class="fas fa-hand-point-up mr-2 text-danger"></i>Let's start..</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card text-center bg-light shadow-none rounded border-0" style="cursor: not-allowed;">
                  <img src="images/design code.png" class="card-img m-auto" style="width: 100px; height: 100px;">
                  <div class="card-body">
                     <h4 class="card-title" style="text-shadow: 0px -3px 3px black;color:#FFC312;">CODING & SYNTEX</h4>
                     <h6 class="card-subtitle text-muted font-weight-bolder">Learn how to start web-coding?</h6>
                     <a href="CRUD-doc/Howtostartcoding.php" class="btn btn-info text-dark font-weight-bold mt-3"><i class="fas fa-hand-point-up mr-2 text-danger"></i>Let's start..</a>
                  </div>
               </div>
            </div>
            <div class="col-sm-4">
               <div class="card text-center bg-light shadow-none rounded border-0">
                  <img src="images/framework icon.png" class="card-img m-auto" style="width: 110px; height: 110px;">
                  <div class="card-body">
                     <h4 class="card-title" style="text-shadow: 0px -3px 3px black;color:#FFC312;">FRAMEWORK</h4>
                     <h6 class="card-subtitle text-muted font-weight-bolder">Get FE & BE Framework</h6>
                     <a href="CRUD-doc/framework.php" class="btn btn-info text-dark font-weight-bold mt-3"><i class="fas fa-hand-point-up mr-2 text-danger"></i>Let's start..</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid mt-2 p-3 bg-light">
      <h3 class="text-center font-weight-bold" style="color: #e84118">Develop Coding Skills<br><small class="text-uppercase font-weight-bold text-dark" style="font-size: 12px; letter-spacing: 12px;">Make your Skill public</small></h3>
      <div class="row d-flex justify-content-center">
         <div class="col-sm-3 bg-transparent">
            <div class="card bg-white border-0 my-2" id="hoverdive">
               <div class="card-body text-center">
                  <img src="images/document.svg" class="img-fluid d-block mx-auto mb-2" style="width: 65px;height: 65px;">
                  <small style="color: #fab1a0; font-weight: bold;"><strong class="mr-1 text-dark">Category:</strong>Official Circular/Notice</small>
                  <p>All latest Latters,Notice and circulars are uploaded here regarding with official alerts and warning.</p>
                  <!-- <a href="CRUD-doc/COMPUTERdoc.php" class="btn btn-success m-auto text-dark font-weight-bolder">Go</a> -->
                  <!-- <a href="CRUD-doc/HTMLmore.php" class="btn btn-danger m-auto text-dark font-weight-bolder">learn More</a> -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid mt-2 p-3 bg-light">
      <h3 class="text-center font-weight-bold" style="color: #e84118">Website Updates<br><small class="text-uppercase font-weight-bold text-dark" style="font-size: 12px; letter-spacing: 12px;">Website Notice</small></h3>
      <div class="row d-flex justify-content-center">
         <div class="col-sm-3 bg-transparent">
            <div class="card bg-white border-0 my-2" id="hoverdive">
               <div class="card-body text-center">
                  <img src="images/document.svg" class="img-fluid d-block mx-auto mb-2" style="width: 65px;height: 65px;">
                  <small style="color: #fab1a0; font-weight: bold;"><strong class="mr-1 text-dark">Category:</strong>Official Circular/Notice</small>
                  <p>All latest Latters,Notice and circulars are uploaded here regarding with official alerts and warning.</p>
                  <!-- <a href="CRUD-doc/COMPUTERdoc.php" class="btn btn-success m-auto text-dark font-weight-bolder">Go</a> -->
                  <!-- <a href="CRUD-doc/HTMLmore.php" class="btn btn-danger m-auto text-dark font-weight-bolder">learn More</a> -->
               </div>
            </div>
         </div>
         <div class="col-sm-3 bg-transparent">
            <div class="card bg-white border-0 my-2" id="hoverdive">
               <div class="card-body text-center">
                  <img src="images/calendar.svg" class="img-fluid d-block mx-auto mb-2" style="width: 65px;height: 65px;">
                  <small style="color: #d63031; font-weight: bold;"><strong class="mr-1 text-dark">Category:</strong>Upcoming</small>
                  <p>Upcoming events are uploaded here.Check it out and keep yourself updated.</p>
                  <!-- <a href="CRUD-doc/CSS3doc.php" class="btn btn-success m-auto text-dark font-weight-bolder">Go</a> -->
                  <!-- <a href="CRUD-doc/CSS5more.php" class="btn btn-danger m-auto text-dark font-weight-bolder">learn More</a> -->
               </div>
            </div>
         </div>
         <div class="col-sm-3 bg-transparent">
            <div class="card bg-white border-0 my-2" id="hoverdive">
               <div class="card-body text-center">
                  <img src="images/features.svg" class="img-fluid d-block mx-auto mb-2" style="width: 65px;height: 65px;">
                  <small style="color: #81ecec; font-weight: bold;"><strong class="mr-1 text-dark">Category:</strong>New Features</small>
                  <p>Latest upcoming features are preinformed here,Please check it and get advantage.</p>
                  <!-- <a href="CRUD-doc/BOOTSTRAPdoc.php" class="btn btn-success m-auto text-dark font-weight-bolder">Go</a> -->
                  <!-- <a href="CRUD-doc/Wfmore.php" class="btn btn-danger m-auto text-dark font-weight-bolder">learn More</a> -->
               </div>
            </div>
         </div>
         <div class="container d-flex justify-content-center">
            <!-- <a href="#!" class="waves-effect waves-redlighten-1 btn-small mt-2 rounded-pill" style="text-decoration: none;font-weight:bold;color: white;background: #d1c4e9">Check Website Updates</a> -->
         </div>
      </div>
   </div>
   <div class="container-fluid my-2 bg-light pb-4">
      <label class="text-center mt-1 mb-2 font-weight-bold" style="width: 100%;color: #57606f;">Our Subscribers,More Than 200+</label>
      <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3 justify-content-center">
         <div class="col" style="font-family: 'Xanh Mono', monospace;">
            <div class="px-3 pb-0 pt-3 border-0 bg-light d-flex justify-content-center">
               <i class="fas fa-globe" style="font-size: 29px;color: #40739e;"></i>
            </div>
            <h3 class="d-block text-center mt-2 counter">2000</h3>
            <p class="text-center mt-0 font-weight-bold">Total Users</p>
         </div>
         <div class="col"style="font-family: 'Xanh Mono', monospace;">
            <div class="px-3 pb-0 pt-3 border-0 bg-light d-flex justify-content-center">
               <i class="far fa-comment-alt"style="font-size: 29px;color: #3498db;"></i>
            </div>
            <h3 class="d-block text-center mt-2 counter">2000</h3>
            <p class="text-center mt-0 font-weight-bold">Feedbacks</p>
         </div>
         <div class="col"style="font-family: 'Xanh Mono', monospace;">
            <div class="px-3 pb-0 pt-3 border-0 bg-light d-flex justify-content-center">
               <i class="fas fa-blog"style="font-size: 29px;color: #8c7ae6;"></i>
            </div>
            <h3 class="d-block text-center mt-2 counter">2000</h3>
            <p class="text-center mt-0 font-weight-bold">Blog Users</p>
         </div>
         <div class="col"style="font-family: 'Xanh Mono', monospace;">
            <div class="px-3 pb-0 pt-3 border-0 bg-light d-flex justify-content-center">
               <i class="fas fa-award"style="font-size: 29px;color: #e84118;"></i>
            </div>
            <h3 class="d-block text-center mt-2 counter">2000</h3>
            <p class="text-center mt-0 font-weight-bold">Awards</p>
         </div>
      </div>
   </div>
   <div class="container-fluid d-flex justify-content-center mt-4">
      <div class="col-sm-10 border p-3" style="border-radius: 10px; box-shadow: 0px 0px 15px #bdc3c7;">
         <h5 class="float-left">Comment Box<i class="far fa-comment-dots ml-2" style="color:#706fd3;"></i><br> <span class="badge badge-warning badge-pill ml-2" style="font-size: 11px; " id="count"><?php echo $_SESSION['rowcounts']; ?>-Comments</span></h5>
         <input type="button" name="Submit" class="btn btn-primary float-right btn-sm rounded-pill mx-1 font-weight-bold" value="REPLY" data-toggle="modal" data-target="#replys">
         <div class="modal fade" id="replys" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
               <div class="modal-content">
                  <div class="modal-body">
                     <?php
                     if (isset($_POST['submitreplybox'])) {
                     $sender = $_POST['sender'];
                     $reciver = $_POST['reciver'];
                     $repli = $_POST['repli'];
                     $replyconn = mysqli_connect("localhost","root","","hp_comment_box") or die("connection failed");
                     $sqlrri = "INSERT INTO reply(Sender,Reciver,Msg) VALUES ('{$sender}','{$reciver}','{$repli}')";
                     $resultreply = mysqli_query($replyconn, $sqlrri) or die("query unsuccessful");
                     }
                     ?>
                     <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="Post">
                        <div class="input-group d-block m-2">
                           <label>From:<strong>(Sender)</strong></label>
                           <input type="text" name="sender" value="<?php echo $_SESSION['name'];?>" class="border-0 form-control font-weight-bold text-center font-italic" style="background-color:#F8EFBA; border-radius:10px;" readonly id="outline">
                        </div>
                        <div class="input-group d-block m-2">
                           <label>To:<strong>(Reciver)</strong></label>
                           <input type="text" name="reciver" class="form-control rounded" placeholder="Enter name of reciver"id="outline">
                        </div>
                        <div class="input-group d-block m-2">
                           <label>Type Massage<strong>(Reply)</strong></label>
                           <input type="text" name="repli" class="form-control rounded" placeholder="Enter your msg" id="outline">
                        </div>
                        <div class="input-group d-inline">
                           <input type="Submit" name="submitreplybox" class="btn btn-sm btn-success text-dark font-weight-bold form-control" style="border-radius: 7px;">
                           <input type="button" value="Cancel" class="btn text-dark font-weight-bold form-control my-2" style="background-color: #fab1a0;border-radius: 7px;" data-dismiss="modal">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <br><br>
         <hr>
         <?php
         if (isset($_POST['postsubmitbtn'])){
         $naam = $_SESSION['name'];
         $msgtype = $_POST['postmsg'];
         $userphoto = $_SESSION['img'];
         $dop = date("js M,Y (D)");
         $mainconn = mysqli_connect("localhost","root","","hp_comment_box") or die("connection failed");
         $maincomm = "INSERT INTO msg_box(Name,Msg,Photos,Postdate) VALUES ('{$naam}','{$msgtype}','{$userphoto}','{$dop}')";
         $clpd = mysqli_query($mainconn,$maincomm) or die("query unsuccessful");
         mysqli_close($mainconn);
         }
         ?>
         <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            <div class="input-group m-2">
               <div class="input-group-prepend">
                  <img src="<?php echo $_SESSION['img'];?>" name="img" style="width: 50px; height: 50px;">
               </div>
               <input type="text" name="postmsg" class="form-control font-weight-bold font-italic text-dark rounded ml-2" id="write" style="height: 50px;">
               <div class="input-group-append">
                  <input type="submit" name="postsubmitbtn" value="Post" class="float-right btn-sm btn font-weight-bold" style="background-color:#CAD3C8;">
               </div>
            </div>
            <small class="font-italic text-danger  llll"><lable class="font-weight-bold text-dark mr-2" >Note:</lable>For next line use &lt;br&gt;.</small>
         </form>
         <?php
         $fbconn = mysqli_connect("localhost","root","","hp_comment_box") or die("connection failed");
         $hpcb = "SELECT * FROM msg_box";
         $commentquery = mysqli_query($fbconn,$hpcb);
         $_SESSION['rowcounts'] = mysqli_num_rows($commentquery);
         while ($cbdata = mysqli_fetch_array($commentquery)) {
         ?>
         <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
            <div class="media border py-2 my-2 rounded" style="background-color: #dfe6e9;" data-aos="fade-left" data-toggle="modal" data-target="#replybox">
               <img src="<?php echo $cbdata['Photos']; ?>" class="mr-2 ml-2" style="width: 50px; height: 50px; border-radius: 10px; border-top-right-radius: 0px;" >
               <div class="media-body d-block">
                  <input type="text" name="hellomm" value="<?php echo $cbdata['Name']; ?>" class="mt-0 font-weight-bold border-0 bg-transparent" style="color:#b33939;" readonly><br>
                  <p style="width: 100%;color: #0a3d62;font-weight: bold;"><?php echo $cbdata['Msg']; ?><br>
                     <small style="color: #1289A7;"><i class="far fa-calendar-alt my-2 mr-1" style="color:#1B1464;"></i><?php echo $cbdata['Postdate'];?></small>
                  </p>
               </div>
            </div>
         </form>
         <?php }
         mysqli_close($fbconn);
         ?>
         <div class="modal fade" id="replybox" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
               <div class="modal-content">
                  <div class="modal-header d-flex justify-content-center">
                     <label class="font-italic" style="font-size: 27px;font-weight: bolder;"><u>CHECK REPLY MASSAGES</u></label>
                  </div>
                  <div class="modal-body">
                     <center><label>Total<span class="badge badge-warning badge-pill px-2 mx-1"></span> replies found to <strong> </strong></label></center>
                     <?php
                     if (isset($_POST['check'])) {
                     $msgcheck = $_POST['gfv'];
                     $fbconn = mysqli_connect("localhost","root","","hp_comment_box") or die("connection failed");
                     $hpcb = "SELECT * FROM msg_box";
                     $commentquery = mysqli_query($fbconn,$hpcb);
                     }
                     ?>
                     <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                        <div class="input-group">
                           <input type="text" name="gfv" class="form-control ml-2 rounded-sm" placeholder="Enter name to check replies">
                        </div>
                        <div class="input-group">
                           <input type="Submit" name="check" value="CHECK REPLYS" class="mx-auto btn btn-sm btn-warning text-dark font-weight-bold mt-2">
                        </div>
                        <div style="height: auto;width: auto;background-color:#F8EFBA;border: 1.2px solid black;border-radius: 8px;border-top-left-radius: 0px;" class="px-1 py-0 my-2 font-weight-bold font-italic">
                           <p><small class="text-uppercase font-weight-bold"></small><br>
                           </p>
                        </div>
                     </form>
                  </div>
                  <div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php
         $u_name = $_SESSION['name'];
         $feedbackcon = mysqli_connect("localhost","root","","my_collage_project") or die("connection failed");
         $fbq = "SELECT * FROM feedback_record WHERE Name = '$u_name'";
         $fbqr = mysqli_query($feedbackcon,$fbq);
         $all_data = mysqli_fetch_assoc($fbqr);
         $heading = $all_data['Heading'];
         $main = $all_data['MainFB'];
         $tfeedbackcon = mysqli_connect("localhost","root","","my_collage_project") or die("connection failed");
         $tfbq = "SELECT * FROM feedback_record";
         $tfbqr = mysqli_query($tfeedbackcon,$tfbq);
         $totalfb = mysqli_num_rows($tfbqr);
         mysqli_close($tfeedbackcon);
         mysqli_close($feedbackcon);
         ?>
         <div class="my-3 rounded px-3 py-1 border" style="background:#fad390;" id="feedbackbox">
            <header class="font-italic font-weight-bold d-flex" style="position: relative;z-index: 1; font-size: 20px;"><span class="text-center" style="width: 100%;position: absolute;z-index: -1;">My Feedback Status</span><label class = "ml-2 font-italic mt-2" style="font-size: 18px;color: #c0392b;"><small class="text-dark "></small></label>
            <a type="button" class="ml-auto btn btn-sm font-weight-bold mx-1"id="editfeedbackbtn" data-toggle="modal" data-target="#editfeedback"><i class="fas fa-edit"></i>Edit</a>
         </header>
         <label style="color: #2c2c54;font-size: 21px;"><u><i class="fas fa-heading mr-2" style="color:#182C61;"></i><?php echo $heading; ?></u></label>
         <p class="font-weight-bold text-dark"><?php echo $main; ?></p>
         <footer class="border-top border-dark" style="height: 40px;"><small>Total Feedbacks:<strong class="ml-1"><?php echo $totalfb; ?></strong></small>
         </footer>
      </div>
      <?php
      
      ?>
      <!-- brack line -->
   </div>
</div>
<!-- modal -->
<div class="modal fade" id="editfeedback">
   <div class="modal-dialog modal-dialog-centered modal-md">
      <div class="modal-content">
         <div class="modal-body d-flex justify-content-center">
            <h5 class="">Edit Feedback</h5>
            ........................
         </div>
      </div>
   </div>
</div>
<div class="container-fluid mt-3 pt-1 pb-1 bg-light">
   <div class="row">
      <div class="col-sm-3 card bg-transparent pt-2 pb-2 pl-2 pr-2 ml-3 mr-2 rounded shadow-none border-0">
         <div class="card-body">
            <div class="card-title">CONTACT US</div>
            <div class="card-subtitle">You may contact us any time(24*7)</div>
            <div class="card-text" >
               <ul class="font-weight-bold mt-3" style="list-style: square;">
                  <li class="list-unstyled"><i class="fas fa-envelope-open-text"style="font-size: 24px;color: red;"></i><a href="https://accounts.google.com/signup/v2/webcreateaccount?hl=en&flowName=GlifWebSignIn&flowEntry=SignUp" style="text-decoration: none;color: black;" class="ml-3">mp1445747@gmali.com</a></li>
                  <li class="list-unstyled mt-2"><i class="fas fa-envelope-open-text" style="font-size: 24px;color: red;"></i><a href="https://accounts.google.com/signup/v2/webcreateaccount?hl=en&flowName=GlifWebSignIn&flowEntry=SignUp" style="text-decoration: none;color: black;" class="ml-3">manoj1010@gmail.com</a></li>
                  <li class="list-unstyled mt-2"><i class="fas fa-mobile-alt mr-3" style="font-size: 24px;color: blue"></i>111-34567780</li>
                  <li class="list-unstyled mt-2"><i class="fab fa-whatsapp" style="font-size: 24px;color: green"></i><a href="https://www.whatsapp.com/" style="text-decoration: none;color: black;" class="ml-3">8318760799</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-sm-4 card bg-transparent pt-2 pb-2 pl-2 pr-2 ml-3 mr-2 rounded shadow-none border-0">
      <div class="card-body">
         <div class="card-title">PRIVACY POLICY</div>
         <div class="card-subtitle">You may contact us any time(24*7)</div>
         <div class="card-text">
            <ul class="font-weight-bold text-muted" style="list-style: square;">
               <li>This website is approved by indian gov. and we obay all the rules and this site
               is <strong>Https</strong> security</li>
               <li class="text-danger"><strong>NO investment</strong></li>
               <li><strong>Easy</strong> for user to handel this site</li>
               <li>this website <strong>developed under all term and condition</strong></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-sm-4 card bg-transparent pt-2 pb-2 pl-2 pr-2 ml-3 mr-2 rounded shadow-none border-0">
      <div class="card-body">
         <div class="card-title">ABOUT WEBSITE</div>
         <div class="card-text">
            <ul class="font-weight-bold text-dark" style="list-style: square;">
               <p class="float-left">This website is approved by indian gov. and we obay all the rules and this site is Https security.</p>
               <p class="text-danger">This site built for the collection of users data/information.</p><span>It is a legale site</span>
            </ul>
         </div>
      </div>
   </div>
</div>
</div>
<div class="container-fluid mt-3 bg-light py-2">
<div class="row shadow-none border-0 d-flex justify-content-center">
   <div class="col-sm-6 bg-light text-center">
      <strong>Legal website||created||developed||by Manoj Kumar Prajapati||Indian</strong>
      <small>Legal©|2020-2040</small>
   </div>
</div>
</div><br>
<script>
$(document).ready(function() {
$('#dbtn').click(function(){
$('#dbtn i').css('color','#eb2f06');
});
$('#dbtn').dblclick(function() {
$('#dbtn i').css('color','#0097e6');
});
$('#addbtn').click(function() {
$('#addbtn i').css('color','#4cd137');
});
$('#addbtn').dblclick(function() {
$('#addbtn i').css('color','#0097e6');
});
$('#dtbtn').click(function() {
$('#dtbtn i').css('color','#eb2f06');
});
$('#dtbtn').dblclick(function() {
$('#dtbtn i').css('color','#0097e6');
});
$('#addtbtn').click(function() {
$('#addtbtn i').css('color','#4cd137');
});
$('#addtbtn').dblclick(function() {
$('#addtbtn i').css('color','#0097e6');
});
$('#write').keyup(function() {
$('.llll').hide();
});
$('#feedbackbtn').click(function() {
$('#feedbackbox').slideUp();
});
$('#showbtn').click(function() {
$('#abox').slideDown();
});
});
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init({
offset: 120
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
<!-- <script> -->
<!-- $('.counter').counterUp({ -->
<!-- time:1000, -->
<!-- delay:10 -->
<!-- }); -->
<!-- </script> -->
</body>
</html>