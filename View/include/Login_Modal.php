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
            <label for="Email"><span class="glyphicon glyphicon-user"></span> Email</label>
            <input type="text" class="form-control" name="SignInEmail" id="SignInEmail" placeholder="Email" value="test@test.com" required>
          </div>
          <div class="form-group">
            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
            <input type="password" class="form-control" name="Sign_In_user_pass" id="Sign_In_user_pass" placeholder="Enter password" value="password" required>
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
            <input type="text" class="form-control" name="FName" id="FName" placeholder="First Name" pattern="[a-zA-Z]+">
          </div>
          <div class="form-group">
            <label for="usrname">Last Name</label>
            <input type="text" class="form-control" name="LName" id="LName" placeholder="Last Name" pattern="[a-zA-Z]+">
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="RegisterEmail" id="RegisterEmail" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="psw">Password</label>
            <input type="password" class="form-control" name="Register_user_pass" id="Register_user_pass" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
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


<!-- Book Information Modal -->
<div class="modal fade" id="LoginBookModal" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header" style="padding:35px 50px;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 name="BoldBookTitle" id="BoldBookTitle"></h4>
      </div>
      <input type="text" name="BookID" id="BookID" hidden>
      <div class="modal-body" style="padding:40px 50px;">
            <input hidden name="BookTitle" id="BookTitle">
          <div class="form-group">
            <label for="Author Name">Author's Name</label>
            <h4 name="AuthorName" id="AuthorName"></h4>
          </div>
          <div class="form-group">
            <label for="Books Genre">Genre</label>
            <h4 name="Genre" id="Genre"></h4>
          </div>
          <div class="form-group">
            <label for="">Language Written In</label>
            <h4 name="LanguageWrittenIn" id="LanguageWrittenIn"></h4>
          </div>
          <div class="form-group">
            <label for="Millions Sold">Millions Sold</label>
            <h4  name="MillionsSold" id="MillionsSold"></h4>
          </div>
          <div class="form-group">
            <label for="Year Of Publication">Year Of Publication</label>
            <h4 name="YearOfPublication" id="YearOfPublication"></h4>
          </div>
          <div class="form-group">
            <label for="Book Summary">Book Summary</label>
            <p name="Summary" id="Summary"></p>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>

      </div>
    </div>

  </div>
</div>

<script src="../Control/js/ajax.js" defer charset="utf-8"></script>
