<!DOCTYPE html>
<html lang=fr>
    <head>
        <meta charset="utf-8">
        <title> FileShare</title>
    </head>
    <body>
        <div>
            <center class="titre">
                <h1 style="color: black;">
                   <label for="">FileShare</label> 
                </h1>
                <i></i>
                <a href="#"></a>   
            </center>
        </div>
        <div>
            <center>
            
            <p style="front-size: 10px"> Partage tes fichiers plus <br> vite que la lumière
            </p>
            <br> 
            <h4>Veuillez vous inscrire afin de pouvoir partager <br> et
                recevoir des fichiers avec les autres membres</h4>
            <form method="post">
            <div>
                    <label for="mail"> Adresse mail: </label><br> 
                    <input type="email" id="email" placeholder="pierredupont@hotmail.fr"> 
            </div><br>
            <div>
                <label for="password"> Mot de passe: </label><br> 
                <input type="password" id="motdepasse" > 
            </div><br>
            <div> 
                <input type="submit" name="formsend" id="formsend">
            </div><br>
            <a href="register.html">
                Je n'ai pas de compte
            </a>
            </form>

            <?php   
                if(isset($_POST['formsend']))
                {
                echo "formulaire send";
                }
            ?>
            </center> 
            
            
            <footer>
                <center>
                <table>
                    <td>
                        <a href="Contact/contact.html">
                        Contact
                        </a>
                    </td>
                </table>
                </center>
            </footer>
        </div>
    </body>
</html>