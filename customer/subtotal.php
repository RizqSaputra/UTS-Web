<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snaphaven</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/buy.css" />
    <link href="gambar/icon Snaphaven.png" rel="icon"/>
</head>
<body>
  
  <div class="container">
    <header id="header" class="header d-flex align-items-center fixed-top sticked">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="gambar/Snaphaven.png">
        </a>  
        
        <nav id="navbar" class="navbar navbar-expand-lg">
          <ul class="nav justify-content-center">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li >
              <a href="index.php#about">About</a>
            </li>
            <li >
              <a href="index.php#service">Services</a>
            </li>
            <li >
              <a href="index.php#pricing">Pricing</a>
            </li>   
            <li >
              <a href="index.php#gallery">Gallery</a>
            </li>   
          </ul>   
        </nav>
            <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="btn-login" href="index.php">Logout</a>
              </li>
            </ul>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header>
    <section class="subtotal">
        <div class="container order-details">
            <h1>Order Details</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product 1</td>
                        <td>Jl Ki Wahid Hasyim</td>
                        <td>081111111</td>
                        <td>$20</td>
                    </tr>                                        
                    <tr>
                        <td colspan="3" class="text-right">Total</td>
                        <td>$20</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="btn-order">
            <a href="#"><button>Order Now</button></a>
        </div>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </section>
  </div>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>AOS.init();</script>
  <!-- <script src="js/main.js"></script> -->
</body>
</html>