@extends('layouts.app')

@section('content')



<section>
  <div class="row">
    <div class="col-md-7">
      <div  class="bg-img">
  
      </div>
    </div>
    <div class="col-md-5">
      <form action="/action_page.php">
        <div class="form-block">
          <p align="center"><b>Sign In</p><br>

          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <button type="submit" class="btn">Login</button><br><br>
        </div>
      </form>
  </div>

  </div>

</section>

@endsection
