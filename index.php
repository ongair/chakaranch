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

	dispatch('/rides', 'rides');
	function rides() {
		set('title', 'Amazing Rides');
		set('active', 'rides');
		return html('home/rides.html.php', 'layouts/default.html.php');
	}

	dispatch('/gallery', 'gallery');
	function gallery() {
		set('title', 'Gallery');
		set('active', 'gallery');
		return html('home/gallery.html.php', 'layouts/default.html.php');
	}

	run();

?>