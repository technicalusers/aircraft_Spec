@extends('layouts.app')

@section('content')



<section>
  <div class="row">
    <div class="col-md-7">
      <div  class="bg-img">
<font color="white" font size="8">AIMS</font><br><br><br><br><br>
<font color="white" font size="10">Aircraft<br>Management System</font>
      </div>
    </div>
    <div class="col-md-5">
      <form action="/action_page.php">
        <div class="form-block">
          <h1 align='Center' text-shadow: 4px 6px="color:gray">Sign In</h1><br>
						<style>
						h1{
							text-shadow: 4px 2px #D3D3D3;
						}
</style>
          <label for="email">Email</label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="psw">Password</label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit" class="btn">Login</button><br><br>
        </div>
      </form>
  </div>

  </div>

</section>

@endsection
