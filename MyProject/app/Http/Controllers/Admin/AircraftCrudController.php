<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AircraftRequest as StoreRequest;
use App\Http\Requests\AircraftRequest as UpdateRequest;
use App\Models\Owner;
use App\Models\Aircraft;
use Storage;
use Image;

/**
 * Class AircraftCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class AircraftCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Aircraft');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/aircrafts');
        $this->crud->setEntityNameStrings('aircraft', 'aircrafts');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

    //   $this->crud->setFromDb();
    $this->crud->addColumn([
      'label' => 'Cover Image',
      'name' => 'cover_image',
      'type' => 'image',

    ]);

    $this->crud->addColumn([
      'label' => 'MSN',
      'name' => 'msn'
    ]);

    $this->crud->addColumn([
      'label' => 'Aircraft Type',
      'name' => 'aircraft_type'
    ]);

        $this->crud->addColumn([
          'label' => 'Aircraft Family',
          'name' => 'aircraft_family'
        ]);

        $this->crud->addField([
          'label' => 'MSN',
          'name' => 'msn'
        ]);

        $this->crud->addField([
          'label' => 'Aircraft Type',
          'name' => 'aircraft_type'
        ]);

          $this->crud->addField([
            'label' => 'Aircraft Family',
            'name' => 'aircraft_family'
          ]);

          $this->crud->addField([ // image
            'label' => "Cover Image",
            'name' => "cover_image",
            'type' => 'image',
            'upload' => true,
          //  $file = Image::make('url'),
            // 'crop' => true, // set to true to allow cropping, false to disable
            // 'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
            // // 'prefix' => 'uploads/images/profile_pictures/' // in case you only store the filename in the database, this text will be prepended to the database value
        ]);

          $this->crud->allowAccess('delete');
        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);

        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');

        // add asterisk for fields that are required in AircraftRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '=', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
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

      $aircraft = Aircraft::whereId($request->id)->first();
      if (starts_with($request->cover_image, 'data:image'))
      {
          $image = Image::make($request->image);
          dd($image);
          $filename = md5($request->image.time()).'.jpg';
          $key = 'attachment-image/'.$filename;
          $file = $image->stream();
          Storage::disk('public')->put($key, $image->stream(),'public');
          $url= Storage::disk('public')->url($key);
          dd($url);
          $aircraft->storage_image = $url;
      }
        $aircraft->msn = $request->msn;
        $aircraft->aircraft_type = $request->aircraft_type;
        $aircraft->aircraft_family = $request->aircraft_family;
        $aircraft->save();
        // your additional operations before save here
        return redirect('/admin/aircrafts');
    }

  }
