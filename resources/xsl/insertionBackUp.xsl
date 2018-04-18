<?xml version="1.0" encoding="ISO-8859-1" ?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0"
                xmlns:foo="http://foo.com" exclude-result-prefixes="foo">

    <xsl:output 
        method="xml"
        encoding="ISO-8859-1"
        
        doctype-system="dblp.dtd"
        indent="yes" />
<foo:vars >
        #ITEMS
    </foo:vars>
         <xsl:template match="/">
          <dblp>


<article mdate="2018-04-16" key="#KEY" publtype="#PUBLTYPE">
    <xsl:for-each select="document('')/xsl:stylesheet/foo:vars/foo:var">
<xsl:element name="author"><xsl:value-of select="." ></xsl:value-of></xsl:element >
</xsl:for-each>
    <title>#TITLE</title>
    <year>#YEAR</year>
    <volume>#VOLUME</volume>
    <journal>#JOURNAL</journal>
    <ee>#EE</ee>
    <url>#URL</url>
  </article>



      <xsl:for-each select="//article">
<xsl:element name="article">
<xsl:attribute name= "mdate">
            <xsl:value-of select="@mdate" ></xsl:value-of>
            </xsl:attribute>

            <xsl:attribute name= "key">
            <xsl:value-of select="@key" ></xsl:value-of>
            </xsl:attribute>
<xsl:attribute name= "publtype">
            <xsl:value-of select="@publtype" ></xsl:value-of>
            </xsl:attribute>

<xsl:for-each select="author">
<xsl:element name="author"><xsl:value-of select="." ></xsl:value-of></xsl:element >
</xsl:for-each>

<xsl:element name="title"><xsl:value-of select="title" ></xsl:value-of></xsl:element >
<xsl:element name="year"><xsl:value-of select="year" ></xsl:value-of></xsl:element >
<xsl:element name="volume"><xsl:value-of select="volume" ></xsl:value-of></xsl:element >
<xsl:element name="journal"><xsl:value-of select="journal" ></xsl:value-of></xsl:element >
<xsl:element name="ee"><xsl:value-of select="ee" ></xsl:value-of></xsl:element >
<xsl:element name="url"><xsl:value-of select="url" ></xsl:value-of></xsl:element >
</xsl:element >



      </xsl:for-each>
      </dblp>
    </xsl:template>

    

</xsl:stylesheet>