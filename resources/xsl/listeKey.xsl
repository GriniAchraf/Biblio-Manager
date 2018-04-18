<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:php="http://php.net/xsl" xmlns="http://www.w3.org/1999/xhtml">

    <xsl:output 
        method="html"
        encoding="UTF-8"
        doctype-public="-//W3C//DTD HTML 4.01//EN"
        
        indent="yes" />

        <xsl:template match="/">

    <ul class="list-group">
        <xsl:for-each select="//article">
            <xsl:sort select ="@key"  order="ascending"/>
        <li class="list-group-item"><xsl:value-of select="@key" /></li>
        </xsl:for-each>
        </ul>

    </xsl:template>
    </xsl:stylesheet>