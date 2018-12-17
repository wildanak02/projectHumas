<html>

<head>

  <link rel="stylesheet" href="Assets/Login/css/style.css">


</head>

<body>

  <div class="box">
    <div id="header">
      <h1 id="logintoregister">Login</h1>
    </div>
    <form action="" method="get">
      <input type="hidden" name="controller" value="Login">
      <input type="hidden" name="action" value="authentication">
      <div class="group">
        <input class="inputMaterial" name="username" type="text" value="<?=isset($_GET["username"]) ? $_GET["username"] : NULL?>" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Username</label>
      </div>
      <div class="group">
        <input class="inputMaterial" name="password" type="password" value="<?=isset($_GET["password"]) ? $_GET["password"] : NULL?>" required>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Password</label>
      </div>
      <button id="buttonlogintoregister" value="Login" type="submit" name="login" >Login</button>
    </form>



  </body>

  </html>
