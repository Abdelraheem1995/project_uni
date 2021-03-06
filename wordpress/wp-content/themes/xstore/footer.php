<?php
$fd = etheme_get_option('footer_demo');
$fcolor = etheme_get_option('footer_color');
$copyrights_color = etheme_get_option('copyrights_color');
$custom_footer = etheme_get_custom_field('custom_footer');
$disable_prefooter = etheme_get_custom_field('disable_prefooter');
?>
<?php if( ( function_exists('is_checkout') && ! is_checkout() ) || ! function_exists('is_checkout') ):  ?>
	<?php if( ! $disable_prefooter && $custom_footer != 'without' && is_active_sidebar('prefooter') ): ?>
		<footer class="prefooter">
			<div class="container">
				<?php if(is_active_sidebar('prefooter')): ?>
					<?php dynamic_sidebar('prefooter'); ?>
				<?php endif; ?>
			</div>
		</footer>
	<?php endif; ?>

	<?php if($custom_footer != 'without' && ( ! empty( $custom_footer ) || is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4') )): ?>
		<footer class="footer text-color-<?php echo esc_attr($fcolor); ?>">
			<div class="container">
				<?php if(empty($custom_footer)): ?>
					<div class="row">
						<?php
						$footer_columns = (int) etheme_get_option('footer_columns');
						if( $footer_columns < 1 || $footer_columns > 4) $footer_columns = 4;
						$footer_widget_class = etheme_get_footer_widget_class($footer_columns);
						
						?>

						<h1 > X STORE</h1>
                       	<span> 	&copy; AABU</span>
                 <table>
                     <tr>
                    <td>
                     <ul  >

                     	<li style="float: left;  margin: 30px ;" ><a href="http://localhost/wordpress/"> home        </a> </li>
                     	<li  style="float: left;  margin:30px;"  ><a href=" http://localhost/wordpress/about-us/"> About us    </a> </li>
                     	<li  style="float: left;  margin:30px;"  ><a href=" http://localhost/wordpress/contact-us/"> Contact us  </a> </li>
                     	<li  style="float: left;  margin:30px;"  ><a href=" http://localhost/wordpress/shop/">  Shop       </a> </li>




                     </ul>
                     </td>
                   </tr>
                </table>
					</div>
				<?php elseif(!empty($custom_footer)): ?>
					<?php echo etheme_get_block($custom_footer); ?>
				<?php endif; ?>
			</div>
		</footer>
	<?php endif; ?>
<?php endif; ?>

<?php if( empty( $custom_footer ) && ( is_active_sidebar('footer-copyrights') || is_active_sidebar('footer-copyrights2') || $fd )): ?>
	<div class="footer-bottom text-color-<?php echo esc_attr($copyrights_color); ?>">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-6 footer-copyrights-right">
					<?php if(is_active_sidebar('footer-copyrights2')): ?>
						<?php dynamic_sidebar('footer-copyrights2'); ?>	
					<?php else: ?>
						<?php if($fd) etheme_footer_demo('footer-copyrights2'); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif ?>

</div> <!-- page wrapper -->
</div> <!-- template-content -->
<?php do_action('after_page_wrapper'); ?>
</div> <!-- template-container -->


<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */

wp_footer();
?>
</body>

</html>