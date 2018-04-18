

<?php
$file = 'resources\xsl\modificationExtract.xsl';
$xmlDoc = new DOMDocument();
   $xmlDoc->validateOnParse = true;
   $xmlDoc->load(realpath ("resources\xml\dblp.xml"));


  $query="dblp/article[@key='".$_POST['key']."']";





file_put_contents($file,str_replace('XPATH_QUERY',$query,file_get_contents($file)));
   $xslDoc = new DOMDocument();
   $xslDoc->load(realpath ($file));

   
// Configuration du transformateur
$proc = new XSLTProcessor;
$proc->importStyleSheet($xslDoc); // attachement des règles xsl

$proc->transformToURI($xmlDoc, 'resources\html\modificationForm.html');
file_put_contents($file,str_replace($query,'XPATH_QUERY',file_get_contents($file)));
?>



    <?php include("resources\html\Navbar.html"); ?>
    <br/>
    <div style="margin-left: 80px;">
            
            <?php include("resources\html\modificationForm.html"); ?>
        <div>
    </body>
</html>