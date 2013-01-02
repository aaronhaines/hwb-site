<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
      <footer>
        <div class="clearfix">
          <div style="float:left">
            <p>
              <span>Heritage Without Borders</span>, UCL Institute of Archaeology 31-34 Gordon Square, London WC1H 0PY Email: <a href="mailto:info@heritagewithoutborders.org">info@heritagewithoutborders.org</a>
            </p>
            <p>
              <span>Heritage Without Borders Community Interest Company</span> is registered in England and Wales and is limited by guarantee; company no. 7657603.
            </p>
          </div>
          <div style="float:right" class="clearfix">
            <img src="<?php bloginfo('template_directory'); ?>/img/unltd-logo.png" width="72" height="30" style="float:right" />
            <img src="<?php bloginfo('template_directory'); ?>/img/hfce-logo.png"  width="115" height="47" />
          </div>
        </div>
      </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>