<?php
/**
 * Default Footer Template
 *
 */
?>

<footer class="footer mt-auto bg-light border-top" role="contentinfo">
  <div class="container py-3 py-sm-4">
   
    
    
    <!-- <nav class="nav-footer-wrap" role="navigation">
      <?php h5bs_footer_nav(); ?>
    </nav> -->
    <div class="row">
    <div class="col-12 col-md-4 d-flex flex-column ">
      <h6 class="mt-3">Quick links</h6>
      <a href="home">Home</a>
      <a href="about-us">About us</a>
      <a href="contact">Contact</a>
    </div>
    <div class="col-12 col-md-4 d-flex flex-column ">
    <h6 class="mt-3">Other info</h6>
      <a href="#0">Privacy policy</a>
      <a href="#0">Shipping policy</a>
      <a href="#0">Returns and refunds</a>
    </div>
    <div class="col-12 col-md-4 d-flex flex-column ">
    <h6 class="mt-3">Our location</h6>
     <address>
      <strong><?php bloginfo( 'name' ); ?></strong><br>
      123 Main Street<br>
      Newtown, Newstate 45678<br>
      <a href="tel:+3216540987">(321) 654-0987</a>
     </address>
     
     
    </div>
    </div>
    </div>

    <p class="text-center mb-2">&copy; <?= date( 'Y' ); ?> <?= get_bloginfo( 'name' ); ?></p>
  
</footer>

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
