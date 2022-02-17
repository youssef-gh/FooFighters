<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {
  require_once("mod/config.php");

  // Vérification si l'utilisateur a entré quelque chose
  if (strlen($_POST['user']) >= 2 and strlen($_POST['msg']) >= 1 ) {
    
  // Insert values to DB 

  $que = $pdo->prepare('INSERT INTO comments(user, msg) VALUES(:user, :msg)');

  $que->execute(array(
    'user' => $_POST['user'],
    'msg' => $_POST['msg'],
    ));
  }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/libs/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/common/css/style.css" />
    <link
      rel="shortcut icon"
      type="image/jpg"
      href="assets/common/img/logo.svg"
    />
    <title>Fans Zone</title>
  </head>
  <body>
    <?php include("navbar.php"); ?>
    <header id="fz-presentation" class="presentation">
      <h1>Fans Zone</h1>
    </header>
    <section id="messages">
        <?php 
        require_once("mod/config.php");
        $answer = $pdo->query('SELECT id, user, msg, date_format(date,\'[%d/%m/%Y/%H:%i:%s]\') AS date FROM comments ORDER BY id DESC LIMIT 0, 10');
        while ($infos = $answer->fetch()) {
        ?>
      <div class="message">
        <span class="user"><?php echo htmlspecialchars($infos['user']) ?></span>
        <p>
            <?php echo htmlspecialchars($infos['msg']) ?>
        </p>
        <span class="date"><?php echo $infos['date'] ?></span>
      </div>
        <?php
        } 
        ?>
    </section>
    <section id="comment">
      <h1>Send Your Comment!</h1>
      <h3>You too can send a comment that will be displayed in this page.</h3>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="user">Username:</label>
        <input type="text" name="user" id="user" />
        <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
        <input type="submit" />
      </form>
    </section>
    <script>
      let userField = document.getElementById("user");
      if (localStorage.user) {
        userField.value = localStorage.user;
      }

      userField.addEventListener("input", () => {
        localStorage.user = userField.value;
      });
    </script>
    <?php include("footer.php") ?>
  </body>
</html>
