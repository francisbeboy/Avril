<?php
$bdb = new PDO('mysql:host=localhost;dbname=de','francis','root');
if (isset($_POST['submit']))
    {
        if ((isset($_POST['name'])AND!empty($_POST['name'])) AND (isset($_POST['prenom'])
         AND !empty($_POST['prenom']))
         AND(isset($_POST['email']) AND
         !empty($_POST['email'])) AND
         (isset($_POST['phone'])
            AND !empty($_POST['phone'])) 
            AND (isset($_POST['password']) AND !empty($_POST['password'])) 
            AND (isset($_POST['passwordC']) AND!empty($_POST['passwordC'])))
     
            if (!empty($erreur)) 
            {
            echo "c'est bon ";

           }
        else{
                $erreur = "tu doi renseigner les champs";
            }
        }

        
           
            if (isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
     
     ?>










<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<title>s'inscrire</title>
<link rel="stylesheet" href="css/style">
</head>
<body style="background-color:beige">
    <div class="banner inner-banner" id="home">
    <div class="container">
        <div id="logo">
                <h1> <a href="index.html"><span class="fa fa-home" aria-hidden="true"></span> </span><span style="color:blue">B</span><span>P</span><span style="color: green">S</span></a> batti plus service</h1></a></h1>
            </div>
  <h1 style="margin: 30px auto;">s'inscrire</h1>
  <br>
    
    </div>
</div>
   
  <div class="container" style="color:#fdc;">
   
              <fieldset style="background-color:cadetblue;
                    margin: 30px auto; width: 100%;
                        height:100%">
                        <form action="" method="POST" style=" margin:30px auto ;width: 100%;margin-top:13px;font-weight: bold;font-size: 13px; ">
                            <div class="col-sm-4 col-sm-10 col-md-10 offset-1">
                            <div class="row">
                                 <div class="col-sm-4">
                                    <div class="row">
                                <label for="nom">Nom</label><br>
                                <input type="text" class="form-control" id="nom" name="name" placeholder="Entrez votre nom">
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="row">
                                    <label for="prenom">Prénoms</label><br>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom">
                                </div></div>
                             
                                        <div class="col-sm-4">
                                            <div class="row">
                                     
                                        <label for="email">email</label><br>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre mail">
                                     </div>
                                 </div>

                                <br>
                                <div class="col-sm-4">
                                            <div class="row">
                                     
                                        <label for="phone">phone</label><br>
                                        <input type="text"class="form-control" id="phone" name="phone" placeholder="Entrez votre numero">
                                     </div>
                                 </div>
                                    <div class="col-sm-4">
                                    <div class="row">

                                    <label for="password">Mot de passe</label><br>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre mot de passe">
                                </div>
                            </div>
                        <br>
                    <div class="col-sm-4">
                <div class="row">
                                    
                <label for="passwordC">Confirmez votre Mot de passe</label><br>
                    <input type="password" class="form-control" id="passwordC" name="mdpC" placeholder="Entrez à nouveau votre mot de passe">
                     </div>
                        </div>
                            <br>
                            
                                    <div class="col-sm-4">
                                            <div class="row">
                                            <label for="job">fonction</label><br>
                                         <input type="text" class=" form-control" id="job" name="job" placeholder="Votre fonction">
                                </div>
                            </div>
                                <br>
                                 <div class="col-sm-4">
                                        <div class="row">
                                            <label for="date">la date</label><br>
                                             <input type="date" class=" form-control" id="date" name="date">
                                        </div>
                                </div>
                                 <br><br>
                                  <i><b>NB:</b>tout les champs doit ètre reseignez!</i><br>
                                 <div class="col-sm-4">
                                    <div class="row">
                                    <input type="submit" name="submit" value="S'inscrire" class=" form-control btn btn-success">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    
                </fieldset>
            </div>
        </body>
    </html>
