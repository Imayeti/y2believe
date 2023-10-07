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
					<img class="logo" src="/wp-content/uploads/2023/10/logo-large.png" alt="">
		</a>



	</div>

	<a id="menu-toggle" href="#" class=" toggle">
<!--        <div class="internal">-->
<!--            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"-->
<!--                 viewBox="0 0 443 300" style="enable-background:new 0 0 443 300; cursor: pointer !important;" xml:space="preserve">-->
<!--			<style type="text/css">-->
<!--                .bars{fill:#fafafa; cursor: pointer !important;}-->
<!--                .menutxt{fill:#FAFBFB; cursor: pointer !important;}-->
<!--            </style>-->
<!--                <path class="top bars" d="M436.59,82H149.41c-3.54,0-6.41-2.87-6.41-6.41V38.41c0-3.54,2.87-6.41,6.41-6.41h287.18-->
<!--				c3.54,0,6.41,2.87,6.41,6.41v37.18C443,79.13,440.13,82,436.59,82z"/>-->
<!--                <path class="bottom bars" d="M436.09,270H149.91c-3.81,0-6.91-3.09-6.91-6.91v-36.19c0-3.81,3.09-6.91,6.91-6.91h286.19-->
<!--				c3.81,0,6.91,3.09,6.91,6.91v36.19C443,266.91,439.91,270,436.09,270z"/>-->
<!--                <path class="middle bars" d="M436.17,176H149.83c-3.77,0-6.83-3.06-6.83-6.83v-36.35c0-3.77,3.06-6.83,6.83-6.83h286.35-->
<!--				c3.77,0,6.83,3.06,6.83,6.83v36.35C443,172.94,439.94,176,436.17,176z"/>-->
<!--			</svg>-->
<!--        </div>-->

        <img class="menu-icon" src="/wp-content/uploads/2023/10/burger-menu-svgrepo-com.svg" alt="menu icon">
	</a>


	<nav id="sidebar-wrapper">
		<ul class="sidebar-nav">
			 <div id="menu-close"  class="closebtn circle boxShadow" ><div class="outer">
				 <div class="inner">

			 	</div>
			 </div></div>

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
				<a href="<?php site_url() ?>/purpose" title="purpose">Why Y2B</a>
			</li>
			<li>
				<a href="<?php site_url() ?>/evidence" title="evidence">Gen Z <br> Evidence</a>
			</li>
            <li>
                <a href="https://tithe.ly/give_new/www/#/tithely/give-one-time/6424881" title="give">Give</a>
            </li>

		</ul>
	</nav>
