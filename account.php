<?php ?>
<div class="login-wrapper">
  <form action="index.php?account" method="post" role="form">
    <div class="popup-header">
      <span class="text-semibold">Activate Account</span>
    </div>
    <div class="well-new">
      <div class="form-group has-feedback">
        <label>PIN <label class="glyphicon glyphicon-lock"></label></label>
        <input name="pin" id="pin" class="form-control" placeholder="Enter Pin Number" type="text" required="required">
      </div>

      <div class="form-group has-feedback">
          <label>STUDENT REG NO. <label class="glyphicon glyphicon-user"></label></label>
          <input name="std_reg" id="password" class="form-control" placeholder="Enter Reg NO" type="text" required="required">
        </div>
        <div class="form-group has-feedback">
          <label>SESSION <label class="glyphicon glyphicon-calendar"></label></label>
          <select class="form-control" id="sel1" name="session" required="required">
            <option>2016/2017</option>
            <option>2017/2018</option>
            <option>2018/2019</option>
          </select>
        </div>
        <div class="row form-actions">
          <div class="col-xs-12">
            <button type="submit" name="activate"class="btn btn-warning-new" id="activate_button"> ACTIVATE</button>
          </div>
      </div>

      </div>
  </form>
</div>

<?php account(); ?>
