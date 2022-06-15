<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap css link  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- fontwosome css link  -->
    <link rel="stylesheet" href="css/all.css">


    <!-- Custom css link  -->
    <link rel="stylesheet" href="css/custom.css">

    <title>Online Shop Service management System</title>

</head>

<body>

    <!------------------  Start Navigation----------------------->
    <nav class="navbar navbar-expand-sm navbar-dark bg-success pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">OSSMS</a>
        <span class="navbar-text">Customar's Happiness is our Aim</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mymanu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mymanu">
            <ul class="navbar-nav pl-5 ml-auto custom-nav ">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#service" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="#login" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!------------------  End  Navigation----------------------->
    <!------------------  Start Header  Jumbotron  ---------------------->
    <header class="jumbotron back-img" style="background-image:url(Image/bg2.jpg);">
        <div class=" myclass mainHeading">
            <h1 class="text-uppercase font-weight-bold">Wellcome our Shop</h1>
            <p class="font-italic ">Customar's Happiness is our Aim</p>
        </div>
    </header>
    <!------------------  End  Header   Jumbotron----------------------->
    <!------------------  Start Introduction  Jumbotron----------------------->
    <div class="container-fluid">
        <div class="jumbotron text ">
            <h2 class="text-center text-uppercase font-weight-bold  "> Online Sevrice management System</h2>
            <p class="text-center">IT teams are vital to any modern business’s success. Learn how Atlassian’s approach
                to IT service management (ITSM) can lead to efficiency and collaboration between IT, software,
                and business teams. This course outlines ITSM for anyone in your organization, setting a foundation for
                more meaningful
                conversations and decision-making with key stakeholders. You’ll learn core practices, terminology, and
                challenges around ITSM, plus how to asses the IT maturity of your organization.</p>
        </div>
    </div>
    <!------------------  End  Introduction  Jumbotron----------------------->
    <!------------------  End  Service Jumbotron----------------------->
    <div class="container-fluid" id="service">
        <h2 class="text-center">Our Service Provide</h2>

        <div class="row  mt-4 text-center ">
            <div class="col-sm-4">
                <a href="#"><i class="fas fa-tv fa-6x text-success"></i></a>
                <h4 class="mt-4">Electronic Application</h4>
            </div>

            <div class="col-sm-4">
                <a href="#"><i class="fas fa-sliders-h fa-6x text-success"></i></a>
                <h4 class="mt-4">preventivee Mantenace </h4>
            </div>

            <div class="col-sm-4">
                <a href="#"><i class="fas fa-cogs  fa-6x text-success"></i></a>
                <h4 class="mt-4">Falt Repair</h4>
            </div>
        </div>
    </div>
    <!------------------  End  Service Jumbotron----------------------->
    <!------------------  Start happy customer Jumbotron----------------------->
    <div class="jumbotron bg-success">
        <div class="container">
            <h2 class="text-center text-white">Happy Customar</h2>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6 ">
                    <div class="card shadow-lg  mb-2 ">
                        <div class="card-body  text-center ">
                            <img src="Image/teacher-1.png" class="img-fluid" style="border-radius:100px"
                                alt="teacher-1">
                            <h4 class="card-title">Jannat</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam maiores nobis</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6 ">
                    <div class="card shadow-lg  mb-2 ">
                        <div class="card-body  text-center ">
                            <img src="Image/teacher-2.png" class="img-fluid" style="border-radius:100px"
                                alt="teacher-2">
                            <h4 class="card-title">John Dev</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam maiores nobis</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6 ">
                    <div class="card shadow-lg  mb-2 ">
                        <div class="card-body  text-center ">
                            <img src="Image/teacher-3.png" class="img-fluid" style="border-radius:100px"
                                alt="teacher-3">
                            <h4 class="card-title">Sadia</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam maiores nobis</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6 ">
                    <div class="card shadow-lg  mb-2 ">
                        <div class="card-body  text-center ">
                            <img src="Image/teacher-4.png" class="img-fluid" style="border-radius:100px"
                                alt="teacher-4">
                            <h4 class="card-title">Akash</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam maiores nobis</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!------------------  End  happy customer Jumbotron----------------------->
    <!------------------  Start Contact Jumbotron----------------------->
    <div class="container" id="contact">
        <h2 class="text-center mb-4">Contact Us</h2>
        <div class="row">
            <div class="col-md-8">
                <form action="" method="POST">
                    <input type="text" class="from-control" name="name" placeholder="Enter Your Name"
                        style="width:100%;padding:10px; border-radius:10px;"><br><br>
                    <input type="text" class="from-control" name="subject" placeholder="Enter Your Subject"
                        style="width:100%; padding:10px; border-radius:10px;"><br><br>
                    <input type="email" class="from-control" name="email" placeholder="Enter Your Email"
                        style="width:100%;padding:10px; border-radius:10px;"><br><br>
                    <textarea class="from-control" name="email" placeholder="How Can I Help You"
                        style="height:150px; width:100%; padding:10px; border-radius:10px;"
                        style="width:100%;"></textarea><br><br>
                    <input type="submit" class=" btn btn-primary" value="send" name="submit"><br><br>
                </form>
            </div>
            <div class="col-md-4 text-center">
                <strong>Headquater:</strong><br>
                ossms pvt Ltd,<br>
                Dhaka divistion<br>
                1200-4 , +88017*********7
            </div>
        </div>
    </div>
    <!------------------  End  Contact Jumbotron----------------------->
    <!------------------  Start  Footer Jumbotron----------------------->
    <footer class="container-fluid bg-dark mt-5 text-white">
        <div class="container">
            <div class="row  py-3 ">
                <div class="col-md-6">
                    <span class="pr-2">Follow Us : </span>
                    to all Scioal media
                </div>
                <div class="col-md-6 text-right">
                    <small> Design by Jannat &copy; 2021</small>
                    <small class="ml-2"> <a href="#">Admin Loging</a></small>

                </div>
            </div>
        </div>

    </footer>


    <!------------------  End  Footer  Jumbotron----------------------->

    <!------------------------ JS file addition---------------------->
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/all.min.js"></script>
</body>

</html>