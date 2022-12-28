<?php
//session_start()
if( isset($_POST["email"]) && isset($_POST["pwd"])){
    $email=$_POST["email"];
    $pwd = $_POST["pwd"];
    $servername='localhost';
    $dbname = "dossierpatientbd";
    $username='root';
    $password='';
    $message='';

    try{
        // etablir la connexion avec la base de donnée
        $conn= new PDO("mysql:host=$servername;dbname=$dbname",  $username, $password);
        //on defini le mode d'erreurde PDO sur exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    //capture des exception si une cennexion est lance et affiche
    catch (PDOException $e){
        echo"erreur : ".$e->setMessage();
    }

    try{

        $requet=$conn->prepare("SELECT*from compte where email==$email and mot_de_passe==$pwd)");
        $requet<-execute(array($email,$pwd));
        header("location: accueil.html");
        }
    catch(PDOException $d){
        $message="Ce compte n'existe. " ;
    }

}?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>

            connexion
        </title>

        <link rel="stylesheet" href="public/css/moncss2.css">
        <link rel="stylesheet" href="roboto/Roboto-Italic.ttf">
        <link rel="stylesheet" href="roboto/Roboto-Light.ttf">
    </head>
    <body>
        <form action="connexion.php">
            <h1>Login</h1>
            <input type="email"name="email" placeholder="email"class="inputs"require value="<?php if(isset($email)){echo $email;} ?>">
            <input type="password"name="pwd" placeholder="mot de passe"class="inputs"require value =  "<?php if(isset($pwd)){echo $pwd;} ?>">
            <p class="erreur">
                <?php if(isset($message)){echo $message;}?>
            </p>
            <p class="inscription">je n'ai pas de compte <a href="formcreercompte.php">creer un compte</a></p>
            <div align="center">
                <button type="submit">se connecter</button>
            </div>
        </form>
    </body>
</html>
