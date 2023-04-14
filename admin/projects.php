<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Product</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>Admin</h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                <h4>Admin</h4>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="index.php">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="employee.php">
                            <span class="las la-user-alt"></span>
                            <small>Employee</small>
                        </a>
                    </li>                    
                    <li>
                       <a href="" class="active">
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
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                        <a href="../index.php">
                            <span class="las la-power-off"></span>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Projects</h1>
                <small>Home / Projects</small>
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
                        <h2>$ <span id="jumlah"></span></h2>                            
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


                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>Entries</span>
                            <select name="" id="">
                                <option value="">ID</option>
                            </select>                        
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <table width="100%" id="tabel">
                            <thead>
                                <tr>    
                                <th>Name</th>
                                    <th><span></span> NUMBER</th>
                                    <th><span></span> EMAIL</th>
                                    <th><span></span> PRODUCT</th>
                                    <th><span></span> ADDRESS</th>
                                    <th><span></span> STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                                                                                                                                        
                            </tbody>
                        </table>
                    </div>

                </div>
            
            </div>
            
        </main>
        
    </div>
    <!-- <script src="js/main.js"></script> -->
    <script>

// Mendapatkan referensi ke elemen form
const form = document.querySelector('form');

// Mendapatkan referensi ke elemen tabel
const tabel = document.querySelector('#tabel');

// Mendapatkan data dari sessionStorage (jika tersedia) atau menginisialisasi data kosong
let data = JSON.parse(sessionStorage.getItem('data')) || [];

// Fungsi untuk menampilkan data ke dalam tabel
function tampilkanData() {
  // Menghapus semua baris di tabel kecuali header
  while (tabel.rows.length > 1) {
    tabel.deleteRow(1);
  }

  // Menambahkan setiap data ke dalam tabel
  for (let i = 0; i < data.length; i++) {
    const row = tabel.insertRow();

    const namaCell = row.insertCell();
    namaCell.textContent = data[i].nama;

    const phoneCell = row.insertCell();
    phoneCell.textContent = data[i].phone;

    const emailCell = row.insertCell();
    emailCell.textContent = data[i].email;

    const productCell = row.insertCell();
    productCell.textContent = data[i].product;

    const addressCell = row.insertCell();
    addressCell.textContent = data[i].address;

    let statusCell = row.insertCell();
    statusCell.textContent = data[i].status;           
  
  }
}

// Menampilkan data pertama kali
tampilkanData();

		</script>
        <script src="js/main.js"></script>
</body>
</html>