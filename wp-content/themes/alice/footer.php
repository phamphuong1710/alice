 	</div>
	<footer class="footer" id="footer">
		<div class="footer_side">
			<div class="container">
				<?php 	
				if(is_active_sidebar('footer-sidebar')){
					dynamic_sidebar('footer-sidebar');
				}
				else{
					_e('No Sidebar');
				} ?>
				
			</div>
		</div>
		<div class="contact">
			<div class="container">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
				</ul>
				<p>2015 AliceMaid. Designed with <i class="fa fa-heart-o"></i> by haintheme</p>
			</div>	
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>