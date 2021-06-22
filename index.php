<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: ./credential/login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MY TODO LIST</title>
  <script src="https://kit.fontawesome.com/328f9238c7.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/logindex.css">

</head>

<body>
  <nav class="navbar navbar-light bg-light ">
    <div class="container">
      <div class="navbar-brand brand">
        <img src="./asset/laptop.svg" alt="logo" class="hearder-img">
        <p class="header-title">To-Do List</p>
      </div>
      <ul class="navbar-nav">
        <div class="dropdown">
          <div class="nav-item active current nav-link ">
          <!-- <i class="fas fa-chevron-down"></i> -->
            <?php echo $_SESSION['First Name'] ?>
            <i class="fas fa-chevron-down"></i>
          </div>
          <div class="dropdown-content">
            <a class="dropdown-item nav-link logout" href="./credential/logout.php">Logout</a>
          </div>
        </div>
      </ul>
    </div>
  </nav>
  <main>
    <section class="box">
      <div class="heading">
        <img src="./asset/laptop.svg" alt="logo" class="heading-img">
        <h1 class="heading-title">
          To-Do List
        </h1>
      </div>
      <!-- <h3><?php echo "Hey! " . $_SESSION['First Name'] ?></h3> -->
      <form class="form">
        <div>
          <label for="todo" class="form-label">
            ~ Today I need to ~
          </label>
          <input type="text" id="todo" name="to-do" size="30" class="form-input" required>
          <button class="button"><span>Submit</span></button>
        </div>
      </form>
      <div>
        <ul class="toDoList">
        </ul>
      </div>
    </section>
  </main>
  <footer>

  </footer>
  <script src="./javascript/app.js"></script>
</body>

</html>