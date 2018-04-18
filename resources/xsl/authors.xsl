<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output 
        method="html"
        encoding="UTF-8"
        doctype-public="-//W3C//DTD HTML 4.01//EN"
        doctype-system="http://www.w3.org/TR/html4/strict.dtd"
        indent="yes" />

        <xsl:template match="/">
<select>
         <xsl:for-each select="dblp/article/author[not(preceding::author/. = .)]">
         	<xsl:sort select ="." data-type="text" order="ascending"/>
         	<xsl:element name="option">
     <xsl:attribute name= "value">
         	<xsl:value-of select="." ></xsl:value-of>
         	</xsl:attribute>
         	<xsl:value-of select="." ></xsl:value-of>
         	</xsl:element>
         	</xsl:for-each>
         </select>
         </xsl:template>

</xsl:stylesheet>