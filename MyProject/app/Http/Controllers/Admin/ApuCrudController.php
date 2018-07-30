<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Models\Aircraft;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ApuRequest as StoreRequest;
use App\Http\Requests\ApuRequest as UpdateRequest;

/**
 * Class ApuCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ApuCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Apu');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/apus');
        $this->crud->setEntityNameStrings('apu', 'apus');



        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
      // $aircraft = Aircraft::pluck('id');
        // $this->crud->setFromDb();


        $this->crud->addColumn([
          'label' => 'Serial Number',
          'name' => 'serial_number',
        ]);

        $this->crud->addColumn([
          'label' => 'Model Number',
          'name' => 'model_number',
        ]);

        $this->crud->addColumn([
          'label' => 'CSN',
          'name' => 'csn',
        ]);

        $this->crud->addColumn([
          'label' => 'TSN',
          'name' => 'tsn',
        ]);

        $this->crud->addColumn([
          'label' => 'Aircraft Id',
          'name' => 'msn',
          'type' => 'model_function',
          'function_name' => 'getAircraft',
        ]);

        $this->crud->addField([
          'label' => 'Serial Number',
          'name' => 'serial_number',
        ]);

        $this->crud->addField([
          'label' => 'Model Number',
          'name' => 'model_number',
        ]);

                $this->crud->addField([
                  'label' => 'CSN',
                  'name' => 'csn',
                ]);

                $this->crud->addField([
                  'label' => 'TSN',
                  'name' => 'tsn',
                ]);

        $aircrafts = Aircraft::pluck('msn','id');
        $this->crud->addfield([
          'label' => 'Aircraft Id',
          'name' => 'aircraft_id',
          'type' => 'select_from_array',
          'options' => $aircrafts
        ]);


$this->crud->allowAccess('delete');




        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
