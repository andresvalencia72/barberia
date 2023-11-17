<?php
require_once("funciones.php");
session_start();

//borar las sesiones
unset($_SESSION["cliente"]);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/estilos-login.css">
    <link rel="shortcut icon" href="assets/img/barberia.png" type="image/x-icon">
    <title>Login</title>
  </head>
  <body>
    <main class="login">
      <h2 class="login_title">Sign In</h2>
      <form action="comprueba.php" method="post">
        <div class="">
          <label for="user">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-user"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
              <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
            </svg>
          </label>
          <input
            type="email"
            id="user"
            class="login_input"
            placeholder="Username"
            name="email"
          />
        </div>
        <div>
          <label for="password">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="icon icon-tabler icon-tabler-lock-open"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              fill="none"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M5 11m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"
              ></path>
              <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
              <path d="M8 11v-5a4 4 0 0 1 8 0"></path>
            </svg>
          </label>
          <input
            type="password"
            id="password"
            class="login_input"
            placeholder="Password"
            name="contrasenia"
          />
        </div>
        <p>Don't have an account?<a href="registrarse.php">Register Here</a></p>
        <input type="submit" name=login value="Login" class="login_button" />
      </form>
    </main>
  </body>
</html>
