
<div class="row">
<div class="login-wrapper">
  <form action="index.php?login" method="post" role="form">
    <div class="popup-header">
          <span class="text-semibold">User Login</span>
    </div>
        <div class="well-new">
          <div class="form-group has-feedback">
            <label>Username <label class="glyphicon glyphicon-user"></label></label>
            <input name="username" id="username" class="form-control" placeholder="Your Reg No:" type="text" required="required">
            <i class="icon-users form-control-feedback"></i>
          </div>

          <div class="form-group has-feedback">
            <label>Password <label class="glyphicon glyphicon-lock"></label></label>
            <input name="password" id="password" class="form-control" placeholder="Reg No: or New Pass" type="password" required="required">
            <i class="icon-lock form-control-feedback"></i>
          </div>

          <div class="row form-actions">
            <div class="col-xs-6">
              <div class="checkbox checkbox-success">
              <label class="ul_text">
              <div class=""><span><input class=""  type="checkbox" value="remember"></span></div>
                Remember me
              </label>
              </div>
            </div>

            <div class="col-xs-6">
              <button type="submit" name=signin class="btn btn-warning-new pull-right"><i class="glyphicon glyphicon-log-in"></i> Sign in</button>
            </div>
          </div>

        </div>
        </form>
</div>
</div>
<?php login(); ?>
