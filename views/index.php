<?php $this->layout('assets/base', ['title' => 'Home']); ?>

<header class="header min-vw-100"></header>

<main class="d-flex align-items-center min-vw-100 min-vh-100 py-3 py-md-0" id="login">
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="<?php echo link;?>/public/img/pexels-fauxels.jpg" alt="login" class="login-card-img">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <p class="text-info">Pomodoro | El mejor campus online</p>
                        </div>
                        <p class="login-card-description">Welcome to your school!</p>
                        <form action="#!">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <label for="id" class="sr-only">Number</label>
                                <input type="text" name="id" id="id" class="form-control" placeholder="Number of school">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                            </div>
                            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Sing in">
                        </form>
                        <a href="#!" class="forgot-password-link">Forgot password?</a>
                        <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register your school.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
  .brand-wrapper {
  margin-bottom: 19px;
  }
  .brand-wrapper .logo {
  height: 37px;
  }
  .header {
  min-height: 75vh;
  background: url("<?php echo link ?>/public/img/pexels-julia.jpg") center !important;
  text-align: center;
  }
</style>