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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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

        <div class="social d-flex">
            <div class="icon-padding" style="padding-left: 0;">
                <a href="https://www.instagram.com/y2believe/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" fill="#49a39b"/></svg>
                </a>
            </div>

            <div class="facebook-padding">
                <a href="https://www.facebook.com/profile.php?id=61551627014682" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" fill="#49a39b"/></svg>
                </a>
            </div>
        </div>

    </nav>
