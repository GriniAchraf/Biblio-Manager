
<?php
$file = 'resources\xsl\resultatRecherche.xsl';
$xmlDoc = new DOMDocument();
   $xmlDoc->validateOnParse = true;
   $xmlDoc->load(realpath ("resources\xml\dblp.xml"));

if(isset($_POST['choix']))
{ 
  $query="dblp/article[author='".$_POST['choix']."']";

}
if(isset($_POST['key']))
{ 
  $query="dblp/article[@key='".$_POST['key']."']";
}
if(isset($_POST['title']))
{ 
  $query="dblp/article[contains(title/text(),'".substr(trim($_POST['title']),0,15)."')]";
}
if(isset($_POST['year']))
{ 
  $query="dblp/article[year='".$_POST['year']."']";
}



file_put_contents($file,str_replace('XPATH_QUERY',$query,file_get_contents($file)));
   $xslDoc = new DOMDocument();
   $xslDoc->load(realpath ($file));

   
// Configuration du transformateur
$proc = new XSLTProcessor;
$proc->importStyleSheet($xslDoc); // attachement des règles xsl

$proc->transformToURI($xmlDoc, 'resources\html\out.html');
file_put_contents($file,str_replace($query,'XPATH_QUERY',file_get_contents($file)));
?>

    <?php include("resources\html\Navbar.html"); ?>
    <br/>
    <div style="margin: 10px;">
            
        
         <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Key</th>
      <th scope="col">Type</th>
      <th scope="col">Auteurs</th>
      <th scope="col">Titre</th>
      <th scope="col">Année</th>
      <th scope="col">Volume</th>
      <th scope="col">Journal</th>
      <th scope="col">ee</th>
      
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    
      
    
   <?php include("resources\html\out.html"); ?>
  </tbody>
</table>
        <div>
    </body>
</html>