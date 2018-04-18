<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output 
        method="html"
        encoding="UTF-8"
        doctype-public="-//W3C//DTD HTML 4.01//EN"
        doctype-system="http://www.w3.org/TR/html4/strict.dtd"
        indent="yes" />

        <xsl:template match="/">

    <ul class="list-group">
        <xsl:for-each select="dblp/article/author[not(preceding::author/. = .)]">
            <xsl:sort select ="." data-type="text" order="ascending"/>
        <li class="list-group-item"><xsl:value-of select="." /></li>
        </xsl:for-each>
        </ul>

    </xsl:template>
    </xsl:stylesheet>