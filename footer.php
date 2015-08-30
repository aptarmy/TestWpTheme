<footer>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-4'>
				<div class='widget'>
					<?php
						if (is_active_sidebar( 'footer-left' )) {
							dynamic_sidebar('footer-right');
						}
					?>
				</div>
			</div>
			<div class='col-md-4'>
				<div class='widget'>
					<?php
						if (is_active_sidebar( 'footer-middle' )) {
							dynamic_sidebar('footer-middle');
						}
					?>
				</div>
			</div>
			<div class='col-md-4'>
				<div class='widget'>
					<?php
						if (is_active_sidebar( 'footer-right' )) {
							dynamic_sidebar('footer-left');
						}
					?>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>