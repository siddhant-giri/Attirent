<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
<title>Product List</title>
<h2>Top Wedding Categories</h2>
	<table border="2">
	<tr bgcolor="#cccfff">
	<th align="center">Product_Id</th>
	<th align="center">Product_name</th>
	</tr>

	<xsl:for-each select="productdata/product">
	
	<tr>

	<td align="center"><xsl:value-of select="id"/></td>
	<td align="center"><xsl:value-of select="name"/></td>

	</tr>

	</xsl:for-each>
	</table>



	
	<h2>Top Festive Categories</h2>
	<table border="2">
	<tr bgcolor="#DAF7A6">
	<th align="center">Product_Id</th>
	<th align="center">Product_name</th>
	</tr>

	<xsl:for-each select="productdata/product">
	
	<tr>

	<td align="center"><xsl:value-of select="id"/></td>
	<td align="center"><xsl:value-of select="name"/></td>

	</tr>

	</xsl:for-each>
	</table>
</body>
</html>

</xsl:template>
</xsl:stylesheet>






