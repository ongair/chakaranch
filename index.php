<?php
	require_once('lib/limonade.php');

	function configure() {

	}

	dispatch('/', 'home');
	function home() {
		set('title', "Take the driver's seat!");
		set('active', "home");
		return html('home/index.html.php', 'layouts/default.html.php');
	}

	dispatch('/contact', 'contact');
	function contact() {
		set('title', "Contact Us");
		set('active', "contact");
		return html('home/contact.html.php', 'layouts/default.html.php');
	}

	run();

?>