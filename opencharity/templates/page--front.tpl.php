<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <!-- ______________________ HEADER _______________________ -->
    <header>
        <div class="container">
            <div id="logo">
                <?php if ($logo): ?>
                	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    	<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                	</a>
                <?php endif; ?>
            </div>
            <?php if ($main_menu || $secondary_menu || $page['navbar']): ?>
                <nav id="navigation" class="menu <?php !empty($main_menu) ? print "with-primary" : ''; !empty($secondary_menu) ? print " with-secondary" : ''; ?>">
                    <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'nav', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
                </nav>
            <?php endif; ?>
        </div>
    </header>
    <?php
		$fid = theme_get_setting('hero_banner');
        $image_url = file_create_url(file_load($fid)->uri);
	?>
    <section class="hero nopadding"<?php if($image_url){ print ' style="background: url('.$image_url.') no-repeat center top fixed;"';} ?>>
    	<div class="container align-center">
			<h1 class="big-title"><?php print theme_get_setting('hero_title'); ?></h1>
            <?php print theme_get_setting('hero_text'); ?>
        </div>
	</section>
    
    <section class="event">
    	<div class="container">
        	<div class="float-left">
                <h3 class="color-primary"><span class="color-secondary">Next Event:</span> <?php print theme_get_setting('event_date_time'); ?></h3>
                <p class="color-text"><?php print theme_get_setting('event_address'); ?></p>
            </div>
            <div class="float-right">
            	<a href="<?php print theme_get_setting('event_register_link'); ?>" class="button register align-center"><?php print theme_get_setting('event_register_text'); ?></a>
            </div>
        </div>
    </section>
    
    <section class="getinvolved">
    	<div class="container align-center">
        	<h2><?php print theme_get_setting('gi_section_title'); ?></h2>
            
            <div class="row">
            <?php for($i=1;$i<=3;$i++){
				
				$fid = theme_get_setting('gi_section_col'.$i.'_image');
		        $image_url = file_create_url(file_load($fid)->uri); ?>
                <div class="col-4">
                    <img src="<?php print $image_url; ?>" alt="<?php print theme_get_setting('gi_section_col'.$i.'_title'); ?>" />
                    <h3 class="color-primary"><?php print theme_get_setting('gi_section_col'.$i.'_title'); ?></h3>
                    <p class="color-text"><?php print theme_get_setting('gi_section_col'.$i.'_text'); ?></p>
                    <a href="<?php print theme_get_setting('gi_section_col'.$i.'_btnlink'); ?>" class="button outlined"><?php print theme_get_setting('gi_section_col'.$i.'_btntxt'); ?></a>
                </div>
            <?php } ?>   
            </div>
        </div>
    </section>
    
    <section class="about" id="about">
    	<div class="container align-center">
        	<h2><?php print theme_get_setting('about_section_title'); ?></h2>
            <p class="intro color-text"><?php print theme_get_setting('about_section_text1'); ?><p>
            <p class="intro color-text"><strong><?php print theme_get_setting('about_section_text2'); ?></strong></p>
            <div class="row">
            <?php for($i=1;$i<=3;$i++){
				
				$fid = theme_get_setting('about_section_col'.$i.'_icon');
		        $image_url = file_create_url(file_load($fid)->uri); ?>
            	<div class="col-4 mission-item">
                    <img src="<?php print $image_url; ?>" alt="<?php print theme_get_setting('about_section_col'.$i.'_title'); ?>" />
                    <h3><?php print theme_get_setting('about_section_col'.$i.'_title'); ?></h3>
                    <p class="color-primary"><?php print theme_get_setting('about_section_col'.$i.'_text'); ?></p>
                </div>
            <?php } ?>
            </div>
            <hr />
            <h2><?php print theme_get_setting('members_section_title'); ?></h2>
            <div class="owl-carousel" id="partners">
            	<?php print render($page['members']); ?>
            </div>
        </div>
    </section>
    
    <section class="blog">
    	<div class="container">
        	<h2 class="align-center"><?php print theme_get_setting('blog_section_title'); ?></h2>
            <div class="owl-carousel" id="blog">
            	<?php print render($page['blog']); ?>	
            </div>
        </div>
    </section>
	<footer>
    	<div class="container align-center">
        	<a href="<?php print theme_get_setting('facebook_link'); ?>" class="color-secondary social-icon"><i class="fa fa-facebook"></i></a>
            <a href="<?php print theme_get_setting('twitter_link'); ?>" class="color-secondary social-icon"><i class="fa fa-twitter"></i></a>
            <a href="<?php print theme_get_setting('gplus_link'); ?>" class="color-secondary social-icon"><i class="fa fa-google-plus"></i></a>
            <hr />
            <p><?php print theme_get_setting('footer_txt'); ?></p>
        </div>
    </footer>
</div> <!-- /page -->
