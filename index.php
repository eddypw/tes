<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "header.php" ?>    
    <style>
        /*  --------------------------------------------------------#content#-------------------------------------------------------- */
        /* grey #77787b  
        green #8cc752;*/
        section.sec-1{
            width: 100%;
            display: flex;
            align-items: center;
            min-height: calc(100vh - 190px);
            margin-top: 70px;
            padding: 140px 0px 70px;
        }
        section.sec-1::after{
            content: "";
            background-image: url('assets/img/large/image3.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            opacity: 0.5;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;   
        }
        .timer-content h1 {
            color:#8cc752;
            font-size: 50pt;
        }
        .timer-content h1{
            transition: opacity 1000ms;
        }
        .content section.sec-1 h5 {
            margin-bottom: 50px;
        }
        .custom-select.is-invalid, .form-control.is-invalid, .was-validated .custom-select:invalid, .was-validated .form-control:invalid {
            border-color: #838383;
        }
        input.form-control.form-control-warning.is-invalid {
            background-image: none;
        }
        p.mt-5 {
            font-weight: 600;
        }
        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 255, 17, 0.25);
        }
        .sec-1 h3 {
            padding-bottom: 50px;
            color: #77787b;
        }
        .sec-1 h5 , .sec-1 p {
            color: #77787b;
        }

        /*  --------------------------------------------------------#end content#-------------------------------------------------------- */

        /*  --------------------------------------------------------#responsive#-------------------------------------------------------- */
        @media only screen and (max-width: 600px) {
            section.sec-1 {
                padding: 70px 0px;
                margin-top: 0px;
            }
            section.sec-1::after{
                background-image: url('assets/img/large/image2.jpg');
            }
            
        }
        /* --------------------------------------------------------#end responsive#-------------------------------------------------------- */

    </style>
</head>
<body>

<?php include "menu.php" ?>  
<section class="loader" id="bg">
    <div class="sbl-rect-spin-fill"></div>
</section>
<section class="sec-1" >
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-5 mx-auto text-center">
                <h3>Menuju peluncuran My Drew 2019</h3>
                <div class="row">
                    <div class="col-3">
                        <div class="timer-content">
                            <h1 id="hari">01</h1>
                            <h5>Hari</h5>
                        </div>
                        
                    </div>
                    <div class="col-3">
                        <div class="timer-content">
                            <h1 id="jam">01</h1>
                        </div>
                        <h5>Jam</h5>
                    </div>
                    <div class="col-3">
                        <div class="timer-content">
                            <h1 id="menit">01</h1>
                        </div>
                        <h5>Menit</h5>
                    </div>
                    <div class="col-3">
                        <div class="timer-content">
                            <h1 id="detik">01</h1>
                        </div>
                        <h5>Detik</h5>
                    </div>
                </div>
                <p class="mt-5">Kirim notifikasi saat peluncuran</p>
                <div class="input-group mb-3 has-secondary">
                    <input name="email" type="email" class="form-control form-control-secondary" placeholder="Alamat Email">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php" ?>   
<script>
$(document).ready(function () {
        // PreLoader
        //$('#bg').css('opacity', 0);
        setTimeout(function(){
            $('#bg').css('opacity', 0);
            $('#bg').hide();
        }, 1500);	
    });
</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("2019-10-30T19:30:00.000Z").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var hari = Math.floor(distance / (1000 * 60 * 60 * 24));
  if(hari <= 9){
    hari = ("0" + hari).slice(-2);
  }
  var jam = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  if(jam <= 9){
      jam = ("0" + jam).slice(-2);
  }
  var menit = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  if(menit <= 9){
    menit = ("0" + menit).slice(-2);
  }
  var detik = Math.floor((distance % (1000 * 60)) / 1000);
  if(detik <= 9){
    detik = ("0" + detik).slice(-2);
  }

  // Display the result in the element with id
  document.getElementById("hari").innerHTML = hari;
  document.getElementById("jam").innerHTML = jam;
  document.getElementById("menit").innerHTML = menit;
  document.getElementById("detik").innerHTML = detik;
  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    // document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

</script>

</body>


