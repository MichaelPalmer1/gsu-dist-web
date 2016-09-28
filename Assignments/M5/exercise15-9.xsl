<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <style type="text/css">
                    td, th {
                        border-top: 1px solid black;
                        border-left: 1px solid black;
                    }
                    td:last-child, th:last-child {
                        border-right: 1px solid black;
                    }
                    tr:last-child td {
                        border-bottom: 1px solid black;
                    }
                </style>
            </head>
            <body>
                <table cellspacing="0">
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                    <xsl:for-each select="product/*">
                        <tr>
                            <td><xsl:value-of select="name(.)" /></td>
                            <td><xsl:value-of select="." /></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
