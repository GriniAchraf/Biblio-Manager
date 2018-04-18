
<?php

$xslDoc = new DOMDocument();
$xmlDoc = new DOMDocument();
   $xmlDoc->validateOnParse = true;
   $xmlDoc->load(realpath ("resources\xml\dblp.xml"));
switch($_GET['type'])
{
      case "auteur": $file = 'resources\html\listeAuthor.html';break;
      case "annee":  $file = 'resources\html\listeAnnee.html';break;
      case "titre":$xslDoc->load(realpath ("resources\xsl\listeTitre.xsl"));
                   $proc = new XSLTProcessor;
$proc->importStyleSheet($xslDoc);
$proc->transformToURI($xmlDoc, 'resources\html\out.html');
$file='resources\html\out.html';break;

 case "key":$xslDoc->load(realpath ("resources\xsl\listeKey.xsl"));
                   $proc = new XSLTProcessor;
$proc->importStyleSheet($xslDoc);
$proc->transformToURI($xmlDoc, 'resources\html\out.html');
$file='resources\html\out.html';break;


      default:break;
}





?>

    <?php include("resources\html\Navbar.html"); ?>
    <br/>
    <div style="margin: 10px;">
            
        <h4> <?php   echo($_GET['type']);?></h4>
        <?php include($file); ?>
         
        <div>
    </body>
</html>