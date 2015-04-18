<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wordstrap
 */
?>

	</div><!-- #content -->
	</div>
    
    <footer id="footer" class="content-info" role="contentinfo">
    <div class="container">
		<div class="row">
		      <?php dynamic_sidebar('sidebar-footer'); ?>
			  <p><a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.de">
			  	<img alt="Creative Commons Lizenzvertrag" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" />
			  </a>&nbsp;&nbsp;y8x.cc<a class="pull-right" href="impressum/">Impressum</a></p>
		</div>
    </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>