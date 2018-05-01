<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" 
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:template match="/">
    <html>
      <head>
        <link rel="stylesheet prefetch" href="https://meyerweb.com/eric/tools/css/reset/reset.css" />
        <link rel="stylesheet" href="invoice.css" />
      </head>
      <body>
        <img src="http://agena24.pl/Img.ashx?Id=9279" />
        <xsl:for-each select="invoice">
          <div class="number">
            <xsl:value-of select="number"/>
          </div>
          <div class="vendor">
            <xsl:value-of select="vendor"/>
          </div>
          <div class="vendor2">
            <xsl:value-of select="vendor2"/>
          </div>
          <div class="purchaser">
            <xsl:value-of select="purchaser"/>
          </div>
          <div class="purchaser2">
            <xsl:value-of select="purchaser2"/>
          </div>
          <div class="place">
            <xsl:value-of select="place"/>
          </div>
          <div class="day">
            <xsl:value-of select="day"/>
          </div>
          <div class="month">
            <xsl:value-of select="month"/>
          </div>
          <div class="year">
            <xsl:value-of select="year"/>
          </div>
          <xsl:for-each select="item">
            <xsl:if test="no = 1">
              <div class="row1 no">
                <xsl:value-of select="no"/>
              </div>
              <div class="row1 name">
                <xsl:value-of select="name"/>
              </div>
              <div class="row1 measure">
                <xsl:value-of select="measure"/>
              </div>
              <div class="row1 quantity">
                <xsl:value-of select="quantity"/>
              </div>
              <div class="row1 price">
                <xsl:value-of select="price"/>
              </div>
              <div class="row1 price_total" id="price1">
                <xsl:value-of select="price_total"/>
              </div>
            </xsl:if>
            <xsl:if test="no = 2">
              <div class="row2 no">
                <xsl:value-of select="no"/>
              </div>
              <div class="row2 name">
                <xsl:value-of select="name"/>
              </div>
              <div class="row2 measure">
                <xsl:value-of select="measure"/>
              </div>
              <div class="row2 quantity">
                <xsl:value-of select="quantity"/>
              </div>
              <div class="row2 price">
                <xsl:value-of select="price"/>
              </div>
              <div class="row2 price_total" id="price2">
                <xsl:value-of select="price_total"/>
              </div>
            </xsl:if>
            <xsl:if test="no = 3">
              <div class="row3 no">
                <xsl:value-of select="no"/>
              </div>
              <div class="row3 name">
                <xsl:value-of select="name"/>
              </div>
              <div class="row3 measure">
                <xsl:value-of select="measure"/>
              </div>
              <div class="row3 quantity">
                <xsl:value-of select="quantity"/>
              </div>
              <div class="row3 price">
                <xsl:value-of select="price"/>
              </div>
              <div class="row3 price_total" id="price3">
                <xsl:value-of select="price_total"/>
              </div>
            </xsl:if>
            <xsl:if test="no = 4">
              <div class="row4 no">
                <xsl:value-of select="no"/>
              </div>
              <div class="row4 name">
                <xsl:value-of select="name"/>
              </div>
              <div class="row4 measure">
                <xsl:value-of select="measure"/>
              </div>
              <div class="row4 quantity">
                <xsl:value-of select="quantity"/>
              </div>
              <div class="row4 price">
                <xsl:value-of select="price"/>
              </div>
              <div class="row4 price_total" id="price4">
                <xsl:value-of select="price_total"/>
              </div>
            </xsl:if>
            <xsl:if test="no = 5">
              <div class="row5 no">
                <xsl:value-of select="no"/>
              </div>
              <div class="row5 name">
                <xsl:value-of select="name"/>
              </div>
              <div class="row5 measure">
                <xsl:value-of select="measure"/>
              </div>
              <div class="row5 quantity">
                <xsl:value-of select="quantity"/>
              </div>
              <div class="row5 price">
                <xsl:value-of select="price"/>
              </div>
              <div class="row5 price_total" id="price5">
                <xsl:value-of select="price_total"/>
              </div>
            </xsl:if>
          </xsl:for-each>
          <div class="price_total_total" id="price_total_total" />
          <div class="payment">
            <xsl:value-of select="payment"/>
          </div>
          <div class="bank">
            <xsl:value-of select="bank"/>
          </div>
          <div class="bank2">
            <xsl:value-of select="bank2"/>
          </div>
        </xsl:for-each>
        <script>
          var p1 = document.getElementById("price1");
          var p2 = document.getElementById("price2");
          var p3 = document.getElementById("price3");
          var p4 = document.getElementById("price4");
          var p5 = document.getElementById("price5");

          var sum = 0;
          if (!(p1 == null)) {
            sum += eval(p1.innerHTML);
          }
          if (!(p2 == null)) {
            sum += eval(p2.innerHTML);
          }
          if (!(p3 == null)) {
            sum += eval(p3.innerHTML);
          }
          if (!(p4 == null)) {
            sum += eval(p4.innerHTML);
          }
          if (!(p5 == null)) {
            sum += eval(p5.innerHTML);
          }

          var s = document.getElementById("price_total_total");
          s.innerHTML = sum;
        </script>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>