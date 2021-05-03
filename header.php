<?php
/**
 * Header Template
 *
 * @package Catherine
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>> 

<?php
	//Check the wordpress version if it is running 5.2+
	if( function_exists( 'wp_body_open' ) ){
	//Run this if true
	//Add provision for adding GA and FP script in body tag
		wp_body_open(); 
}
?>

<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part( 'template-parts/header/nav' ); ?>
	</header>
	<div id="content" class="site">
		

