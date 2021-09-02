<?php include "All links.php"?>
<?php session_start(); ?>
<?php
if (isset($_POST['Submit'])){
$u_Name =$_POST['Name'];
$u_Gender =$_POST['gender'];
$u_Email =$_POST['email'];
$u_password =$_POST['pass'];
$u_photo =$_FILES['photo'];
$hashing_password = password_hash($u_password, PASSWORD_BCRYPT);
//print_r($u_photo);
$filename = $u_photo['name'];
$filepath = $u_photo['tmp_name'];
$error = $u_photo['error'];
if ($error ==0) {
$destfile = 'uploadedphotos/'.$filename;
//echo "$destfile";
move_uploaded_file($filepath,$destfile);
$conn = mysqli_connect("localhost","root","","my_collage_project") or die("connection failed");
$sql = "INSERT INTO all_records(Name,Gender,Email_ID,Password,Photo) VALUES ('{$u_Name}','{$u_Gender}','{$u_Email}','{$hashing_password}','{$destfile}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");
}else{
echo "Photo is not uploaded";
}
mysqli_close($conn);
}
?>
<link rel="stylesheet" type="text/css" href="CSS3 Style Code(CssSC)/style.css">
<link rel="stylesheet" type="text/css" href="CSS3 Style Code(CssSC)/wpcs.css">
<link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<!-- important link -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid mb-2 sticky-top pt-2 pb-3 text-white"style="font-weight: bold;background:#34495e;">Name of website
    <button type="button" class="btn btn-sm btn-outline-secondary float-right font-weight-bold" style="color:#bdc3c7;">
    Info<span class="visually-hidden"><i class="fas fa-question-circle ml-1"style="font-size: 15px;color: #cc8e35;"></i></span>
    </button>
