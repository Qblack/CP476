<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Publisher</th>
                    <th>Publish Date</th>
                    <th>Description</th>
                    <th>Location</th>
                </tr>
            </thead>

            <!-- insert each name and paragraph element value -->
            <!-- into a table row. -->
            <xsl:for-each select = "/bookshelf/book">
                <xsl:sort select ="publishdate" data-type ="number" order = "descending"/>
                <tr>
                    <td><xsl:value-of select = "author"/></td>
                    <td><xsl:value-of select = "title"/></td>
                    <td><xsl:value-of select = "publisher"/></td>
                    <td><xsl:value-of select = "publishdate"/></td>
                    <td><xsl:value-of select = "description"/></td>
                    <td><xsl:value-of select = "location"/></td>
                </tr>
            </xsl:for-each>
        </table>
    </xsl:template>
</xsl:stylesheet>