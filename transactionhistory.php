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

<body style="background-color:black;">
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto" href="index.php"><img src="img/logog.png" height="50" width="80"></a>
                <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item active"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./aboutus.html"><span class="fa fa-info fa-lg"></span> About</a></li>
                        <li class="nav-item"><a class="nav-link" href="./contactus.html"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
                    </ul>
                </div>
            </div>
    </nav>

  
    <div class="container">
            <br>
            <h2 style="color: white;" class="text-center pt-4">Transaction History</h2>
                
            <br>
            <div class="table-responsive-sm">
            <div class="table-responsive">
                  <table class="table table-striped table-dark">
                    <thead class="thead-dark">
                    <tr>
                        <th class="text-center py-2">S.No.</th>
                        <th class="text-center py-2">Sender</th>
                        <th class="text-center py-2">Receiver</th>
                        <th class="text-center py-2">balance</th>
                        <th class="text-center py-2">Date & Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include 'config.php';

                    $sql ="select * from transaction";

                    $query =mysqli_query($conn, $sql);

                    while($rows = mysqli_fetch_assoc($query))
                    {
                ?>

                    <tr>
                    <td class="text-center py-2"><?php echo $rows['sno']; ?></td>
                    <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
                    <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
                    <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
                    <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>
                    </tr>
                        
                <?php
                    }

                ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
   </body>
</html>