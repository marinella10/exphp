Exercices 3 : Plusieurs tables a l'aide des checkbox




• Coté traitement : Créer un fichier checkbox.php
• A l’intérieur de vos balises <?php?>
• Vérifié l’existence de la super Globale $_POST['votreTableau']
• Assigner cette super Globale a une variable
• Dans une boucle foreach, récupérer votre tableau et créer un alias
• Dans une boucle for incrémenter un variable de 0 a 10
• Créer une variable résultat = $iterateur * les checkbox cochées
Affiche les résultats avec echo






<h2>  PLUSIEURS TABLES A L AIDE DE CHECKBOX</h2>
<!-- Dans HTML :Créer un formulaire avec form action = 'checkbox.php' + méthode POST-->
<div class="input-group mb-3">
<form action="checkbox.php" id="" method="post">
  <div class="input-group-prepend">
    <div class="input-group-text">


    <!--• Créer 10 checkbox avec leurs labels
    Pour chaque <input type='checkbox' /> ajouter un name='tableau[]' et sa value='de 1
a 10'-->
      <input type="checkbox" name = 'tableau []' value= 1  aria-label="Checkbox for following text input1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>

      <input type="checkbox" name = 'tableau []' value= 2 aria-label="Checkbox for following text input2">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
      
      <input type="checkbox" name = 'tableau []' value= 3 aria-label="Checkbox for following text input3">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    
      <input type="checkbox" name = 'tableau []' value= 4 aria-label="Checkbox for following text input4">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    
      <input type="checkbox" name =  'tableau []' value= 5 aria-label="Checkbox for following text input5">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
      
      <input type="checkbox" name = 'tableau []' value= 6 aria-label="Checkbox for following text input6">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
      
      <input type="checkbox" name = 'tableau []' value= 7 aria-label="Checkbox for following text input7">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
      
      <input type="checkbox" name = 'tableau []' value= 8 aria-label="Checkbox for following text input8">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>

      <input type="checkbox" name = 'tableau []' value= 9 aria-label="Checkbox for following text input9">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    
      <input type="checkbox" name = 'tableau []' value= 10 aria-label="Checkbox for following text input10">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
      
    </div>
  </form>
    
<!-- L'attribut name = tableau permet de sélectionner plusieurs checkbox avec chacune 
une valeur différente, chaque valeur est donc stockée dans un tableau récupérer par
la variable super Globale -->
<?php
$_POST['tableau[name]']
?>

<!-- Ajouter un bouton de type submit qui appel le form action='checkbox.php'-->
<button type="submit" name="btn-connexion" class="btn btn-primary">Connexion</button>


