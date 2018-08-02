<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/project-listing', 'ProjectController@index')->name('/project-listing');

Route::get('/login/test',function(){
  return view('login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
  // Backpack\CRUD: Define the resources for the entities you want to CRUD.
    CRUD::resource('aircrafts', 'Admin\AircraftCrudController');
    CRUD::resource('avionics', 'Admin\AvionicCrudController');
    CRUD::resource('apus', 'Admin\ApuCrudController');
    CRUD::resource('engines', 'Admin\EngineCrudController');
    CRUD::resource('interiors', 'Admin\InteriorCrudController');
    CRUD::resource('landing_gears', 'Admin\Landing_gearCrudController');
    CRUD::resource('aircraft_owners', 'Admin\Aircraft_ownerCrudController');
    CRUD::resource('owners', 'Admin\OwnerCrudController');

  // [...] other routes
});
