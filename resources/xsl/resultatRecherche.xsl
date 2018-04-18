<?xml version="1.0" encoding="UTF-8" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output 
        method="html"
        encoding="UTF-8"
        doctype-public="-//W3C//DTD HTML 4.01//EN"
        doctype-system="http://www.w3.org/TR/html4/strict.dtd"
        indent="yes" />

        <xsl:template match="/">

         <xsl:for-each select="XPATH_QUERY">
          <tr>
            <th scope="row"><xsl:value-of select="@key" /></th>
      <td><xsl:value-of select="@publtype" /></td>
      <td><ul><xsl:for-each select="author">
         <li><xsl:value-of select="." /></li> 
</xsl:for-each>

      </ul></td>
      <td><xsl:value-of select="title" /></td>
      <td><xsl:value-of select="year" /></td>
      <td><xsl:value-of select="volume" /></td>
      <td><xsl:value-of select="journal" /></td>
      <td>

<xsl:element name="a">
     <xsl:attribute name= "href">
            <xsl:value-of select="ee" ></xsl:value-of>
            </xsl:attribute>
            <xsl:value-of select="ee" ></xsl:value-of>
            </xsl:element></td>


        
      
      <td> <xsl:value-of select="@mdate" ></xsl:value-of></td>
  </tr>
          </xsl:for-each>
        
         </xsl:template>

</xsl:stylesheet>