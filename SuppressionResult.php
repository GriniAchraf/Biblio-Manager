
<?php
$file = 'resources\xsl\resultatSuppression.xsl';
$xmlDoc = new DOMDocument();
   $xmlDoc->validateOnParse = true;
   $xmlDoc->load(realpath ("resources\xml\dblp.xml"));

if(isset($_POST['choix']))
{ 
  $query="dblp/article[not(author='".trim($_POST['choix'])."')]";

}
if(isset($_POST['key']))
{ 
  $query="dblp/article[@key!='".$_POST['key']."']";
}
if(isset($_POST['title']))
{ 
  $query="dblp/article[not(contains(title/text(),'".substr(trim($_POST['title']),0,15)."'))]";
}
if(isset($_POST['year']))
{ 
  $query="dblp/article[year!='".$_POST['year']."']";
}



file_put_contents($file,str_replace('XPATH_QUERY',$query,file_get_contents($file)));
   $xslDoc = new DOMDocument();
   $xslDoc->load(realpath ($file));

   
// Configuration du transformateur
$proc = new XSLTProcessor;
$proc->importStyleSheet($xslDoc); // attachement des règles xsl

$proc->transformToURI($xmlDoc, 'resources\xml\dblp.xml');
file_put_contents($file,str_replace($query,'XPATH_QUERY',file_get_contents($file)));
?>
    <?php include("resources\html\Navbar.html"); ?>
    <br/><div style="text-align: center;">
        <h2>Suppression effectuée avec succès</h2>
     
        <div>
    </body>
</html>