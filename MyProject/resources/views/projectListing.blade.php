@extends('layouts.app')
@section('content')


<div class="container-fluid">


    <span class="d-block p-2 bg-white text-#ECE7E7">
  <!-- <div class="row"> -->
    <!-- <div class="col-md-10"> -->
      <div class="row">
        <div class="col-md-1">
      <img src="https://thumbs.dreamstime.com/b/aviation-logo-15466555.jpg" width="90" height="40">
</div>
  <div class="col">
<h1 >AIMS</h1>
</div>
<div class="col-md-2">
  <div class="btn" >
  <button align="right" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
    <img src="https://image.flaticon.com/icons/svg/17/17797.svg" class="rounded-circle" width="40" height="40">

  </button>

  <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> -->


  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="http://127.0.0.1:8000/logout">logout</a>
    <!-- <button class="dropdown-item" type="button">Settings</button> -->
  </div>
</div>
</div>
</div>

</span>
</div><br>
<div class="container" >
  <!-- <button type="button" class="btn btn-secondary btn-md btn-block"></button> -->
  <!-- Default dropright button -->
<div class="container">

  <!-- </div> -->
    @foreach($aircrafts as $aircraft)
      <div class="d-block p-2 bg-white text-#ECE7E7 border-left=padding 2px">
        <div class="row">
            <div class="col-md-1">
          <img src={{ asset($aircraft->cover_image)}} width=70 height=70>
        </div>
        <div class="col-md-11">
            <p>
              <b>
              {{ $aircraft->msn}}<br>
              {{ $aircraft->aircraft_type}}<br>
              {{ $aircraft->aircraft_family}}
            </b>
          </p>
        </div>
      </div>

    </div>
    <br>
@endforeach



</div>
  <!-- Split dropright button -->



</div>


@endsection
