<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Unauthenticated group */
Route::group(array('before' => 'guest'), function() {

	/* CSRF protection */
	Route::group(array('before' => 'csrf'), function() {

		/* FORM : Landing Plan Your Trip Default (POST) */
		Route::post('/landingpytdefault', 
			array('as' => 'landing-pyt-default-post',
				'uses' => 'PageController@postLandingPytDefault'
		));
		
		/* FORM : Landing Plan Your Trip Lazy (POST) */
		Route::post('/landingpytlazy', 
			array('as' => 'landing-pyt-lazy-post',
				'uses' => 'PageController@postLandingPytLazy'
		));

		/* Admin Explore Timeline Edit (POST) */
		Route::post('admin/explore/explore_timeline/{explore_unique_name}/edit', 
			array('as'=>'admin-explore-timeline-edit-post', 'uses'=>'AdminController@postExploreTimelineEdit'
		));

		/* Admin Explore Page (POST) */
		Route::post('/admin/explore', 
		  array('as' => 'admin-explore-post', 
		        'uses' => 'AdminController@postExplore'
		));

	});

	/* Home Page (GET) */
	Route::get('/', 
	  array('as' => 'landing', 
	        'uses' => 'PageController@getLanding'
	));

	/* Explore Page (GET) */
	Route::get('/explore', 
	  array('as' => 'explore', 
	        'uses' => 'PageController@getExplore'
	));

	/* Explore Name Page (GET) */
	Route::get('explore/{explore_unique_name}', 
		array('as'=>'explore-name', 'uses'=>'PageController@getExploreName'
	));

	### Shift to Authenticated Later
	/* Admin Home Page (GET) */
	Route::get('/admin', 
	  array('as' => 'admin-home', 
	        'uses' => 'AdminController@getHome'
	));

	/* Admin Explore Page (GET) */
	Route::get('/admin/explore', 
	  array('as' => 'admin-explore', 
	        'uses' => 'AdminController@getExplore'
	));

	/* Admin Explore Timeline Edit (GET) */
	Route::get('admin/explore/{explore_unique_name}/edit', 
		array('as'=>'admin-explore-edit', 'uses'=>'AdminController@getExploreEdit'
	));

	/* Admin Explore Timeline (DELETE) */
	Route::delete('/admin/explore/explore_timeline/delete', 
		array('as' => 'admin-explore-timeline-delete',
			'uses' => 'AdminController@deleteExploreTimeline'
	));


});

###
/* Authenticated group */
###
Route::group(array('before' => 'auth'), function() {

	/* CSRF protection */
	Route::group(array('before' => 'csrf'), function() {

		

	});

	/* CSRF protection AJAX */
	Route::group(array('before' => 'csrf-ajax'), function() {

	});

});

###
/*
	No Group - Accessible by All
*/


/* Debuggin Page (GET) */

// Created to see Error Outputs for Oauth Sign in Pages.
// Tackles Redirect issue.
