<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('index', 'HomeController@index');

Route::get ("work", array(
	"as" => "work", function() {
	return View::make("work")
				->with("title", "Work");
}));

Route::get ("vydia", array(
	"as" => "posts/vydia", function() {
	return View::make("posts/vydia")
				->with("title", "Vydia");
}));

Route::get ("the-new-york-times", array(
	"as" => "posts/the-new-york-times", function() {
	return View::make("posts/the-new-york-times")
				->with("title", "The New York Times");
}));

Route::get ("the-point-magazine", array(
	"as" => "posts/the-point-magazine", function() {
	return View::make("posts/the-point-magazine")
				->with("title", "The Point Magazine");
}));

Route::get ("north-carolina-museum-of-art", array(
	"as" => "posts/north-carolina-museum-of-art", function() {
	return View::make("posts/north-carolina-museum-of-art")
				->with("title", "North Carolina Museum of Art");
}));

Route::get ("jetpack", array(
	"as" => "posts/jetpack", function() {
	return View::make("posts/jetpack")
				->with("title", "Jetpack");
}));

Route::get ("clinica-vida-bem-vinda", array(
	"as" => "posts/clinica-vida-bem-vinda", function() {
	return View::make("posts/clinica-vida-bem-vinda")
				->with("title", "Clínica VidaBemVinda");
}));

Route::get ("yoga-today", array(
	"as" => "posts/yoga-today", function() {
	return View::make("posts/yoga-today")
				->with("title", "Yoga Today");
}));

Route::get ("digitalundivided", array(
	"as" => "posts/digitalundivided", function() {
	return View::make("posts/digitalundivided")
				->with("title", "digitalundivided");
}));

Route::get ("phenomenon", array(
	"as" => "posts/phenomenon", function() {
	return View::make("posts/phenomenon")
				->with("title", "Phenomenon");
}));

Route::get ("cold-pressed-raw", array(
	"as" => "posts/cold-pressed-raw", function() {
	return View::make("posts/cold-pressed-raw")
				->with("title", "Cold Pressed Raw");
}));

Route::get ("future-hosting", array(
	"as" => "posts/future-hosting", function() {
	return View::make("posts/future-hosting")
				->with("title", "Future Hosting");
}));

Route::get ("alternative-press", array(
	"as" => "posts/alternative-press", function() {
	return View::make("posts/alternative-press")
				->with("title", "Alternative Press Magazine");
}));

Route::get ("blood-brother-movie", array(
	"as" => "posts/blood-brother-movie", function() {
	return View::make("posts/blood-brother-movie")
				->with("title", "Blood Brother");
}));

Route::get ("obsessive-compulsive-cosmetics", array(
	"as" => "posts/obsessive-compulsive-cosmetics", function() {
	return View::make("posts/obsessive-compulsive-cosmetics")
				->with("title", "Obsessive Compulsive Cosmetics");
}));

Route::get ("harvard-school-of-public-health", array(
	"as" => "posts/harvard-school-of-public-health", function() {
	return View::make("posts/harvard-school-of-public-health")
				->with("title", "Harvard School of Public Health");
}));

Route::get ("animal", array(
	"as" => "posts/animal", function() {
	return View::make("posts/animal")
				->with("title", "Animal");
}));

Route::get ("traveling-picture-show", array(
	"as" => "posts/traveling-picture-show", function() {
	return View::make("posts/traveling-picture-show")
				->with("title", "Traveling Picture Show");
}));

Route::get ("get-right-music", array(
	"as" => "posts/get-right-music", function() {
	return View::make("posts/get-right-music")
				->with("title", "Get Right Music");
}));

Route::get ("impactree", array(
	"as" => "posts/impactree", function() {
	return View::make("posts/impactree")
				->with("title", "Impactree");
}));

Route::get ("world-wide-hearing", array(
	"as" => "posts/world-wide-hearing", function() {
	return View::make("posts/world-wide-hearing")
				->with("title", "World Wide Hearing");
}));

Route::get ("giovanni-rana-restaurant", array(
	"as" => "posts/giovanni-rana-restaurant", function() {
	return View::make("posts/giovanni-rana-restaurant")
				->with("title", "Giovanni Rana Restaurant");
}));

Route::get ("design", array(
	"as" => "services/design", function() {
	return View::make("services/design")
				->with("title", "Digital, Web and Graphic Design Services");
}));

Route::get ("branding", array(
	"as" => "services/branding", function() {
	return View::make("services/branding")
				->with("title", "Branding Services & Logo Design");
}));

Route::get ("development", array(
	"as" => "services/development", function() {
	return View::make("services/development")
				->with("title", "SquareSpace, WordPress, Shopify, ExpressionEngine Development Services");
}));

Route::get ("consulting", array(
	"as" => "services/consulting", function() {
	return View::make("services/consulting")
				->with("title", "Consulting Services");
}));

Route::get ("company", array(
	"as" => "company", function() {
	return View::make("company")
				->with("title", "Company");
}));

Route::get ("contact", array(
	"as" => "contact", function() {
	return View::make("contact")
				->with("title", "Contact Us");
}));