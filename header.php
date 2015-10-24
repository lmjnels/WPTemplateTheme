<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name') ;?> | <?php bloginfo('description'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

        <?php wp_head(); ?>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>

    <?php 
            if (is_home() ):
                $sincere_classes = array('sincere-class', 'my-class');
            else:
                $sincere_classes = array('no-class');
            endif;
     ?>

    <body <?php body_class($sincere_classes); ?>>

    <header> 
        <div class="header-image">
            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
        </div>
         <nav>
            <ul>
                <?php wp_nav_menu (array(
                    'theme_location'    =>  'primary',
                    'container'         =>  '',
                    'items_wrap'        =>  '%3$s',
                )); 
            ?>
            </ul>
        </nav>
    </header>
    