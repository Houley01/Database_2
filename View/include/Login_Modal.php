<!-- Login Modal -->
<div class="modal fade" id="loginModal" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" class="" action="../Model/login_process.php" method="POST">
          <div class="form-group">
            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
            <input type="text" class="form-control" name="Email" id="Email" placeholder="Email" value="test@test.com">
          </div>
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Enter password" value="password">
          </div>
          <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

      </div>
    </div>

  </div>
</div>


<!-- RegisterModal -->
<div class="modal fade" id="RegisterModal" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4>Sign Up</h4>
      </div>
      <div class="modal-body" style="padding:40px 50px;">
        <form role="form" class="" action="../Model/Register.php" method="POST">
          <div class="form-group">
            <label for="usrname">First Name</label>
            <input type="text" class="form-control" name="F.Name" id="F.Name" placeholder="First Name">
          </div>
          <div class="form-group">
            <label for="usrname">Last Name</label>
            <input type="text" class="form-control" name="L.Name" id="L.Name" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="Email" id="Email" placeholder="Email" onchange="CheckEmail(this.value)">
          </div>
          <div class="form-group">
            <label for="psw">Password</label>
            <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-success btn-block">Register</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>

      </div>
    </div>

  </div>
</div>


<script src="../Control/js/ajax.js" defer charset="utf-8"></script>
