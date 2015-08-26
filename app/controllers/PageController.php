<?php

class PageController extends BaseController {

	/* Home Page (GET) */
	public function getLanding()
	{	
		
		return View::make('page.landing');
	}

	/* FORM : Landing Plan Your Trip - Default (POST) */
	public function postLandingPytDefault(){
	
		$validator = Validator::make(Input::all(),
			array(
				'InputName' => 'required',
				'InputRollno' => 'required',
				'InputPhone' => 'required',
				'InputAddress' => 'required',
				'InputAccommodation' => 'required',
				'InputTshirtsize' => 'required'
			)
		);

		return var_dump(Input::all());
		if($validator->fails()) {
			return Redirect::route('landing')
				->withErrors($validator)
				->with('globalalertmessage', 'Please Fill all the required Information')
				->with('globalalertclass', 'error')
				->withInput();   // fills the field with the old inputs what were correct

		} else {

			//return Input::all();
			$InputName 			= Input::get('InputName');
			$InputEmail 		= Input::get('InputEmail');
			$InputPhone 		= Input::get('InputPhone');
			$InputDestination 	= Input::get('InputDestination');
			$Inputtripduration 	= Input::get('Inputtripduration');
			$Inputbudget 		= Input::get('Inputbudget');

			// Save Basic Info Data in pyt_default using
			$event = LandingPytDefault::create(array(
				'name'			=> $InputName,				
				'email' 		=> $InputEmail,			
				'phone'			=> $InputPhone,
				'destination'	=> $InputDestination,
				'trip_duration'	=> $Inputtripduration,
				'budget'		=> $Inputbudget
			));

			return Redirect::route('landing')
				->with('globalalertmessage', 'Query Successfully Submitted')
				->with('globalalertclass', 'success');
			
		}
	}

	

}