<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output 
        method="html"
        encoding="UTF-8"
        
        indent="yes" />

        <xsl:template match="/">

<form action="/xmlproject/ModificationOperation.php" method="post">
  

         <xsl:for-each select="XPATH_QUERY">
<div class="form-group col-lg-5">
    <label for="exampleInputEmail1">key</label>
<xsl:element name="input">
<xsl:attribute name= "type">text</xsl:attribute>
<xsl:attribute name= "class">form-control</xsl:attribute>
<xsl:attribute name= "name">key</xsl:attribute>
<xsl:attribute name= "value">

  <xsl:value-of select="@key" />

</xsl:attribute>

</xsl:element>

</div>






<div class="form-group col-lg-8">
    <label for="exampleInputPassword1">Authors</label>
<xsl:element name="input">
<xsl:attribute name= "type">text</xsl:attribute>
<xsl:attribute name= "class">form-control</xsl:attribute>
<xsl:attribute name= "name">authors</xsl:attribute>
<xsl:attribute name= "value">
<xsl:for-each select="author">
  <xsl:value-of select="." />;
</xsl:for-each>
</xsl:attribute>
</xsl:element>

</div>
  <div class="form-group col-lg-10">
    <label for="exampleInputPassword1">Titre</label>
<xsl:element name="input">
<xsl:attribute name= "type">text</xsl:attribute>
<xsl:attribute name= "class">form-control</xsl:attribute>
<xsl:attribute name= "name">titre</xsl:attribute>
<xsl:attribute name= "value">

  <xsl:value-of select="title" />

</xsl:attribute>
</xsl:element>
</div>
  <div class="form-group col-lg-3">
    <label for="exampleInputPassword1">Année</label>
<xsl:element name="input">
<xsl:attribute name= "type">text</xsl:attribute>
<xsl:attribute name= "class">form-control</xsl:attribute>
<xsl:attribute name= "name">annee</xsl:attribute>
<xsl:attribute name= "value">

  <xsl:value-of select="year" />

</xsl:attribute>
</xsl:element>
</div>
  <div class="form-group col-lg-5">
    <label for="exampleInputPassword1">url</label>
    <xsl:element name="input">
<xsl:attribute name= "type">text</xsl:attribute>
<xsl:attribute name= "class">form-control</xsl:attribute>
<xsl:attribute name= "name">url</xsl:attribute>
<xsl:attribute name= "value">

  <xsl:value-of select="url" />

</xsl:attribute>
</xsl:element>
</div>

          </xsl:for-each>
        
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
         </xsl:template>

</xsl:stylesheet>