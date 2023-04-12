<?php
session_start();

if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: ../index.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">   -->
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>M<span>odern</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                <h4>Admin</h4>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="designer.php">
                            <span class="las la-user-alt"></span>
                            <small>Designer</small>
                        </a>
                    </li>                    
                    <li>
                       <a href="projects.php">
                            <span class="las la-clipboard-list"></span>
                            <small>Projects</small>
                        </a>
                    </li>                    

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>                    
                    
                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/3.jpeg)"></div>
                        <a href="?logout=true">
                            <span class="las la-power-off"></span>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2>107,200</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small>User activity this month</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width: 60%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>340,230</h2>
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small>Page views</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>$653,200</h2>
                            <span class="las la-shopping-cart"></span>
                        </div>
                        <div class="card-progress">
                            <small>Monthly revenue growth</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2>47,500</h2>
                            <span class="las la-envelope"></span>
                        </div>
                        <div class="card-progress">
                            <small>New E-mails received</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text">
                    <h1>Welcome Admin</h1>
                </div>
                <section class="math">
                    <form method="POST" action=""> 
                        <h2>Form</h2>                   
                        <label>Value</label>
                        <div class="input-group">                            
                        <input type="number" class="form-control" id="harga-satuan" name="nama" placeholder="Enter Value" autocomplete="off" required>
                        </div>                                
                        <label>Value</label>
                        <div class="input-group">                            
                        <input type="number" class="form-control" id="harga-satuan" name="nama" placeholder="Enter Value" autocomplete="off" required>
                        </div>                                
                        <label>Package</label>
                        <select class="form-select" aria-label="Default select example" name="role">
                            <option value="basic">Basic</option>
                            <option value="advanced">Advanced</option>
                            <option value="premium">Premium</option>
                        </select>

                        <div class="">
                            <button type="submit" class="btn btn-primary px-4 float-end" name="submit" Value="submit">Submit</button>
                        </div>
                    </form>
            </section>
            </div>
            
        </main>
        
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>
</html>