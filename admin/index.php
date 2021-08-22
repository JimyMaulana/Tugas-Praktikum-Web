
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!-- My Css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body>

      <div class="navbar-fixed">
        <nav class="purple darken-3">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo">STMIK WICIDA</a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="../">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#about">About Us</a></li>
                <li><a href="#kerjasama">Kerja Sama</a></li>
                <li><a href="#prodi">Program Studi</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>


      <!-- Sidenav -->
      <ul class="sidenav" id="mobile-demo">
        <li><a href="#about">About Us</a></li>
        <li><a href="#kerjasama">Kerja Sama</a></li>
        <li><a href="#prodi">Program Studi</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/Gambar/Cisco.jpeg" width="500"> 
            <div class="caption center-align">
              <h3>Center Of Excellence!</h3>
              <h5 class="light grey-text text-lighten-3">Menjadi Perguruan Tinggi yang Unggul di Bidang TIK Berbasis Moral dan Enterpreneur</h5>
            </div>
          </li>
          <li>
            <img src="img/Gambar/6282156354744_status_5337bd726a5247ceb4a2a6a537f4940b.jpg" width="500"> 
            <div class="caption center-align">
              <h3>Center Of Excellence!</h3>
              <h5 class="light grey-text text-lighten-3">Menjadi Perguruan Tinggi yang Unggul di Bidang TIK Berbasis Moral dan Enterpreneur</h5>
            </div>
          </li>
          <li>
            <img src="img/Gambar/6281331062262_status_1e344d889a2c484a8cecfed4e40a4eb3.jpg" width="500"> 
            <div class="caption center-align">
              <h3>Center Of Excellence!</h3>
              <h5 class="light grey-text text-lighten-3">Menjadi Perguruan Tinggi yang Unggul di Bidang TIK Berbasis Moral dan Enterpreneur</h5>
            </div>
          </li>
        </ul>
      </div>
        
        
      <div class="container">
        <div class="row">
          <h3 class="center light grey-text text-darken-3">DATA PESAN</h3>
          <table class="highlight">
            <thead>
              <tr>
                <th>No. </th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phones</th>
                <th>Messege</th>
              </tr>
            </thead>

            <tbody>
              <?php
                include("../koneksi.php");
                $no=0;
                $q=mysqli_query($mysqli,"SELECT * FROM pesan");
                while($r= mysqli_fetch_array($q))
                {
                  $no++;
                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $r['nama'];?></td>
                    <td><?php echo $r['email'];?></td>
                    <td><?php echo $r['no_telp'];?></td>
                    <td><?php echo $r['pesan'];?></td>
                  </tr>
                  <?php
                }
              ?>
            </tbody>

          </table>
        </div>
      </div>


      <!-- AboutUs -->
      <section id="about" class="about scrollspy">
        <div class="container">
          <div class="row">
            <h3 class="center light grey-text text-darken-3">ABOUT US</h3>
            <div class="col m6 light">
              <h5>We Are Wicidians</h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <div class="col m6 light">
              <h5>Jumlah Mahasiswa Program Studi</h5>
              <p>TEKNIK INFORMATIKA</p>
              <div class="progress">
                <div class="determinate blue" style="width:80%"></div>
              </div>
              
              <p>SISTEM INFORMASI</p>
                <div class="progress">
                  <div class="determinate yellow" style="width:70%"></div>
                </div>

              <p>MANAJEMEN INFORMATIKA</p>
                <div class="progress">
                  <div class="determinate red" style="width:60%"></div>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir About Us -->

      <!-- Parallax -->
      <div id="kerjasama" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/Gambar/kampus.jpg"></div>
          <div class="container clients">
            <h3 class="center light white-text">Kerjasama</h3>
            <div class="row">
              <div class="col m4 center">
                <img src="img/Gambar/Cisco.jpeg">
              </div>

              <div class="col m4 center">
                <img src="img/Gambar/Indosat.jpeg">
              </div>

              <div class="col m4 center">
                <img src="img/Gambar/Wifi.jpeg">
              </div>
            </div>
          </div>
        </div>
      <!-- Akhir Parallax -->


      <!-- Program Studi -->
      <section id="prodi" class="prodi grey lighten-3 scrollspy">
        <div class="container">
          <div class="row">
            <h3 class="light center grey-text text-darken-3">PROGRAM STUDI</h3>
            <div class="col m4 s12">
              <div class="card-panel center">
                <h5 class="light blue-text">TEKNIK INFORMATIKA</h5>
                <p>
                  Menghasilkan sumber daya manusia yang handal dan tangguh, khususnya di bidang komputer yang bermoral Pancasila, berwawasan dan berkemampuan IPTEK dalam bidang mendukung pembangunan Nasional pada umumnya, memajukan masyarakat dan budaya bangsa.
                </p>
              </div>
            </div>
            <div class="col m4 s12">
              <div class="card-panel center">
                <h5 class="light yellow-text">SISTEM INFORMASI</h5>
                <p>
                  Penyelenggara pendidikan di bidang sistem Informasi yang menghasilkan sumber daya mandiri, professional sesuai dengan perkembangan IPTEK di era global.
                </p>
              </div>
            </div>
            <div class="col m4 s12">
              <div class="card-panel center">
                <h5 class="light red-text">MANAJEMEN INFORMATIKA</h5>
                <p>
                  Penyelenggara pendidikan professional pendidikan professional untuk menghasilakan lulusan yang memiliki keunggulan kmpetitif dalam dunia kerja di bidang teknologi informasi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir Program Studi -->


      <!-- Gallery -->
        <section id="gallery" class="gallery scrollspy">
          <div class="container">
            <h3 class="light center grey-text text-darken-3">GALLERY</h3>
            <div class="row">
              <div class="col m3 s12">
                <img src="img/Gambar/6282156354744_status_1e723d259a72448a98b7f3d01c6e2926.jpg" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                <img src="img/Gambar/6282156354744_status_23a7af7bd412401f84c6e92cbb682d3a.jpg" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                <img src="img/Gambar/6285347579080_status_109178b0348f407c9e729c0469ba63b5.jpg" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                <img src="img/Gambar/POSTER WICIDA (2).jpeg" class="responsive-img materialboxed">
              </div>
            </div>
            <div class="row">
              <div class="col m3 s12">
                <img src="img/Gambar/6282156354744_status_1e723d259a72448a98b7f3d01c6e2926.jpg" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                <img src="img/Gambar/6282156354744_status_23a7af7bd412401f84c6e92cbb682d3a.jpg" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                <img src="img/Gambar/6285347579080_status_109178b0348f407c9e729c0469ba63b5.jpg" class="responsive-img materialboxed">
              </div>
              <div class="col m3 s12">
                <img src="img/Gambar/POSTER WICIDA (2).jpeg" class="responsive-img materialboxed">
              </div>
            </div>
          </div>
        </section>
      <!-- Akhir Gallery -->


      <!-- Contact Us -->
      <section id="contact" class=" contact grey lighten-3 scrollspy">
        <div class="container">
          <h3 class="light center grey-text text-darken-3">CONTACT US</h3>
          <div class="row">
            <div class="col m5 s12">
              <div class="card-panel purple darken-3 center white-text">
                <i class="material-icons">email</i>
                <h5>EMAIL</h5>
                <p>Anda dapat menghubungi kampus kami melalui email: <br>wicida@wicida.ac.id</p>
              </div>
              <ul class="collection with-header">
                <li class="collection-header"><h4>Kampus WICIDA</h4></li>
                <li class="collection-item">Jl.M.Yamin No.25</li>
                <li class="collection-item">Samarinda, Kalimantan Timur</li>
                <li class="collection-item">Telp. 0541-736071</li>
                <li class="collection-item">Fax 0541-734468</li>
              </ul>
            </div>
            <div class="col m7 s12">
              <form method="post" action="input.php">
              <div class="card-panel">
                <h5>Please fill out this form</h5>
                <div class="input-field">
                  <input id="name" type="text" class="validate" required="required" name="name">
                  <label for="Name">Name</label>
                </div>
                <div class="input-field">
                  <input id="email" type="text" class="validate" required="required" name="email">
                  <label for="Email">Email</label>
                  <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                </div>
                <div class="input-field">
                  <input id="phone" type="text" class="validate" required="required" name="phone">
                  <label for="Phone">Phone</label>
                </div>
                <div class="input-field">
                  <textarea id="message" type="text" class="materialize-textarea" required="required" name="messege"></textarea>
                  <label for="Message">Message</label>
                </div>
                <button type="submit" class="btn purple darken-3">Kirim</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Akhir Contact Us -->


      <!-- Footer -->
      <footer class="purple darken-3 center white-text">
        <p class="flow-text">STMIK Widya Cipta Dharma. Copyright@2020</p>
      </footer>
      <!-- Akhir Footer -->



      <script type="text/javascript" src="js/materialize.min.js"></script>

      <script>

      const sidenav=document.querySelectorAll('.sidenav');
      M.Sidenav.init(sidenav);

      const slider=document.querySelectorAll('.slider');
      M.Slider.init(slider);

      const parallax=document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

      const materialboxed=document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialboxed);

      const scroll=document.querySelectorAll('.scrollspy');
      M.ScrollSpy.init(scroll,{
        scrollOffset:50
      });

      </script>



    </body>
  </html>