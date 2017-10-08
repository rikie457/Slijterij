<?php
/**
 * Created by PhpStorm.
 * User: Tycho
 * Date: 1-8-2017
 * Time: 12:35
 */
?>
<div class="navigator">
  <div class="item" id="1" onclick="menudivclick(1)">
    <form method="post" id="1" action="index.php">
      <input type="hidden" name="status" value="home">
      <input type="submit" value="Home">
    </form>
  </div>
  <div class="item" id="2" onclick="menudivclick(2)">
    <form method="post" id="2" action="index.php">
      <input type="hidden" name="status" value="shop">
      <input type="submit" value="Shop">
    </form>
  </div>
  <?php
  if ( isset($_SESSION['user']) ) {
    ?>
    <div class="item">
      <span>Logged in as: <?php echo $_SESSION['user'][0]->name; ?></span>

    </div>
    <div class="item" id="4" onclick="menudivclick(4)">
      <form method="post" id="4" action="index.php">
        <input type="hidden" name="status" value="logout">
        <input type="submit" value="Logout">
      </form>
    </div>
    <?php
  } else {

    ?>
    <div class="item" id="3" onclick="menudivclick(3)">
      <form method="post" id="3" action="index.php">
        <input type="hidden" name="status" value="login">
        <input type="submit" value="Admin login">
      </form>
    </div>
    <?php
  }
  ?>
</div>

