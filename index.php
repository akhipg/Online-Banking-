<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>AG Bank</title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="index.php"><img src="img/logog.png" height="50" width="80"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="contactus.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>AG Bank</h1>
                    <p>The balance that matters!</p>
                </div>
                <div class="col-12 col-sm offset-4 align-self-center">
                    <img src="img/logop.png" height="120" width="120" class="img-fluid">
                </div>
            </div>
        </div>
    </header>

    <div class="wrap">
     <div class="container">
        <div class="row  row-content align-items-center">
            <div class="col offset-1 col-sm col-md">
                <div class="button">
                    <a href="users.php" class="btn">View Customers</a>
                </div>
            </div>
            <div class="col col-sm col-md">
                <div class="button">
                    <a href="transactionhistory.php" class="btn">Transaction History</a>
                </div>
            </div>
            <div class="col col-sm col-md">
                <img src="css\bank_bg.jpg" class="responsive">
            </div>
        </div>
    
     </div>
   </div>
    
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-7 offset-2 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Manisha Heights<br>
		              Balrajeshwar Road,<br>
		              Thane-400604<br>
		              <i class="fa fa-phone fa-lg"></i> 8433795821<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:akhipg@gmail.com">akhipg@gmail.com</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="https://www.instagram.com/akki_p086/"><i class="fa fa-instagram fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div> 
                    <p>© Copyright 2021 AG Bank</p>
                </div>
           </div>
        </div>
    </footer>
     <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
     <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
     <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
     <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>