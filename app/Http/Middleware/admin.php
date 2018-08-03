<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    // CRUD resources and other admin routes
    CRUD::resource('aircrafts', 'AircraftCrudController');
    CRUD::resource('avionics', 'AvionicCrudController');
    CRUD::resource('apus', 'ApuCrudController');
    CRUD::resource('engines', 'EngineCrudController');
    CRUD::resource('Interiors', 'InteriorCrudController');
    CRUD::resource('landing_gears', 'Landing_gearCrudController');
    CRUD::resource('aircraft_owners', 'Aircraft_ownerCrudController');
    CRUD::resource('owners', 'OwnerCrudController');
}); // this should be the absolute last line of this file

<?php
