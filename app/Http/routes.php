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