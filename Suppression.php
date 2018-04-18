

<?php


switch($_GET['type'])
{
      case "auteur": $file = 'resources\html\authors.htm';break;
      case "annee":  $file = 'resources\html\annees.html';break;
      case "titre":$file = 'resources\html\titres.html';break;

 case "key":$file='resources\html\keys.html';break;


      default:break;
}





?>








    <?php include("resources\html\Navbar.html"); ?>
    <br/>
    <div style="margin-left: 80px;">
            
            <form class="form-inline " action="/xmlproject/SuppressionResult.php" method="post">
            <label style="margin-right: 10px;font: bold;">Author </label>
    <?php include($file); ?>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left: 10px;"">Supprimer</button>
  </form>
        <div>
    </body>
</html>