@extends('layouts.app')

@section('content')
<div class="container">
    <span class="d-block p-2 bg-white text-#ECE7E7">
  <!-- <div class="row"> -->
    <!-- <div class="col-md-10"> -->
      <div class="row">
        <div class="col-md-1">
      <img src="https://thumbs.dreamstime.com/b/aviation-logo-15466555.jpg" width="90" height="40">
</div>
  <div class="col">
<h1 >Aircrafts</h1>
</div>
<div class="col-md-2">
  <div class="btn" >
  <button align="right" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
    <img src="https://cdn.pixabay.com/photo/2015/03/04/22/35/head-659652_960_720.png" class="rounded-circle" width="40" height="40">

  </button>

  <div class="dropdown-menu dropdown-menu-right">
    <button class="dropdown-item" type="button">Edit Profile</button>
    <button class="dropdown-item" type="button">Settings</button>
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
    <span class="d-block p-2 bg-white text-#ECE7E7 border-left">
      <div class="row">
        <div class="col-md-1">
      <img src="http://www.caa.co.uk/uploadedImages/CAA/Content/Images/Landing_Page/lp-boeing-dreamliner.jpg" width=70 height=70>
</div>
  <div class="col-md-11">
<p> ATR - 72 - 121A</p>
<h5>MSN - 1300</h5>
</div>
</div>
    </span>
    <br>
  <!-- </div> -->
  <span class="d-block p-2 bg-white text-#ECE7E7 border-left">
    <div class="row">
      <div class="col-md-1">
    <img src="https://robbreportedit.files.wordpress.com/2013/07/4267041.jpg" width=70 height=70>
  </div>
    <div class="col-md-11">
    <p> ATR - 72 - 121A</p>
    <h5>MSN - 1400</h5>
    </div>
  </div>
  </span>
  <br>
  <span class="d-block p-2 bg-white text-#ECE7E7 border-left">
    <div class="row">
      <div class="col-md-1">
    <img src="https://www.sasgroup.net/en/wp-content/uploads/sites/2/2014/10/SAS-Aircraft-on-order-562x282.jpg" width=70 height=70>
</div>
  <div class="col-md-11">
    <p> ATR - 72 - 121A</p>
    <h5>MSN - 1200</h5>
    </div>
  </div>
  </span>
  <br>


</div>
  <!-- Split dropright button -->



</div>


@endsection
