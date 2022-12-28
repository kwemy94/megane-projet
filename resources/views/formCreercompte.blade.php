<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            creer un compte
        </title>
        <link rel="stylesheet" href="moncss2.css">
        <link rel="stylesheet" href="roboto/Roboto-Italic.ttf">
        <link rel="stylesheet" href="roboto/Roboto-Light.ttf">
    </head>
    <body>
        <form action="{{url('/compte')}}" method='POST'>
            <h1>New login</h1>
            <input type="email"name="email" placeholder="id_email" class="inputs" required value="<?php if(isset($email)){echo $email;} ?>" >
            <p class="erreur">
                <?php if(isset($message)){echo $message;}?>
            </p>
            <input type="password"name="pwd" value =  "<?php if(isset($pwd)){echo $pwd;} ?>" minlength=8 maxlength=15 placeholder="mot de passe"class="inputs" required>
            <input type="password"name="pwd_validation" value =  "<?php if(isset($pwd_validation)){echo $pwd_validation;} ?>" minlength=8 maxlength=15 placeholder="mot de passe"class="inputs" required>
            <p class="inscription">j'ai deja un compte <a href="connexion.php">se connecter</a></p>
            <div align="center">
                <button type="submit">Creer</button>
            </div>
        </form >
    </body>
</html>
