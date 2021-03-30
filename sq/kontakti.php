<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ES Engineering</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


</head>

<body>

<?php include 'header.php'?>

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
      <div class="container" data-aos="fade-up"">

    <div class=" section-title" style="margin-top: 20px;">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Adresa</h3>
                <p>Kosovë, Fushë Kosovë - 12000</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email</h3>
                <p>info@esengineering-ks.com<br>info@esengineering-ks.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3> Kontakti</h3>
                <p>+383 (0) 49 213 - 345<br>+383 (0) 49 213 - 365</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> -->
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" id="message" style="height: 141px;" placeholder="Message" required></textarea>
            </div>
            <!-- <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div> -->
            <div class="text-center"><button type="submit" class="submitform">Send Message</button></div>
          <!-- </form> -->
        </div>

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  

 <?php include 'footer.php'?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

  <script  src="https://cdn.jsdelivr.net/npm/sweetalert2@10"> </script>
	<script>
		
		
		$(document).ready(function() {
			$(".submitform").click(function() {

				



				var nm1 = $("#name").val();
				var mmail = $("#email").val();
				var mmessage = $("#message").val();
        var subject1 = $("#subject").val();

				if (nm1.length === 0 || mmail.length === 0 || mmessage.length === 0 || subject.length === 0) {
					Swal.fire("Oops!","Please fill all the details","error");
				} else {
                     
				
				$.ajax({
					type: 'POST',
					url: "sentMessage.php",
					data: { 
						case: 1,
						name: nm1,
						email: mmail,
						message:  mmessage,
            subject1: subject
					},
					
					success: function(result) {
						if (result == 1) {
							Swal.fire('Good Job!','Email has been sent successfully!','success')
						} else { 
							swal("Oops!", "Something went wrong!", "error");
						}
						// $(".form-control").html(result);
						// if (result =='1' ) {
						// 	alert (result);
						// } else { 
						// 	alert ('error');
						// } 
												
					}
				});
			}
			});
		});
	</script>

</body>

</html>