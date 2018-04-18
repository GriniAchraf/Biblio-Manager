
<?php
$file = 'resources\xsl\insertion.xsl';
$xmlDoc = new DOMDocument();
   $xmlDoc->validateOnParse = true;
   $xmlDoc->load(realpath ("resources\xml\dblp.xml"));



$key=$_POST['key'];
$authors=trim($_POST['authors']);
$authors=substr($authors, 0,strlen($authors)-1);
$authorsArray=explode(";",$authors);
$result="";
foreach ($authorsArray as $key => $value) {
  $result.="<foo:var>".$value."</foo:var>";
}
  

$titre=trim($_POST['titre']);

$annee=$_POST['annee'];
$url=trim($_POST['url']);

file_put_contents($file,str_replace('#ITEMS',$result,file_get_contents($file)));
file_put_contents($file,str_replace('#KEY',$_POST['key'],file_get_contents($file)));
file_put_contents($file,str_replace('#TITLE',$titre,file_get_contents($file)));
file_put_contents($file,str_replace('#YEAR',$_POST['annee'],file_get_contents($file)));
file_put_contents($file,str_replace('#URL',$url,file_get_contents($file)));
file_put_contents($file,str_replace('#PUBLTYPE',$_POST['publtype'],file_get_contents($file)));
file_put_contents($file,str_replace('#VOLUME',$_POST['volume'],file_get_contents($file)));
file_put_contents($file,str_replace('#JOURNAL',$_POST['journal'],file_get_contents($file)));
file_put_contents($file,str_replace('#EE',$_POST['ee'],file_get_contents($file)));
$xslDoc = new DOMDocument();
   $xslDoc->load(realpath ($file));

   
// Configuration du transformateur
$proc = new XSLTProcessor;
$proc->importStyleSheet($xslDoc); // attachement des règles xsl

$proc->transformToURI($xmlDoc, 'resources\xml\dblp.xml');
$backup='resources\xsl\insertionBackUp.xsl';
file_put_contents($file,file_get_contents($backup));
file_put_contents('resources\html\titres.html',file_get_contents('resources\html\titres.html')."");
?>
    <?php include("resources\html\Navbar.html"); ?>
    <br/><div style="text-align: center;">
        <h2>Insertion effectuée avec succès</h2>
     
        <div>
    </body>
</html>