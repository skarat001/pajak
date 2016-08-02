  
<div class="panel col-md-12 blue" >


 <form class="form-vertical"  role="form" method="POST" action="{{ url('/login') }}">
 
     {{ csrf_field() }}
        <h2 class="form-signin-heading">Log In</h2>
        <label for="inputEmail" >Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required >
        <br>
        <label for="inputPassword" >Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <a href="#" class="btn btn-link link-login"></a><label>Lupa Password</label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>
<br>
</div>