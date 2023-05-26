<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ytobelieve
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<!-- <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Yantramanav&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>

	<div class="header-image" >
		<a href="<?php site_url() ?>/">
					<img class="logo" src="/wp-content/uploads/2019/11/logo-large.png" alt="">
		</a>



	</div>

	<a id="menu-toggle" href="#" class=" toggle">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 0 443 300" style="enable-background:new 0 0 443 300; margin-top: calc(-.3px - .7vw); cursor: pointer !important;" xml:space="preserve">
			<style type="text/css">
				.bars{fill:#7e99b6; cursor: pointer !important;}
				.menutxt{fill:#FAFBFB; cursor: pointer !important;}
			</style>
			<path class="top bars" d="M436.59,82H149.41c-3.54,0-6.41-2.87-6.41-6.41V38.41c0-3.54,2.87-6.41,6.41-6.41h287.18
				c3.54,0,6.41,2.87,6.41,6.41v37.18C443,79.13,440.13,82,436.59,82z"/>
			<path class="bottom bars" d="M436.09,270H149.91c-3.81,0-6.91-3.09-6.91-6.91v-36.19c0-3.81,3.09-6.91,6.91-6.91h286.19
				c3.81,0,6.91,3.09,6.91,6.91v36.19C443,266.91,439.91,270,436.09,270z"/>
			<path class="middle bars" d="M436.17,176H149.83c-3.77,0-6.83-3.06-6.83-6.83v-36.35c0-3.77,3.06-6.83,6.83-6.83h286.35
				c3.77,0,6.83,3.06,6.83,6.83v36.35C443,172.94,439.94,176,436.17,176z"/>
			<g>
				<path class="menutxt" d="M70.19,223.61c-1.7,0-3.05-0.01-4.07-0.02s-5.14-0.2-12.4-0.55v0.32l41.66,13.75v10.31l-41.75,12.82v0.32
					c8.76-0.46,14.43-0.69,16.99-0.69H95.4v10.07H42.16v-15.33l40.69-12.62v-0.2l-40.69-13.35v-15.37H95.4v10.52H70.19z"/>
				<path class="menutxt" d="M86.09,161.96h9.3v30.62H42.16v-30.62h9.26v19.34h11.69v-18h9.22v18h13.75V161.96z"/>
				<path class="menutxt" d="M42.16,95.86H95.4v14.36l-40.25,23.14v0.32c7.28-0.46,12.35-0.69,15.21-0.69H95.4v10.07H42.16v-14.2
					l39.89-23.14v-0.24c-6.66,0.35-11.56,0.53-14.68,0.53h-25.2V95.86z"/>
				<path class="menutxt" d="M42.16,43.29V32h34.46c5.91-0.05,10.65,1.93,14.24,5.95c3.59,4.02,5.34,9.4,5.26,16.14
					c0,6.88-1.76,12.2-5.28,15.96c-3.52,3.76-8.31,5.64-14.38,5.64h-34.3V64.44h32.6c4.15,0,7.17-0.83,9.06-2.49
					c1.89-1.66,2.83-4.36,2.83-8.09c0-3.73-0.96-6.43-2.87-8.09c-1.91-1.66-4.95-2.49-9.1-2.49H42.16z"/>
			</g>
			</svg>
	</a>


	<nav id="sidebar-wrapper">
		<ul class="sidebar-nav">
			 <a id="menu-close"  href="javascript:void(0)" class="closebtn circle boxShadow" ><div class="outer">
				 <div class="inner">

			 	</div>
			 </div></a>

			<li id="first-li">
				<a href="<?php site_url() ?>/" title="Go to home">Home</a>
			</li>
			<li >
				<a href="<?php site_url() ?>/about-us" title="Go to about us">About Us</a>
			</li>
			<li>
				<a href="<?php site_url() ?>/conversations" title="Go to Conversations of Consequence section">Conversations of Consequence</a>
			</li>
			<li>
				<a href="<?php site_url() ?>/process" title="process">Why Y2B</a>
			</li>
			<li>
				<a href="<?php site_url() ?>/evidence" title="evidence">Gen Z <br> Evidence</a>
			</li>
            <li>
                <a href="https://tithe.ly/give_new/www/#/tithely/give-one-time/6424881" title="give">Give</a>
            </li>

		</ul>
	</nav>
