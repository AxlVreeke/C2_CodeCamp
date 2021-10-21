<?php

session_start();

if (isset($_GET['logout'])) {

  //Simple exit message
  $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>" . $_SESSION['name'] . "</b> has left the chat session.</span><br></div>";
  file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);

  session_destroy();
  header("Location: index.php"); //Redirect the user
}

if (isset($_POST['enter'])) {
  if ($_POST['name'] != "") {
    $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
  } else {
    echo '<span class="error">Please type in a name</span>';
  }
}

function loginForm()
{
  echo
  '<div id="loginform">
    <p>Please enter your name to continue!</p>
    <form action="index.php" method="post">
      <label for="name">Name &mdash;</label>
      <input type="text" name="name" id="name" />
      <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
  </div>';
}

?>

<?php require_once "header.php" ?>

<body onload="startTime()">
  <div class="container">
    <div class="live-time">
      <p><?php $today = date("F j");
          echo $today; ?></p>
      <div id="time"></div>
    </div>

    <?php
    if (!isset($_SESSION['name'])) {
      loginForm();
    } else {
    ?>
      <div id="wrapper">
        <div id="menu">
          <p class="welcome">Welcome, <b><?php echo $_SESSION['name']; ?></b></p>
          <p class="logout"><a id="exit" href="#">Exit Chat</a></p>
        </div>

        <div id="chatbox">
          <?php
          if (file_exists("log.html") && filesize("log.html") > 0) {
            $contents = file_get_contents("log.html");
            echo $contents;
          }
          ?>
        </div>

        <form name="message" action="">
          <input name="usermsg" type="text" id="usermsg" />
          <input name="submitmsg" type="submit" id="submitmsg" value="Send" />
        </form>
      </div>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
        // jQuery Document
        $(document).ready(function() {
          $("#submitmsg").click(function() {
            var clientmsg = $("#usermsg").val();
            $.post("post.php", {
              text: clientmsg
            });
            $("#usermsg").val("");
            return false;
          });

          function loadLog() {
            var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request

            $.ajax({
              url: "log.html",
              cache: false,
              success: function(html) {
                $("#chatbox").html(html); //Insert chat log into the #chatbox div

                //Auto-scroll           
                var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
                if (newscrollHeight > oldscrollHeight) {
                  $("#chatbox").animate({
                    scrollTop: newscrollHeight
                  }, 'normal'); //Autoscroll to bottom of div
                }
              }
            });
          }

          setInterval(loadLog, 2500);

          $("#exit").click(function() {
            var exit = confirm("Are you sure you want to end the session?");
            if (exit == true) {
              window.location = "index.php?logout=true";
            }
          });
        });
      </script>
<?php
    }
?>
<br>
<div class="index-cool">
  <div class="index-logo">
    <img src="<?= $base_url ?>/IMG/camp.png" alt="Index logo">
  </div>
  <div class="contactinformatie">
    <p><b>Bedrijfnaam:</b> CodeCamp</p>
    <p><b>Adres:</b> Koestraat 1</p>
    <p><b>Postcode:</b> 5964BT Den bosch</p>
    <p><b>Telefoon:</b> ‍1300263322</p>
  </div>
</div>
</div>
</body>

<?php require_once 'footer.php' ?>