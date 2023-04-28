<html>

<?php
if (isset($_SESSION['user'])) {
  ?>
  <a type="button" href="action/sedeconnecter.php" class="btn fw-bold btn-outline-black me-44">Logout</a>
  <?php
  if ($_SESSION['user']['admin'] == 1) {
    ?>
    
    <a type="button" href="administration.php" class="btn fw-bold btn-black me-2">Admin</a>
    <?php
  }
}else{
  ?>
  <a type="button" href="login.php" class="btn fw-bold btn-outline-black me-44">Login</a>
  <a type="button" href="signup.php" class="btn fw-bold btn-black me-2">Sign-up</a>
  <?php
}

?>
</html>