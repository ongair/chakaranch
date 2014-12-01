<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chaka Ranch | <?php echo h($title); ?></title>  
    <link rel="stylesheet" href="assets/stylesheets/owl.carousel.css" />
    <link rel="stylesheet" href="assets/stylesheets/owl.transitions.css" />
    <link rel="stylesheet" href="assets/stylesheets/owl.theme.css" />
    <link rel="stylesheet" href="assets/stylesheets/style.css" />
  </head>
  
  <body class="<?php echo $active; ?>">
    <header>
      <section>
        <div class="brand">
          <a href="#">
            <img src="assets/images/logo.png" alt="Chaka Ranch">
          </a>
        </div>
        <div class="social">
          <ul>
            <li><a href="" class="facebook"></a></li>
            <li><a href="" class="twitter"></a></li>
            <li><a href="" class="instagram"></a></li>
          </ul>
        </div>
      </section>
    </header>

    <div class="nav">
      <section>
        <ul>
          <?php if ($active == 'home') { ?>
            <li class="active"><a href="#">Home</a></li>
          <?php } else { ?>
            <li class=""><a class="" href="<?php echo url_for('/'); ?>">Home</a></li>
          <?php } ?>
          

          <li><a class="">Rides</a></li>
          <li><a class="">Activities</a></li>
          <li><a class="">Gallery</a></li>

          <?php if ($active == 'contact') { ?>
            <li class="active"><a class="#">Contact Us</a></li>
          <?php } else { ?>
            <li><a href="<?php echo url_for('contact'); ?>">Contact Us</a></li>
          <?php } ?>

        </ul>
      </section>
    </div>

    <div role="main">
      <?php echo $content;?>
    </div>

    <footer>
      <div class="information">
        <section>      
          <div class="opening">
            <h6>CHAKA RANCH LEISURE PARK</h6>
            <p>An exciting new adrenaline filled getaway on the slopes of Mount Kenya</p>
            <p>Entry Fee:- Children 100, Adults 200<br />
            <!-- Open Saturdays, Sundays &amp; Public Holidays <em>8AM - 6PM</em></br /> -->
            Open Daily (December 2014)
            <!-- Weekdays:- Groups only, minimum 15pax by special arrangement.<br /> -->
            For enquiry write to <a href="mailto:info@chakaranch.com">info@chakaranch.com</a></p>
          </div>
          <div class="contacts">
            <ul>
              <li>Tel: <tel>0738600046 / 0719242897</tel></li>
              <li><a href="https://www.facebook.com/chaka.ranch">Facebook</a></li>
              <li><a href="https://twitter.com/chakaranch">Twitter</a></li>
              <li><a href="javascript:void(0)">YouTube</a></li>
              <li><a href="javascript:void(0)">Instagram</a></li>
            </ul>
          </div>      
          <div class="bike">
          </div>
        </section>
      </div>
      <div class="copyright">
        <section>
          <article><p>Copyright &copy; 2014. Chaka Ranch. All rights reserved</p></article>
        </section>
      </div>      
    </footer>
  </body>
 </html>