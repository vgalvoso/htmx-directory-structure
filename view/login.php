<div class="full-screen">
  <div class="w-75 bg-img mobile-hide" style="background-image:url('https://www.kfc.com.ph/Content/OnlineOrderingImages/Shared/logo.svg');">
  </div>
  <div class="w-33 column center mobile-show">
    <h1 class="text-header center">Login to Continue</h1>
    <form class="w-100 center" hx-post="login" hx-target="body" hx-swap="innerHTML">
      <input type="text" class="pad-big w-80" name="username" placeholder="Email" required>
      <input type="password" class="pad-big w-80" name="password" id="password" placeholder="Password" required>
      <div class="row w-80 spread mt-1 mb-2">
        <div>
          <input type="checkbox" name="remember_me" onchange="showPassword('password')">
          <label>Show Password</label>
        </div>
        <a href="">Forgot Password?</a>
      </div>
      <button class="w-80 mb-big">Login</button>
      <label>or sign up using</label>
      <div class="row mt-2">
        <a href="" class="pad-small round mr-1 bg-blue"><i class="gg-facebook white bg-blue"></i></a>
        <a href="" class="pad-small round bg-info"><i class="gg-twitter white bg-info"></i></a>
      </div>
    </form>
  </div>
</div>