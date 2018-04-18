

<?php


$xslDoc = new DOMDocument();
$xmlDoc = new DOMDocument();
   $xmlDoc->validateOnParse = true;
   $xmlDoc->load(realpath ("resources\xml\dblp.xml"));
switch($_GET['type'])
{
      case "auteur": $file = 'resources\html\authors.htm';break;
      case "annee":  $file = 'resources\html\annees.html';break;
      case "titre":$xslDoc->load(realpath ("resources\xsl\Titres.xsl"));
                   $proc = new XSLTProcessor;
$proc->importStyleSheet($xslDoc);
$proc->transformToURI($xmlDoc, 'resources\html\titres.html');



      $file = 'resources\html\titres.html';break;

 case "key":$xslDoc->load(realpath ("resources\xsl\keys.xsl"));
                   $proc = new XSLTProcessor;
$proc->importStyleSheet($xslDoc);
$proc->transformToURI($xmlDoc, 'resources\html\keys.html');
 $file='resources\html\keys.html';break;


      default:break;
}





?>








    <?php include("resources\html\Navbar.html"); ?>
    <br/>
    <div style="margin-left: 80px;">
            
            <form class="form-inline " action="/xmlproject/RechercheResult.php" method="post">
            <label style="margin-right: 10px;font: bold;">Author </label>
    <?php include($file); ?>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-left: 10px;"">Search</button>
  </form>
        <div>
    </body>
</html>