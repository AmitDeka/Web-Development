 <link href="../css/style.css" rel="stylesheet">
 <!-- Modal -->
  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:white;" class="color"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
          <form role="form" action="login_submit.php" method="POST">
            <div class="form-group">
              <label><span class="glyphicon glyphicon-envelope"></span> E-Mail</label>
              <input type="email" class="form-control"  name="e-mail" placeholder="Enter your Resistered E-Mail" required>
            </div>
            <div class="form-group">
              <label><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" placeholder="Enter password" name="password" required>
            </div>
            <?php if(isset($_GET["error"])){ echo $_GET['error'];} ?><br>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-default btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button><br>
          <p>Not a member? <a href="./signup.php">Sign Up</a></p>
          <p class="pull-left"><a href="#">Forgot Password?</a></p>
        </div>
      </div>
    </div>
  </div> 