</div>
<div class="container-sm text-dark font-weight-bold pt-4 pb-4 pl-4 rounded" style="background-color:#f1f2f6;">
    <img src="images/blog.svg" class="img-fluid mx-auto d-block" style="width:20%; height: 20%;" id="rotateimg">
    <label class="text-center" style="width: 100%;">Hello Blogger</label>
    <h4 style="text-align: center;font-family: 'Bree Serif', serif;">Create Your Own Blogging Account!<br><small style="font-size: 12px; display: block; margin-top: 5px;">Here you may register for weitting bolg on this website,this is absultaly free of cost. welcome and use it.</small></h4>
    <div class="mx-auto container-sm rounded pt-3 pb-3" id="blogm">
        <div class="row px-3">
            <div class="col-sm col-lg-3">
                <img src="images/launch.svg" class="img-fluid mx-auto d-block" style="height: 120px;">
                <label class="font-weight-bold text-white" style="width: 100%; text-align: center;">Launch Your Ideas<br>
                    <button type="button" class="btn rounded-pill" id="r">Register</button>
                    <button type="button" class="btn rounded-pill" id="l">Loge In</button>
                </label>
            </div>
            <div class="col-sm bg-transparent justify-content-center" style="color: #dff9fb;">
                <h3 class="text-center text-light" style="font-family: 'Bree Serif', serif;">Terms & Conditions</h3>
                <i class="fas fa-arrow-alt-circle-right" style="color: #d35400;font-size: 17px;margin-right:8px;"></i>We are providing this blogging features to our users without any payment.Before starting we need to now about blog writting.
                <div class="row mt-2">
                    <div class="col-sm d-flex justify-content-center">
                        <a href="#!" class="text-decoration-none btn my-2" id="bv" style="width: 100%;color: black;font-weight: bold;border-radius:18px;"><i class="fas fa-pen-nib mx-auto" id="inkpen"></i><br>Blog Writing</a>
                    </div>
                    <div class="col-sm d-flex justify-content-center">
                        <a href="#!" class="text-decoration-none btn my-2" id="bv" style="width: 100%;color: black;font-weight: bold;border-radius: 18px;"><i class="fas fa-book mx-auto" id="boook"></i><br>Instructions</a>
                    </div>
                    <div class="col-sm d-flex justify-content-center">
                        <a href="#!" class="text-decoration-none btn my-2" id="bv" style="width: 100%;color:black;font-weight: bold;border-radius: 18px;"><i class="fas fa-lightbulb mx-auto" id="bulb"></i><br>Important Point</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-sm">
    <div class="row my-2" style="background-image: url('images/bg2.jpg');background-repeat: no-repeat; background-size: 100% 100%;border-radius: 10px;">
        <div class="col-sm-6 my-3 mx-3 border border-dark rounded-sm d-flex justify-content-start">
            <div>
                <h1 class="mt-5 mt-sm-3 ml-2" style="font-family: 'Bree Serif', serif;text-align: center;">Information About Site<br>
                <p class="text-muted my-3" style="font-size: 15px;font-family: 'Grenze Gotisch', cursive;">Here,you learn about Web-designer/developer including Html5,Css3,Bootstrap,php,javascript and many more.you must improve your knowledge and become full stack developer.Most important thing our all services are absoluatly free </p>
                </h1>
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-5 m-2">
                        <div class="card border-0" style="border-radius: 14px;" id="cf">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 19px;font-family: 'Philosopher', sans-serif;">Web Development</h4>
                                <p class="card-text font-italic font-weight-bold" style="font-size: 13px;">
                                    Web-development need back-end,front-end & UI , UX , full-stacks combination is web-developer.
                                </p>
                                <button type="button" class="btn btn-primary btn-sm rounded-pill font-weight-bold text-dark"data-toggle="modal" data-target="#staticBackdrop">Get Start</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 m-2">
                        <div class="card border-0" style="border-radius: 14px;" id="cs">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size: 19px;font-family: 'Philosopher', sans-serif;">Study Material</h4>
                                <p class="card-text font-italic font-weight-bold" style="font-size: 13px;">
                                    Here,we provided best study material free of cost,this will include languages/FW,Lib,.
                                    <small style="font-size: 10px;" class="font-weight-bold mt-1">(programming,frameworks,libs)</small>
                                </p>
                                <button type="button" class="btn btn-primary btn-sm rounded-pill font-weight-bold text-dark" data-toggle="modal" data-target="#staticBackdrop">Get Start</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <strong class="text-center mt-4" style="color: #eb3b5a;">Before "Get Start" please make sure that your are already registered.For registration following steps:</strong>
                    <ul class="mr-auto ml-2 mt-3" style="font-family: 'Grenze Gotisch', cursive;">
                        <li>Fill the give form and click on "Create Account".</li>
                        <li>After,go for login.</li>
                    </ul>
                    <div class="container-sm mx-2 d-flex justify-content-center">
                        <button class="btn btn-info text-dark font-weight-bold font-italic rounded-pill"  data-toggle="modal" data-target="#staticBackdrop">Get Started</button>
                        <!-- modal -->
                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" >
                            <div class="modal-dialog modal-dialog-centered modal-none">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title mx-auto" id="staticBackdropLabel">Email Verification</h5>
                                    </div>
                                    <img src="images/verify.svg" style="width: 36px;height: 36px;" class="img-fluid mx-auto">
                                    <div class="modal-body">
                                        <?php
                                        if (isset($_POST['verify'])) {
                                        $verify = $_POST['id'];
                                        $conn_verify = mysqli_connect("localhost","root","","my_collage_project") or die("connection failed");
                                        $sql_verify = "SELECT * FROM all_records WHERE Email_ID = '$verify' ";
                                        $result_verify = mysqli_query($conn_verify, $sql_verify) or die("query unsuccessful");
                                        $value_count = mysqli_num_rows($result_verify);
                                        if ($value_count) {
                                        ?>
                                        <script>
                                        location.replace("Welcome loginpage.php");
                                        </script>
                                        <?php
                                        }else{
                                        $_SESSION['fail'] ="Not Registered,please create account now";
                                        }
                                        }
                                        mysqli_close($conn_verify);
                                        ?>
                                        <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" >
                                            <p class="text-center font-weight-bold text-danger font-italic output" style="display: none;"><?php echo $_SESSION['fail']; ?></p>
                                            <label class="font-weight-bold font-italic">Email ID</label>
                                            <input type="email" name="id" class="form-control" placeholder="Enter registered ID...">
                                            <input type="submit" name="verify" value="Done" class="btn btn-primary btn-block my-2" id="check">
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mx-auto" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <small class="text-danger font-weight-bold">*Please make sure you are registered</small>
                </div>
            </div>
        </div>
        <div class="col-sm-5 my-3 mx-3 border border-dark rounded-sm">
            <div class="card bg-transparent" style="border:none;">
                <h5 class="text-center font-weight-bold" style="font-size: 30px; letter-spacing: 5px;text-shadow: 4px 0px 4px black;">Welcome</h5>
                <h4 class="text-center font-weight-bold" style="font-size: 20px;"><i>Create Account</i></h4>
                <div class="card-header bg-transparent" style="border:none;">
                    <a href="" class="btn btn-block btn-danger font-weight-bold"><i class="fab fa-google mr-2"></i>Login via Google</a>
                    <a href="" class="btn btn-block text-white font-weight-bold" style="background-color: #3c6382;"><i class="fab fa-facebook-f mr-2"></i>Login via Facebook</a>
                </div>
                <p class="text-center font-weight-bold mt-0">OR</p>
                <div class="card-body">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="color: #f0932b;"><i class="fas fa-user-tie"></i></span>
                            </div>
                            <input type="text" name="Name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"style="color: #4834d4;"><i class="fas fa-venus-mars" ></i></span>
                            </div>
                            <select class="form-control" name="gender">
                                <option>Select</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="color: #e74c3c;"><i class="fas fa-envelope-open-text"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Enter valid e-mail ID">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="color: #f39c12;"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="pass" class="form-control" placeholder="Create password">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="color:#e84118;"><i class="fas fa-camera"></i></span>
                            </div>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <input type="submit" name="Submit" value="Create Account" class="form-control btn-primary font-weight-bold " >
                        <p class="text-center">Already have account? <a href="Welcome loginpage.php" class="text-decoration-none">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
    $('#check').click(function() {
    $('.output').show();
    });
    });
    </script>
</div>
<?php
$fbconn = mysqli_connect("localhost","root","","my_collage_project") or die("connection failed");
$hpcb = "SELECT * FROM all_records";
$commentquery = mysqli_query($fbconn,$hpcb);
$_SESSION['subscriberowcounts'] = mysqli_num_rows($commentquery);
?>
<div class="mt-2 container-fluid border border-left-0 border-bottom-0 border-right-0 py-2">
    <a href="#!" class="float-left ml-2" style="color:#b2bec3;font-size: 13px;text-decoration: none;"><span class="mx-1 text-dark">·</span>Privacy Policy<span class="mx-1 text-dark">·</span><label class="badge text-dark font-weight-bold p-1" style="background: #f7f1e3;">Subscribers <span style="font-size: 13.5px;color: #1B1464;font-weight: bold;"><?php echo$_SESSION['subscriberowcounts']; ?></span></label></a>
    <label class="float-right mr-2" style="color:#b2bec3;font-size: 13px;">Copyright © 2020. All Right Reserved.</label>
</div>