<?php
   ob_start();
   session_start();
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" type="text/css" href="lista.css">
        <title>who are u?</title>
    </head>
    <a href="data/l0.pdf">l0</a>
    <a href="data/l1.pdf">l1</a>
    <a href="data/l2.pdf">l2</a>
    <a href="data/apostila_rubira.pdf">apostila</a>
    <body class="entry">

    <?php
        $msg = '';
        
        if (isset($_POST['login']) && !empty($_POST['username']) 
           && !empty($_POST['password'])) {
                            
           if ($_POST['username'] == 'gps' && 
              $_POST['password'] == '1234') {
              $_SESSION['valid'] = true;
              $_SESSION['timeout'] = time();
              $_SESSION['username'] = 'gps';
           
              echo"Senha e usuário corretos";   
            header('Location: lista.html');
           }else {
              $msg = 'Wrong username or password';
           }
        }
    ?>
      <div class = "container" style="float: right">
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            Usuário: <input type = "text" class = "form-control" 
               name = "username" required autofocus></br>
             Senha: <input type = "password" class = "form-control"
               name = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
      </div>
    </body>
    
</html>
