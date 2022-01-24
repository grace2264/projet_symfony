<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.boostrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Formulaire_inscription</title>
</head>
<body>
    <div align="center">
        <h2>Inscription</h2>
        <br /><br />
        <form method="POST" action="">
            <table>
                <tr>
                    <td align="right">
                        <label for="pseudo">Pseudo :</label>   
                    </td>
                    <td>   
                        <input type="text"placeholder="Votre pseudo" id="pseudo" name="pseudo />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                    <label for="mail">Mail :</label>   
                    </td>
                    <td>   
                        <input type="text"placeholder="Votre mail" id="pseudo" name="mail />
                    </td>
                </tr>
                <tr>
                    <label for="mail2">Confirmation_mail :</label>   
                    </td>
                    <td>  
                            <input type="text"placeholder="Votre mail_confirmation" id="mail_confirmation" name="mail_confirmation />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                    <label for="mdp">Mot de passe :</label>   
                    </td>
                    <td>   
                        <input type="text"placeholder="Votre mot de passe" id="mdp" name="mdp" />
                    </td>
                </tr>

            </table>           
        </form> 
    </div>
</body>
</html>