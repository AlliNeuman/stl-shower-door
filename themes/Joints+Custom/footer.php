<?php
/**
* The template for displaying the footer.
*
* Comtains closing divs for header.php.
*
* For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
*/
?>

<footer class="footer" role="contentinfo">

  <div class="box-container">

    <!-- <div class="small-12 medium-12 large-12 cell">
    <nav role="navigation">
    <?php joints_footer_links(); ?>
  </nav>
</div> -->
<div class="flex-3-col">
  <div class="image-container">
    <a href="<?php echo home_url(); ?>">
      <img id="logo" src="http://stlshowerdoor.local/wp-content/uploads/2019/05/Copy-of-Copy-of-Copy-of-Copy-of-STL.png" alt="STL SHOWER DOOR">
    </a>
  </div>
</div>

<div class="footer-menu full-width">

  <div class="flex-3-col">
    <ul class="nav-menu">
      <li class="nav-item">
        <span class="head">Company</span>
        <ul class="sub-menu">
          <li>
            <a href="http://stlshowerdoor.local/about/">
              About
            </a>
          </li>

          <li>
            <a href="http://stlshowerdoor.local/contact/">
              Contact
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="flex-3-col">
    <ul class="nav-menu">
      <li class="nav-item">
        <span class="head">Services</span>
        <ul class="sub-menu">
          <li>
            <a href="http://stlshowerdoor.local/shower-doors/">Shower Doors</a>
          </li>
          <li>
            <a href="http://stlshowerdoor.local/custom-mirrors-glass/">Custom Mirrors & Glass</a>
          </li>

        </ul>
      </li>
    </ul>
  </div>
</div>

</div> <!-- end .box-container -->
<div class="full-width footer">
  <ul class="footer-info">
  <li class="source-org copyright">&copy; <?php echo date('Y'); ?> St Louis Shower Door</li>
  <li>314-220-9999</li>
  <li>Serving St. Louis, St. Charles, and Metro East Illinois</li>
  </ul>
</div>

</footer> <!-- end .footer -->

</div>  <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->

<?php wp_footer(); ?>

</body>

</html> <!-- end page -->
