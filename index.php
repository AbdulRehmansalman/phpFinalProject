<?php
include 'dbcon.php';
if (isset($_POST['submit'])) {
        //! This function is used whwn user enter special chracter and to add security layer:
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

        // ? Password Hashing
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
        // ? Check if same email is not enetered
        $eamilquery = "select * from finalwebsite where email='$email'";
        $query = mysqli_query($con, $eamilquery);
        // ! It Check if the email,rows is more than 0: Then we Dont get Registered
        $emailcount = mysqli_num_rows($query);
        if ($emailcount > 0) {
            echo "email already Exist";
        } else {
            if ($password === $cpassword) {
                $insertquery = "insert into finalwebsite (name,email,mobile,password,cpassword) values ('$name','$email','$mobile','$pass','$cpass') ";
                $iquery = mysqli_query($con, $insertquery);
                if ($iquery) {
    ?>
                    <script>
                        alert("Insertion Succesful--:---- ");
                    </script>
                <?php
                } else {
                    echo " Not Inserted Data";
                }
            } else {
                ?>
                <script>
                    alert(" Password Incorrect!! plz Enter Correct Password");
                </script>
    <?php
            }
        }
    }
    ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/cd47ae25bd.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <title>Home</title>
</head>
<body>
  <div class="header" id="topHeader">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container text-uppercase p-2">

        <a class="navbar-brand font-weight-bold text-white" href="#">Web development</a>
        <button data-toggle="collapse" data-target="#navbarToggler" type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarToggler">

          <ul class="navbar-nav ml-auto text-uppercase">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#servicediv">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#newsletterid">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricingdiv">Price</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=".contactus">Contact</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <section class="header-section">
      <div class="center-div">
        <h1 class="font-weight-bold">We are <span class="multiple-text"></span></h1>
        <p>We create the world best websites.</p>
        <div class="header-buttons">
          <a href="#newsletterid">AboutUs </a>
          <a href="#contactid">ContactUs </a>
        </div>
      </div>
    </section>

  </div>
  <!-- *******************header part end********** -->
  <!-- ********************* three extra div starts********* -->
  <section class="header-extradiv">
    <div class="container">
      <div class="row">
        <div class="extra-div col-lg-4 col-md-4 col-12">
          <a href="#"><i class="fa-3x fa fa-desktop"></i></a>
          <h2> Easy to Use </h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            voluptas officia in asperiores ipsum.

          </p>
        </div>
        <div class="extra-div col-lg-4 col-md-4 col-12">
          <a href="#"><i class=" fa-3x fa fa-trophy"></i></a>
          <h2> Awesome Design </h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            voluptas officia in asperiores ipsum.
          </p>
        </div>
        <div class="extra-div col-lg-4 col-md-4 col-12">
          <a href="#"><i class="fa-3x fa fa-magic"></i></a>
          <h2 style="white-space: nowrap;">Easy to CUSTOMIZE</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            voluptas officia in asperiores ipsum.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ******************end************ -->

  <!-- ******************OFER SECTION START**************** -->
  <section class="service-offers " id="servicediv">
    <div class="container headings text-center">
      <h1 class="text-center font-weight-bold text-uppercase"> What do We Offer</h1>
      <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0 animationn">
          <div class="names my-3">
            <h1> html</h1>
            <div class="progress w-75">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%;">100%
              </div>
            </div>

          </div>
          <div class="names my-3">
            <h1> CSS</h1>
            <div class="progress w-75">
              <div class="progress-bar progress-bar-striped bg-info" style="width: 90%;">90%</div>
            </div>

          </div>
          <div class="names my-3">
            <h1> Javascript</h1>
            <div class="progress w-75">
              <div class="progress-bar progress-bar-striped bg-warning" style="width: 85%;">80%
              </div>
            </div>

          </div>
          <div class="names my-3">
            <h1> JSREACT</h1>
            <div class="progress w-75">
              <div class="progress-bar progress-bar-striped bg-danger" style="width: 75%;">75%
              </div>
            </div>

          </div>
          <div class="names my-3">
            <h1> NODEJS</h1>
            <div class="progress w-75">
              <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%;">70%
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 servicediv">
          <div class="row">
            <div class="col-lg-2 col-2 service-icons">
              <i class="fa-3x fa fa-desktop"></i>
            </div>
            <div class="col-lg-10 col-10">
              <h3 style="text-align: justify;">Website Development</h3>
              <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit esgdh hfhdbhdfd.</P>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 col-2 service-icons">
              <i class="fa-3x fa fa-wifi"></i>
            </div>
            <div class="col-lg-10 col-10">
              <h2>Digital Marketing</h2>
              <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit esgdh hfhdbhdfd.</P>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2 col-2 service-icons">
              <i class="fa-3x fa fa-phone"></i>
            </div>
            <div class="col-lg-10 col-10">
              <h2>Support 24/7</h2>
              <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit esgdh hfhdbhdfd.</P>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- ****************************END ********************** -->

  <!-- ***********************star  tproject-work***************** -->
  <section class="project-work">
    <div class="container headings text-center">
      <p class="text-center font-weight-bold">MORE THAN 2,000 WEBSITES CREATED </p>
    </div>
    <div class="container webpage" style="display:flex; justify-content:center; gap:2rem; align-items:center;">
      <div>
        <h1 class="count" style="color:#0afcfc ;">1500</h1>
        <p style="color:#0afcfc ;">@ABDURREHMAN</p>
      </div>
      <div>
        <h1 class="count" style="color:rgb(216, 9, 19) ;">2000</h1>
        <p style="color:#f05c18 ;">@ABDURREHMAN</p>
      </div>
      <div>
        <h1 class="count" style="color:rgb(26, 74, 230) ;">2500</h1>
        <p style="color:#051b1b ;"> @ABDURREHMAN </p>
      </div>
      <!-- <div>
          <h1 class="count" style="color:rgb(238, 16, 208) ;">3000</h1>
          <p  style="color:#f53e1e ;">@ABDURREHMAN</p>
        </div> -->
    </div>
  </section>
  <!-- *************************end************************ -->

  <!-- ************ START ************** Pricing div**************** -->
  <section class="pricing" id="pricingdiv">
    <div class="container headings text-center pb-2">
      <h1 class="text-center font-weight-bold text-white">OUR BEST PRICING </h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12 pt-2">
          <div class="card text-center">
            <div class="card-header">Basic</div>
            <div class="card-body">
              <li>$<span class="money">20</span>/website</li>
              <li>Responsive Websites</li>
              <li>Domain Name Free</li>
              <li>MoBILE Friendly</li>
              <li>Webmail Support</li>
            </div>
            <div class="card-footer">
              <a href="#">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12 card-second">
          <div class="card text-center">
            <div class="card-header">STANDARD</div>
            <div class="card-body">
              <li>$<span class="money">20</span>/website</li>
              <li>Responsive Websites</li>
              <li>Domain Name Free</li>
              <li>MoBILE Friendly</li>
              <li>Webmail Support</li>
            </div>
            <div class="card-footer">
              <a href="#">Purchase</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="card text-center">
            <div class="card-header">UNLIMITED</div>
            <div class="card-body">
              <li>$<span class="money">60</span>/website</li>
              <li>Responsive Websites</li>
              <li>Domain Name Free</li>
              <li>MoBILE Friendly</li>
              <li>Webmail Support</li>
            </div>
            <div class="card-footer">
              <a href="#">Purchase</a>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
  <!-- *********************************** End********************* -->

  <!-- ***************OUR CUSTOMER CARE******************** -->
  <section class="happyclients">
    <div class="container headings text-center">
      <h1 class="text-center font-weight-bold ">OUR HAPPPTY CLIENTS</h1>
      <p>Our satisfied Customer Says</p>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner container">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-4 col-12">
              <div class="box">
                <a href="#"><img src="computer1.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores totam ratione sapiente consequuntur est commodi esse molestia.</p>
                <h1>ABDURREHMAN</h1>
                <h2> WEB DEVELOPER</h2>
              </div>

            </div>
            <div class="col-lg-4 col-12">
              <div class="box">
                <a href="#"><img src="computer1.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores totam ratione sapiente consequuntur e molestia.</p>
                <h1>ABDURREHMAN</h1>
                <h2> WEB DEVELOPER</h2>
              </div>

            </div>
            <div class="col-lg-4 col-12">
              <div class="box">
                <a href="#"><img src="computer1.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores totam ratione sapiente consequunsse molestia.</p>
                <h1>ABDURREHMAN</h1>
                <h2> WEB DEVELOPER</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-4 col-12">
              <div class="box">
                <a href="#"><img src="computer1.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores totam ratione sapiente consequue molestia.</p>
                <h1>ABDURREHMAN</h1>
                <h2> WEB DEVELOPER</h2>
              </div>

            </div>
            <div class="col-lg-4 col-12">
              <div class="box">
                <a href="#"><img src="computer1.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores totam ratione sapiente consequuntur est commodi esse molestia.</p>
                <h1>ABDURREHMAN</h1>
                <h2> WEB DEVELOPER</h2>
              </div>

            </div>
            <div class="col-lg-4 col-12">
              <div class="box">
                <a href="#"><img src="computer1.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores totam ratione sapiente consequuntur est commodi esse molestia.</p>
                <h1>ABDURREHMAN</h1>
                <h2> WEB DEVELOPER</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-4 col-12">
              <div class="box">
                <a href="#"><img src="computer1.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores totam ratione sapiente consequuntur est commodi esse molestia.</p>
                <h1>ABDURREHMAN</h1>
                <h2> WEB DEVELOPER</h2>
              </div>

            </div>
            <div class="col-lg-4 col-12">
              <div class="box">
                <a href="#"><img src="computer1.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores totam ratione sapiente consequuntur est commodi esse molestia.</p>
                <h1> ABDURREHMAN </h1>
                <h2> WEB DEVELOPER</h2>
              </div>

            </div>
            <div class="col-lg-4 col-12">
              <div class="box">
                <a href="#"><img src="computer1.jpg" class="img-fluid img-thumbnail"></a>
                <p class="m-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo maiores totam ratione sapiente consequuntur est commodi esse molestia.</p>
                <h1>ABDURREHMAN</h1>
                <h2> WEB DEVELOPER</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </section>

  <!-- *****************************END*********** -->
  <section class="contactus" id="contactid">
    <div class="container headings text-center">
      <h1 class="text-center font-weight-bold"> CONTACT US </h1>
      <p> We are here to Help and Answer Any Question You Might have.<i class="fa fa-phone"></i>
        We look Forward To hearing from you. </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="connectus col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
          <form method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Name:</label>
              <input type="text" class="form-control" name="name" required auto-complete="off">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="email" required auto-complete="off" aria-describedby="emailHelp" ">
              </div>

              <div class=" form-group">
              <label for="exampleInputEmail1">Mobile</label>
              <input type="text" class="form-control" name="mobile" required auto-complete="off" aria-describedby="emailHelp" ">
              </div>
             <div class="form-group">
              <label for="exampleInputEmail1">password</label>
              <input type="password" class="form-control" name="password" required auto-complete="off" aria-describedby="emailHelp" ">
              </div>

              <div class="form-group">
              <label for="exampleInputEmail1">Confirm Password</label>
              <input type="password" class="form-control" name="cpassword" required auto-complete="off" aria-describedby="emailHelp" ">
              </div>
              
            <div class="d-flex justify-content-center form-button">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ******************* end************* -->
  <section class="newsletter col-12" id="newsletterid">
    <div class="container headings text-center">
      <h1 class="text-center font-weight-bold">SUBSCRIBE TO OUR NEWSLETTER</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">
          <div class="input-group mb-3">
            <input type="text" class="form-control news-input" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">Send Email</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- *********************end*********** -->
  <!-- Fotter starts************************* -->
  <footer class="footersection" id="footerdiv">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 footer-div">
          <div>
            <h3 style="white-space:nowrap;">About Website Development</h3>
            <p>oluta possimus illum molestias rerum officia fugiat odio nisi veritatis
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium omnis
              alias officia. Nesciunt deleniti.
            </p>
          </div>

        </div>
        <div class="col-lg-4 col-md-6 col-12 footer-div text-center">
          <div>
            <h3>Navigation Links</h3>
            <a href="#">Home </a><br>
            <a href="#">Services</a><br>
            <a href="#">Price </a><br>
            <a href="#">About </a>
          </div>

        </div>
        <div class="col-lg-4 col-md-12 col-12 footer-div">
          <div>
            <h3>NEWSLETTER</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eligendi expli
              cabo enim voluptate.</p>
            <div class="container newsletter-main">
              <div class="row">
                <div class="col-lg-12 offset-lg-2 col-12">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control news-input" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">Send Email</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-3 text-center">
      <p>Copyright @2019 All rights reserved | This Template is made with love by ABDURREHMAN</p>
    </div>
    <div class="scrolltop float-right">
      <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
    </div>
  </footer>
  <!-- **************************************************************************************** -->




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    $('.count').counterUp({
      delay: 10,
      time: 3000
    })

    mybutton = document.getElementById("myBtn");
    // when the user scrolls down 20px from the top of the document,show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop < 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";

      } else {
        mybutton.style.display = "none"
      }
    }


    // when the user clicks on the button scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0; /// for SAfari
      document.documentElement.scrollTop = 0; // for Chrome Firefox;
    }
    ScrollReveal({
      reset: true,
      distance: '80px',
      duration: 1500,
      delay: 200
    });
    ScrollReveal().reveal('.header-section,.center-div', {
      origin: 'top'
    });
    ScrollReveal().reveal('.header-extradiv,.ectra-div,container webpage,project-work', {
      origin: 'top'
    });
    ScrollReveal().reveal('.service-offers,.headings,.animationn', {
      origin: 'top'
    });
    ScrollReveal().reveal('.count,.names, service-icons,.connectus,.input-group', {
      origin: 'bottom'
    });


    const typed = new Typed('.multiple-text', {
      strings: ['FrontEnd Developer', 'Backend Developer', 'Graphic Designer', 'Youtuber'],
      typeSpeed: 100,
      backSpeed: 100,
      backDelay: 1000,
      loop: true
    });
  </script>


</body>

</html>