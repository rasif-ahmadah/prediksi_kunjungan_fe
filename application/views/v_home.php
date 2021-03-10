<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img//amazingblitar.svg">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Sistem Prediksi Kunjungan Wisata dan Hotel Kabupaten Blitar
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <style>
    .presentation-titlenew {
  font-size: 2em !important;
  font-weight: 700;
  margin: 0;
  color: #FFFFFF;
  background: #fbf8ec;
  background: -moz-linear-gradient(top, #FFFFFF 35%, #4e6773 100%);
  background: -webkit-linear-gradient(top, #FFFFFF 35%, #4e6773 100%);
  background: -ms-linear-gradient(top, #FFFFFF 35%, #4e6773 100%);
  background: linear-gradient(to bottom, #FFFFFF 35%, #4e6773 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
</style>

</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href='' rel="tooltip" title="" data-placement="bottom" target="_blank">
          Dinas Pariwisata, Kebudayaan, Pemuda, dan Olahraga Kabupaten Blitar
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/amazingblitar" target="_blank">
              <i class="fa fa-twitter"></i>
              <p class="d-lg-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/AmazingBlitar" target="_blank">
              <i class="fa fa-facebook-square"></i>
              <p class="d-lg-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/amazingblitar_landofkings" target="_blank">
              <i class="fa fa-instagram"></i>
              <p class="d-lg-none">Instagram</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Visit our Website" data-placement="bottom" href="http://amazingblitar.id/" target="_blank">
              <i class="fa fa-globe"></i>
              <p class="d-lg-none">Website</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://amazingblitar.id/" target="_blank" class="btn btn-danger btn-round">About us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Landing Page -->
  <div class="page-header section-dark" style="background-image: url('./assets/img/kebunteh.jpg')">
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h2 class="presentation-titlenew">Sistem Prediksi Kunjungan Wisata dan Hotel Kabupaten Blitar</h2>
        </div>
      </div>
    </div>
    <div class="moving-clouds" style="background-image: url('./assets/img/clouds.png'); "></div>
    <h6 class="category category-absolute">Designed and coded by Creative Tim
    </h6>
  </div>
  <!-- End Landing Page -->

  <!-- Menu -->
  <div class="main">
    <div class="section section-buttons" id="menu">
      <div class="container">
        <div class="title">
          <h2>Let's Make Some Predictions</h2>
        </div>
      </div>
      <div class="container" id="menu-dropdown">
        <br/>
        <div class="row">
          <div class="col-md-6">
            <nav class="navbar navbar-expand-lg bg-primary">
              <a class="navbar-brand" href="#inputs">Kunjungan Wisata</a>
            </nav>
          </div>
          <div class="col-md-6">
            <nav class="navbar navbar-expand-lg bg-danger">
              <a class="navbar-brand" href="#inputs">Kunjungan Hotel</a>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Menu -->

    <!-- Inputs -->
    <div class="main" id="inputs">
    <div class="section section-buttons">
      <div class="container">
      <form>
        <form>
          <div class="form-group">
            <label for="data_file">Masukkan data</label>
            <div class="custom-file">
              <input type="file" name="data_file" class="custom-file-input" id="customFile" enctype="multipart/form-data">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
          <div class="form-group">
            <label for="jumlah_bulan">Jumlah bulan</label>
            <input type="text" name="jumlah_bulan" class="form-control" id="jumlah-bulan" placeholder="ex : 12">
          </div>
          <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" class="form-control" id="tahun" placeholder="ex : 2021">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      <form>
    </div>
    </div>
    <!-- End Inputs -->

    <!-- Result Page -->
    <div class='main' id="inputs">  
      <div class="section section-buttons">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <h2 class="title">Prediction Result</h2>
              <br/>
              <p class="description" id="result">
              
              </p>
              <br/>
              <a href="<?php echo base_url() . 'home';?>" class="btn btn-danger btn-round">Back</a>
            </div>
          </div>
        </div>
      </div> 
    </div>

    <!--footer-->
    <div class="section">
      <div class="container text-center">
        <div class="row justify-content-md-center sharing-area text-center">
          <div class="text-center col-md-12 col-lg-8">
            <h3>Thank you for supporting us!</h3>
          </div>
          <div class="text-center col-md-12 col-lg-8">
            <a href="#pablo" class="btn btn-twitter-bg twitter-sharrre btn-round" rel="tooltip" title="Tweet!">
              <i class="fa fa-twitter"></i> Twitter
            </a>
            <a href="#pablo" class="btn btn-google-bg linkedin-sharrre btn-round" rel="tooltip" title="Share!">
              <i class="fa fa-google-plus"></i> Google
            </a>
            <a href="#pablo" class="btn btn-facebook-bg facebook-sharrre btn-round" rel="tooltip" title="Share!">
              <i class="fa fa-facebook-square"></i> Facebook
            </a>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-black  footer-white ">
      <div class="container">
        <div class="row">
          <div class="credits ml-auto">
            <span class="copyright">
              ©
              <script>
                document.write(new Date().getFullYear())
              </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
            </span>
          </div>
        </div>
      </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="./assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="./assets/js/plugins/moment.min.js"></script>
    <script src="./assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  
    <script>
      window.addEventListener("load", () => {
        const form = document.querySelector("form");
        form.addEventListener("submit", (e) => {
          e.preventDefault();
          let data = new FormData(form);
          console.log(data);
          axios({
            method:"post",
            url:"http://localhost:8000/",
            data: data,
          })
          .then((res) => {
            var result = (res.data);
            result.forEach(function(element){
              document.getElementById("result").innerHTML += "Bulan : " + element.bulan + "<br>Tahun : " + element.tahun +"<br>Hasil Prediksi : " + element.hasil +"<br><br>";  
            })
            //var hasil = document.getElementById("result");
            //hasil.innerHTML = JSON.stringify(res.data); 
          })
          .catch((err) => {
            throw err;
          });
        });
      }); 
    </script>

    <script>
      $(document).ready(function() {

        if ($("#datetimepicker").length != 0) {
          $('#datetimepicker').datetimepicker({
            icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-chevron-up",
              down: "fa fa-chevron-down",
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
              today: 'fa fa-screenshot',
              clear: 'fa fa-trash',
              close: 'fa fa-remove'
            }
          });
        }

        function scrollToDownload() {

          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }
      });
    </script>
    <script>
    // Add the following code if you want the name of the file appear on select
      $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });
    </script>
</body>

</html>
