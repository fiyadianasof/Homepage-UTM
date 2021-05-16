<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    .fakeimg {
        height: 200px;
        background:#0033cc;
      }
      * {box-sizing:border-box}
    body {font-family: sans-serif;}
    .mySlides {display:none}
    
    /* Slideshow container */
    .slideshow-container {
      max-width: 1000px;
      position: relative;
      margin: auto;
    }
    
    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    
    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    
    /* The dots/bullets/indicators */
    .dot {
      height: 13px;
      width: 13px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }
    
    .active {
      background-color: #0033cc;
    }
    
    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 3s;
      animation-name: fade;
      animation-duration: 3s;
    }
    
    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }
    
    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {font-size: 11px}
    }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="">
          <img src="logo1.png" width="50px" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="sejarah.php">Sejarah</a>
          <a class="nav-link" href="visimisi.php">Visi Misi</a>
          <a class="nav-link" href="struktur.php">Struktur Organisasi</a>
          <a class="nav-link" href="fakultas.php">Fakultas</a>
          <a class="nav-link" href="ukm.php">UKM</a>
        </div>
      </div>
    </nav>
    <body>
     
      <div class="jumbotron text-center" style="margin-bottom:0">
      
      <div class="slideshow-container">
      
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="soal 17.jpg" style="width:100%">
        <div class="text">Pelantikan Rektor</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="soal 16.jpeg" style="width:100%">
        <div class="text">Upacara Bendera</div>
      </div>
      
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="soal 15.jpg" style="width:100%">
        <div class="text">Rapat Kerja</div>
      </div>
      
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>
      
      <script>
      var slideIndex = 0;
      showSlides();
      
      function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex> slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 3 seconds
      }
      </script>
      </div>
      <div class="container" style="margin-top:30px">
          <div class="row">
            <div class="col-sm-4">
              <h2>About Me</h2>
              <h5>Photo of University:</h5>
              <img src="soal 14.jpg">
              <p>Universitas Trunojoyo Madura adalah Perguruan Tinggi Negeri yang terletak di Kabupaten Bangkalan, Provinsi Jawa Timur, Indonesia. 
                  Universitas Trunojoyo Madura menjadi Perguruan Tinggi Negeri berdasarkan Keputusan Presiden tanggal 5 Juli 2001.</p>
              <h3>Lainnya</h3>
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sejarah_utm.html">sejarah</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
              <hr class="d-sm-none">
            </div>
            <div class="col-sm-8">
              <h2>KAMPUS MERDEKA</h2>
              <h5>Deskripsi,16 Mei 2021</h5>
              <img src="kampus merdeka.jpg" style="width:500px;height:400px;">
              <p>Some text..</p>
              <p> Rektor UTM, Muhammad Syarif menjelaskan terdapat serangkaian program yang harus dijalankan, seperti Kuliah Kerja Nyata Tematik (KKNT), pertukaran pelajar, 
                  mengajar di sekolah, kewirausahaan, dan masih banyak lagi. 
                  Dari beberapa program tersebut, Syarif mengatakan bahwa tujuannya untuk memberikan bekal kepada calon lulusan, baik potensi hardskill maupun softskill. 
  
                  ”Untuk mendesain kurikulum kampus merdeka bukanlah hal yang mudah, karena harus menentukan lokasi magang, persiapan MOU, hingga penilaiannya,” terangnya. 
                  
                  Program kampus merdeka ini tidak jauh berbeda dengan kebijakan saat ini dan tidak mempengaruhi reakreditasi kampus. 
                  Hal ini dijelaskan oleh ketua Lembaga pengembangan pembelajaran dan penjaminan mutu pendidikan (LP3MP), Kurniyati Indahsari.  Bahwasannya perbedaan kampus merdeka dengan yang lama itu hanya pada proses pembelajarannya saja..</p>
              <br>
              <h2>WISUDA</h2>
              <h5>Mei 16 2021</h5>
              <img src="wisuda.jpg">
              
              <p>UTM tidak sekedar dituntut untuk dapat mencetak lulusan, namun lulusan-lulusan berkualitas yang siap bersaing di kehidupan masyarakat, termasuk di dalamnya di dunia kerja. Upaya tersebut tidak mudah karena cakupan bekal calon lulusan bukan hanya pada kemampuan akademik (hardskill), berupa kompetensi lulusan yang sesuai di bidangnya, namun  juga  kemampuan  hidup  lainnya  (life/softskills).  Terkait  dengan  persaingan  di dunia  kerja,  lulusan  UTM  
                diharapkan  memiliki  kemampuan  berwirausaha  untuk  bisa menciptakan  lapangan kerja (enterpreneurship) dan/atau sukses  bersaing di dunia kerja (intrapreneurship).</p>
            </div>
          </div>
        </div>
        
        <div class="jumbotron text-center" style="margin-bottom:0">
          <p>Footer</p>
          <p>
            <span>&copy; UNIVERSITAS TRUNOJOYO MADURA 2021 All right reserved. 
          </p>
        </div>
      </div>
    <footer class="text-white bg-dark mt-4">
      <div class="container">
        <div class="row">
          <div class="col text-center mt-1">
            <p>Copyright@2021</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>