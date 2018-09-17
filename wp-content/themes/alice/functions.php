<?php 
	define('URL_THEME', get_stylesheet_directory());
	define('CORE',URL_THEME .'/core');
	require_once(CORE.'/init.php');
	if (!isset($content_width)) {
		$content_width=900;
	}
	if (!function_exists('setAlice')) {
		function setAlice()
		{
			load_theme_textdomain( 'alice' );
			add_theme_support('automatic-feed-links');
			add_theme_support('post-thumbnails');
			add_theme_support('title-tag');
			// add_theme_support('menus');
			add_theme_support('post-formats',
								[
									'image',
									'video',
									'gallery',
									'quote',
									'link'
								]);
			register_nav_menu ( 'primary-menu', __('Primary Menu', 'alice') );
			$slidebar=[
						'name'=> __('Main Sidebar','alice'),
						'id' => 'main-sidebar',
						'class' => 'main-sidebar',
						'before-title' => '<h3 class="title">',
						'after-title' =>'</h3>'
						];
			register_sidebar($slidebar);
			$sidebar_footer=[
						'name'=> __('Footer Sidebar','alice'),
						'id' => 'footer-sidebar',
						'class' => 'main-sidebar',
						'before-title' => '<h3 class="title">',
						'after-title' =>'</h3>'
						];
			register_sidebar($sidebar_footer);
		}
		add_action('init','setAlice');
	}
	if (! function_exists('alice_logo')) {
		function alice_logo()
		{?>
			<div class="logo">
				<img src="<?php echo get_template_directory_uri().'/image/logo.png'; ?>" alt="Logo">
			</div>
			
		<?php }
	}
	if ( ! function_exists( 'alice_menu' ) ) {
		  function alice_menu($slug) {
		    $menu = array(
		      'theme_location' => $slug,
		      'container' => 'nav',
		      'container_class' => $slug,
		    );
		    wp_nav_menu( $menu );
		 }
	}
	if (! function_exists('breadcrumbs')) {
		function breadcrumbs(){
			$home = get_bloginfo('url');
			// $title= the_title();
			if (is_home()) { ?>
				<li class="crumb-item"><a href="<?php echo $home ?>">Home</a></li>
				<li class="crumb-item">Blog</li>

				
			<?php }
			
				
				if (is_category()) {
					echo '<li class="crumb-item"><a href="'.$home.'">Home</a></li>';
					echo '<li class="crumb-item">'.the_category().'</li>';
				}
				if (is_single()) {
					echo '<li class="crumb-item"><a href="'.$home.'">Home</a></li>';
					echo '<li class="crumb-item">Blog</li>';?>
					<!-- // echo '<li class="crumb-item">'.the_category().'</li>'; -->
					<li class="crumb-item" aria-current="page"><?php echo the_title() ?></li>
					<?php

				}
				if (is_page()) {
	                    echo '<li class="crumb-item">'.the_title().'</li>';
	            }
	            if (is_tag()) {
	            	single_tag_title();
	            }
	        	if (is_day()) {
	        		echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';
	        	}
	        	if (is_month()) {
	        		echo"<li>Archive for "; the_time('F, Y'); echo'</li>';
	        	}
	        	if (is_year()) 
	        		{echo"<li>Archive for "; the_time('Y'); echo'</li>';
	        	}
	        	if (is_author()) {
	        		echo"<li>Author Archive"; echo'</li>';
	        	}
	        	if (isset($_GET['paged']) && !empty($_GET['paged'])) {
	        		echo "<li>Blog Archives"; echo'</li>';
	        	}
	        	if (is_search()) {
	        		echo"<li>Search Results"; echo'</li>';
	        	}
	        
        }
        	
	}
	if (!function_exists('alice_thumbnail')) {
		function alice_thumbnail($size){
			if ( has_post_thumbnail()||has_post_format('image')) {?>
				<figure class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></figure><?php
   			
			}
		}
	}
	if ( ! function_exists( 'entry_header' ) ) {
		function entry_header() {?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				  <?php the_title(); ?>
				</a>
			</h1><?php 
		}
	}
	if (!function_exists("meta")) {
		function meta(){
			if (is_home()) {
				echo '<div class="meta">';
					printf(__('<span class="author"><ion-icon name="person"></ion-icon> %1$s</span>','alice'),get_the_author());
					printf(__('<span class="date"><i class="fa fa-calendar-o"></i> %1$s</span>','alice'),get_the_date());
				echo '</div>';
			}
			elseif (is_single()){
				echo '<div class="meta">';
					
					printf(__('<span class="date"><ion-icon name="calendar"></ion-icon> %1$s</span>','alice'),get_the_date());
					if (comments_open()) {
						echo '<span class="reply"><i class="fa fa-comment-o"></i> ';
							comments_popup_link(__('Leave a comment', 'alice'),
												 __('One comment', 'alice'),
              									__('% comments', 'alice'),
             									 __('Read all comments', 'alice'));
						echo '</span>';
					}
					printf(__('<span class="author"><i class="fa fa-user-circle-o"></i> %1$s</span>','alice'),get_the_author());
				echo '</div>';
			}
		}
	}
	function alice_readmore() {
	  	return '<div class="read"><a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('READ MORE', 'alice') . '</a></div>';
	}
	add_filter( 'excerpt_more', 'alice_readmore' );
	if ( ! function_exists( 'entry_content' ) ) {
		function entry_content() {

			if ( ! is_single() ) :
			  the_excerpt();
			else :
			  the_content();
			endif;

		}
	}
	if (!function_exists('entry_tag')) {
		function entry_tag(){
			if (has_tag() && is_single()) {
				echo '<div class="tag">';
				printf('Tags: %1$s',get_the_tag_list('',' , '));
				echo '</div>';
			}
		}
	}
	function contact(){ ?>
		<div id="contact">
			<ul>
				<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
				<li><a href="#"><i class="fa fa-print"></i></a></li>
			</ul>
		</div><?php

	}
	// chenf CSS vaf JS vao theme
	function theme_style(){
		
		// bootstrap
		wp_register_style('bootstrap-css', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css','all');
		wp_enqueue_style('bootstrap-css');
		wp_register_style('monterrat',get_template_directory_uri().'/font/montserrat.css','all');
		wp_enqueue_style('monterrat');
		wp_register_style('lato',get_template_directory_uri().'/font/lato.css','all');
		wp_enqueue_style('lato');
		wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css','all');
		wp_enqueue_style('font-awesome');
		wp_register_style('main-style',get_template_directory_uri().'/style.css','all');
		wp_enqueue_style('main-style');
		wp_register_style('responsive',get_template_directory_uri().'/css/responsive.css','all');
		wp_enqueue_style('responsive');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',array('jquery'));
		wp_enqueue_script('jquery');
		wp_register_script('bootstrap-js', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js',array('jquery'));
		wp_enqueue_script('bootstrap-js');
		wp_register_script('js', get_template_directory_uri().'/js/alice.js',array('jquery'));
		wp_enqueue_script('js');
		wp_register_script('ionicons', 'https://unpkg.com/ionicons@4.4.2/dist/ionicons.js',array('jquery'));
		wp_enqueue_script('ionicons');
	}
	add_action('wp_enqueue_scripts','theme_style');
	
 ?>