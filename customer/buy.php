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
    <section class="buy">
      <div class="row">                              
              <div class="col-md-7 pe-1">
                  <div class="form-left h-100 py-5 px-5">
                    <h1>Buying Form</h1>
                    <br>
                    <form class="row g-4">
                      <div class="col-12">
                        <label for="name">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="nama" placeholder="Enter name" required>
                      </div>                              
                      <div class="col-12">
                        <label for="phone">Phone number<span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter phone number" required>
                      </div>
                      <div class="col-12">
                        <label for="phone">Email<span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="email" placeholder="Enter email" required>
                      </div>
                      <div class="col-12">
                        <label for="product">Product<span class="text-danger">*</span></label>
                        <select class="form-control" id="product">
                          <option>Select a product</option>
                          <option>Basic</option>
                          <option>Advanced</option>
                          <option>Premium</option>
                        </select>
                      </div>                            
                      <div class="col-12">
                        <label for="address">Address<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="address" rows="2" placeholder="Enter address" required></textarea>
                      </div>
                      <input type="hidden" value="pending" id="status">
                      <button type="submit" class="btn btn-primary px-2" onclick="tambahData()">Send</button>
                    </form>
                  </div>
              </div>
                <div class="col-md-4 d-md-block">
                  <div class="mid">
                    <img src="gambar/buy.svg" width="450px">
                  </div>
                </div>
        </div>                

  </section>
  </div>

  <script>
		// Mendapatkan referensi ke elemen form
const form = document.querySelector('form');

// Mendapatkan referensi ke elemen tabel
const tabel = document.querySelector('#tabel');

// Mendapatkan data dari localStorage (jika tersedia) atau menginisialisasi data kosong
let data = JSON.parse(localStorage.getItem('data')) || [];

// Fungsi untuk menambahkan data ke dalam tabel dan localStorage
function tambahData() {
  const nama = form.elements.nama.value;
  const phone = form.elements.phone.value;
  const email = form.elements.email.value;
  const product = form.elements.product.value;
  const address = form.elements.address.value;
  let status = form.elements.status.value;


  // Mengecek apakah data yang ingin ditambahkan sudah ada di dalam array `data`
  const isDuplicate = data.some((item) => {
    return item.nama === nama && item.phone === phone && item.email === email && item.product === product && item.address === address && item.status === status;
  });

  // Jika data sudah ada, tampilkan pesan kesalahan dan keluar dari fungsi
  if (isDuplicate) {
  
    return;
  }

  const newData = {
    nama: nama,
    phone: phone,
    email: email,
    product: product,
    address: address,
    status: status

  };

  data.push(newData);
  sessionStorage.setItem('data', JSON.stringify(data));
  alert("berhasil melakukan pembelian")
}

		</script>
</body>
</html>