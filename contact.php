




<!-- header -->
<?php include "include/head.php"; ?>

<body>
    <!-- navigation -->
 <?php include "include/nav.php"; ?>
    <!-- nav end  -->
    

    <main>
      <section class="contact-n">
        <div class="content-n">
           <h2>Contact Us</h2>
           <p>Feel free to reach out to us by phone, email or write us a message. We are excited and ready to help you plan your perfect sailing adventure!</p>
        </div>
        <div class="container-n">
            <div class="contactInfo">

                <div class="box">
                  <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                  <div class="text-n">
                      <h3>Phone</h3>
                      <p>+351 91345 77 32</p>
                  </div>
                </div>

                <div class="box">
                  <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                  <div class="text-n">
                      <h3>Email</h3>
                      <p>sam.hurst2@outlook.com</p>
                  </div>
                </div>

                <div class="box">
                  <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                  <div class="text-n">
                      <h3>Address</h3>
                      <p>1350-352 Lisbon<br>Doca de Alcântara<br>Lisbon International Sailing Club</p>
                  </div>
              </div>

                <div class="box">
                  <div class="text-n">
                    <iframe class="contactMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3113.7197861754935!2d-9.170888410541682!3d38.70128045927694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1935935940d533%3A0xe9ce43f0a9a48116!2sLisbon%20International%20Sailing%20Club%20-%20Gate%20%232!5e0!3m2!1sen!2spt!4v1654080643395!5m2!1sen!2spt" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>

            </div>

            <!-- Contacat Form sending email -->
            
            <div class="contactForm">
                <form action="contact_message.php" method="post">
                  <h2>Send Us a Message</h2>
                  <div class="inputBox">
                      <input type="text" name="contact_name" required="required">
                      <span>Full Name</span> 
                  </div>
                  <div class="inputBox">
                      <input type="email" name="contact_email" required="required">
                      <span>Email</span> 
                  </div>
                  <div class="inputBox">
                    <textarea type="text" name="body" required="required"></textarea>
                    <span>Type your Message.....</span>
                  </div>
                  <div class="inputBox">
                    <input type="submit" name="submit" value="submit"> 
                  </div>
                </form>
            </div>

        </div>
      </section> 
    </main>


      <script src="main.js"> </script>

</body>
</html>