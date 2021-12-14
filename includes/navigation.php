<?php
    session_start();

    $welcomeHTML = "<li><a href=\"index.php\" id=\"links\">Front Page</a></li>";

    $logHTML = "<li><a href=\"index.php\" id=\"links\">Log In</a></li>";  //show log in/log out nav depending on log status;
    $createAccHTML = "<li><a href=\"index.php\" id=\"links\">Create Account</a></li>";  //show create acc nav depending on log status;
    $ecommerceHTML = "<li><a href=\"index.php\" id=\"links\">Shop</a></li>"; //show products nav & cart nav depending on log status;

    //NOT LOGGED IN:
    //welcome page | create account | log in

    //LOGGED IN:
    //welcome page | products | cart | log out

    //order needs to be: nav = welcome . ecommerceHTML . createAccHTML . logHTML;



  echo "
    <nav class=\"navbar\">
      <div class=\"site-title\">E-Commerce</div>
        <a href=\"#\" class=\"toggle-btn\" id=\"toggle-btn\">
          <span class=\"bar\"></span>
          <span class=\"bar\"></span>
          <span class=\"bar\"></span>
        </a>
      <div class=\"navbar-links\" id=\"navbar-links\">
        <ul>" .
          $welcomeHTML .
          $ecommerceHTML .
          $createAccHTML .
          $logHTML .
        "</ul>
      </div>
  </nav>
  ";
?>
