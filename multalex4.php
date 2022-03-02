
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet">




    <!--exercice4-->

    <h2>Une multiplication aleatoire</h2>
    <!-- Créer un formulaire avec form action = 'random.php' + méthode POST
-->
    <div class="container">
        <form action = 'random.php' method="post">
          
           
    <!--Créer une balise <label> et les balises php-->           
        
        <label for="multaleatoireex4">exercice4</label>
                <input type="checkbox" name="multaleatoireex4" id="multiplication-aleatoire"></input>
     
    <!--ajouter une balise input-->
           <input type="hidden"  name="reponse" value= "reponse"</input>
    
    <!--Ajouter un second input--> 
           <input type= "number" name="reponseJoueur"value="reponse2"</input>

    <!-- Ajouter un bouton de type submit qui appel le <form action = 'random.php'--> 
            <button class="btn btn-outline-success" type="submit">Search</button>
        </div>
    </form>
    






    
  
<script src="javascrpit/javascript.js"></script>






  