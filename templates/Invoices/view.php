<table cellspacing="0" border="0">
  <tr> 
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=6 height="60" align="center" valign=center bgcolor="#FFFFFF"><font color="#000000">
      <img src="/img/logo.jpg" width=200 height=200 > </font></td>
    <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=10 align="center" valign=bottom bgcolor="#FFFFFF"><font size="+2"><b> 
      <?= $fromid->name ?>
      </b></font></td>
    <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font color="#000000" size="-2">ORIGINAL 
      FOR RECEIPIENT</font></td>
    <td width="98" align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td height="40" colspan=10 align="center" valign=bottom bgcolor="#FFFFFF" style="border-left: 1px solid #000000; border-right: 1px solid #000000"><font color="#000000">&nbsp; 
      </font><font size=""><b> 
      <?= $fromid->address ?>
      </b></font></td>
    <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle bgcolor="#FFFFFF"><font color="#000000" size="-2">DUPLICATE 
      FOR SUPPLIER/TRANSPORTER</font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=10 align="center" valign=bottom bgcolor="#FFFFFF"><font size=""><b> 
      <?= $fromid->district->name .'-'. $fromid->pinno.' , '  .$states[$fromid->state_id]?>
      </b></font></td>
    <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=4 align="center" valign=middle bgcolor="#FFFFFF"><b><font size=4 color="#000000">TAX 
      INVOICE</font></b></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=10 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000">WWW.FRIENDSNETINDIA.COM, 
      EMAIL – 
      <?= $fromid->email ?>
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=10 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000">PH 
      NO – 
      <?= $fromid->mobile ?>
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td width="195" align="left" valign=bottom bgcolor="#FFFFFF" style="border-bottom: 1px solid #000000"><b><font color="#000000">PAN 
      No:-</font></b></td>
    <td style="border-bottom: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000"> 
      <?= $fromid->pan ?>
      
      </font></td>
    <td width="84" align="left" valign=bottom bgcolor="#FFFFFF" style="border-bottom: 1px solid #000000"><b><font color="#000000">GST 
      No:-</font></b></td>
    <td style="border-bottom: 1px solid #000000" colspan=2 align="center" valign=bottom><font color="#000000">
      <?= $fromid->gst ?>
      </font></td>
    <td style="border-bottom: 1px solid #000000" colspan=4 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000"><b><font color="#000000">STATE</font></b> 
      : 
      <?= $states[$fromid->state_id].':'. $fromid->state_id?>
      </font></b></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td width="135" height="19" align="left" valign=bottom bgcolor="#558ED5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000"><font color="#000000">&nbsp;
      </font></td>
    <td width="273" align="left" valign=bottom bgcolor="#558ED5" style="border-bottom: 1px solid #000000"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td width="89" align="left" valign=bottom bgcolor="#558ED5" style="border-bottom: 1px solid #000000"><font color="#000000">&nbsp;
      </font></td>
    <td width="44" align="left" valign=bottom bgcolor="#558ED5" style="border-bottom: 1px solid #000000"><b><font color="#000000">
      </font></b></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td width="97" align="left" valign=bottom bgcolor="#558ED5" style="border-bottom: 1px solid #000000"><font color="#000000">&nbsp;
      </font></td>
    <td width="91" align="left" valign=bottom bgcolor="#558ED5" style="border-bottom: 1px solid #000000"><font color="#000000">&nbsp;
      </font></td>
    <td width="64" align="left" valign=bottom bgcolor="#558ED5" style="border-bottom: 1px solid #000000"><font color="#000000">&nbsp;
      </font></td>
    <td width="52" align="left" valign=bottom bgcolor="#558ED5" style="border-bottom: 1px solid #000000"><b><font color="#000000">
      </font></b></td>
    <td width="51" align="left" valign=bottom bgcolor="#558ED5" style="border-bottom: 1px solid #000000"><font color="#000000">&nbsp;
      </font></td>
    <td width="96" align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td width="74" align="left" valign=bottom bgcolor="#558ED5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000"><b><font color="#000000">
      </font></b></td>
    <td width="78" align="left" valign=bottom bgcolor="#558ED5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000"><font color="#000000">&nbsp;
      </font></td>
    <td width="113" align="left" valign=bottom bgcolor="#558ED5" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td height="19" colspan="5" align="left" valign=middle bordercolor="#000000" bgcolor="#CCCCCC" style="border-left: 2px solid #000000"><b><font color="#000000">DETAILS 
      OF RECEIVER (BILL TO):-</font></b><font color="#000000">&nbsp;
      </font><font color="#000000">&nbsp;</font></td>
    <td colspan="6" align="left" valign=middle bordercolor="#000000" bgcolor="#CCCCCC" style="border-left: 1px solid #000000"><b><font color="#000000">DETAILS 
      OF CONSIGNEE (SHIPPED TO)</font></b><font color="#000000">&nbsp;</font></td>
    <td align="left" valign=middle bordercolor="#000000" bgcolor="#CCCCCC" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000"><b><font color="#000000">TOTAL 
      BV:</font></b></td>
    <td colspan=2 align="left" valign=middle bordercolor="#000000" bgcolor="#CCCCCC" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" sdval="600" sdnum="1033;"><b><font color="#000000">600</font></b></td>
    <td align="left" valign=middle bordercolor="#000000" bgcolor="#CCCCCC" style="border-bottom: 1px solid #000000; border-right: 1px solid #000000">&nbsp;</td>
    <td align="left" valign=bottom>&nbsp;</td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000" height="19" align="left" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">NAME:-</font></b></td>
    <td style="border-top: 1px solid #000000" colspan=2 align="left" valign=middle bgcolor="#FFFFFF"><font color="#000000"><?= $toid->name ?></font></font></td>
    <td colspan="2" align="left" valign=middle><font color="#000000">(<?= $toid->id ?>)</font><font color="#000000">&nbsp;
      </font></td>
    <td colspan="6" align="left" valign=middle bgcolor="#FFFFFF" style="border-left: 1px solid #000000"><b><font color="#000000">NAME:-</font></b><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF">&nbsp;</td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" colspan=2 align="center" valign=middle sdval="600" sdnum="1033;">&nbsp;</td>
    <td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><font color="#FFFFFF">&nbsp;
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000" height="19" align="left" valign=top bgcolor="#FFFFFF"><b><font color="#000000">ADDRESS:-</font></b></td>
    <td colspan=4 rowspan="2" align="left" valign=top bgcolor="#FFFFFF" style="border-right: 1px solid #000000"><font color="#000000"><?= $addl['address'] ?></font></td>
    <td colspan="6" align="left" valign=top bgcolor="#FFFFFF" style="border-left: 1px solid #000000"><b><font color="#000000">ADDRESS:-</font></b><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><font size="-1"><b><font color="#000000">DATE:-</font></b></font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000" height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-left: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td colspan="2" align="left" valign=bottom bgcolor="#FFFFFF" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000"><font size="-1"><b><font color="#000000">INVOICE 
      NO:-</font></b><comment></comment><font color="#000000">
      </font></font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><comment>FNI20-21/0001</comment> 
      <font color="#000000"></font>
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000" height="19" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">DIST.</font></b></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><?= $addl['dist'] ?></font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">PIN No:-</font></b></td>
    <td align="right" valign=bottom bgcolor="#FFFFFF"><font color="#000000"><?=$addl['pinno'] ?></font></td>
    <td style="border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td colspan="2" align="left" valign=bottom bgcolor="#FFFFFF" style="border-left: 1px solid #000000"><b><font color="#000000">DIST.</font></b><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td colspan="3" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">PIN 
      No:-</font></b><font color="#000000">&nbsp;
      </font><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><font size="-1"><b><font color="#000000">STATE 
      CODE:</font></b></font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF" sdval="20" sdnum="1033;"><font color="#000000">20</font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000" height="19" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">PHONE 
      No:-</font></b></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF" sdval="8986666755" sdnum="1033;"><font color="#000000">8986666755</font></td>
    <td align="left" valign=bottom><b><font color="#000000">STATE:-</font></b></td>
    <td colspan="2" align="right" valign=bottom bgcolor="#FFFFFF"><font color="#000000">JHARKHAND</font><font color="#000000">&nbsp;
      </font></td>
    <td colspan="3" align="left" valign=bottom bgcolor="#FFFFFF" style="border-left: 1px solid #000000"><b><font color="#000000">PHONE 
      No:-</font></b><font color="#000000">&nbsp;
      </font><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">STATE:-</font></b></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><font size="-1"><b><font color="#000000">MODE 
      OF TRANSPORT:</font></b></font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">SELF</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="19" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">GST 
      No:-</font></b></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">GST 
      NO VALUE</font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">PAN 
      No:-</font></b></td>
    <td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">PAN 
      VALUE</font></td>
    <td colspan="3" align="left" valign=bottom bgcolor="#FFFFFF" style="border-bottom: 1px solid #000000; border-left: 1px solid #000000"><b><font color="#000000">GST 
      No:-</font></b><font color="#000000">&nbsp;
      </font><font color="#000000">&nbsp;
      </font></td>
    <td colspan="3" align="left" valign=bottom bgcolor="#FFFFFF" style="border-bottom: 1px solid #000000"><b><font color="#000000">PAN 
      No:-</font></b><font color="#000000">&nbsp;
      </font><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=2 align="left" valign=bottom bgcolor="#FFFFFF"><font size="-1"><b><font color="#000000">PAYMENT 
      MODE:-</font></b></font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">CASH</font></td>
    <td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000" height="19" align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="center" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" rowspan=2 height="43" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Sr. 
      NO</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" rowspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI" size=1>Discreption 
      of Goods</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">HSN</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Qty</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" rowspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Rate</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" rowspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Amount</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" rowspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Less 
      Deduction</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" rowspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Taxable 
      Value</font></b></td>
    <td style="border-top: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">SGST</font></b></td>
    <td style="border-top: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">CGST</font></b></td>
    <td style="border-top: 1px solid #000000" colspan=2 align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">IGST</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" rowspan=2 align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">TOTAL</font></b></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-bottom: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Rate 
      %</font></b></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Amount</font></b></td>
    <td style="border-bottom: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Rate 
      %</font></b></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Amount</font></b></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Rate 
      %</font></b></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=middle bgcolor="#FFFFFF"><b><font face="Segoe UI">Amount</font></b></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="64" align="center" valign=middle bgcolor="#FFFFFF" sdval="1" sdnum="1033;"><font face="Segoe UI">1</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">FNI 
      ALOEPAN JUICE (HIGH FIBER) 1000ML</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="3004" sdnum="1033;"><font face="Segoe UI">3004</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="2" sdnum="1033;"><font face="Segoe UI">2</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF" sdval="669.65" sdnum="1033;"><font face="Segoe UI">669.65</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF" sdval="1339.3" sdnum="1033;"><font face="Segoe UI">1339.3</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">-</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF" sdval="1339.3" sdnum="1033;"><font face="Segoe UI">1339.3</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF" sdval="0.06" sdnum="1033;0;0%"><font face="Segoe UI">6%</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹80.36</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF" sdval="0.06" sdnum="1033;0;0%"><font face="Segoe UI">6%</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹80.36</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;0;0%"><font face="Segoe UI">0%</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹0.00</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹1500.00</font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=3 height="27" align="center" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">Total</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="2" sdnum="1033;"><font face="Segoe UI">2</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹1,339.30</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹1,339.30</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹80.36</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹80.36</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹0.00</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹1500.00</font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=11 height="27" align="left" valign=middle bgcolor="#FFFFFF"><b>FREE 
      (SAMPLE/OFFER/SCHEME):-</b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=3 align="right" valign=middle bgcolor="#FFFFFF"><b>DISCOUNT</b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹0.00</font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000" height="27" align="left" valign=bottom bgcolor="#FFFFFF"></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF" sdnum="1033;0;0%"></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" colspan=3 align="right" valign=middle bgcolor="#FFFFFF"><b>Net 
      Payable Amount</b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="right" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹1500.00</font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=11 height="19" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">INVOICE 
      TOTAL (IN WORDS) :-</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="19" align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#558ED5"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-top: 1px solid #000000; border-left: 1px solid #000000" height="19" align="left" valign=bottom bgcolor="#FFFFFF"><b><u><font color="#000000">Terms 
      &amp; Conditions:-</font></u></b></td>
    <td style="border-top: 1px solid #000000" align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000" align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">
      </font></b></td>
    <td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">Payment 
      By A/C Payee Cheque/Draft Only.</font></td>
    <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=6 rowspan=3 align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">For, 
      FNI ONLINE MARKETING PVT. LTD.</font></b></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">TAX 
      DETAILS:-</font></b></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">Seller 
      is Not Responsible of Any Loss or Damage of Goods in Transit</font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">CGST</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">SGST</font></b></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><b><font color="#000000">IGST</font></b></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">The 
      Scheme Product in The Invoice Can Not be Returned or Exchanged</font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹80.36</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF"><font face="Segoe UI">₹80.36</font></td>
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle bgcolor="#FFFFFF" sdval="0" sdnum="1033;0;0.00"><font color="#000000">0.00</font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">Any 
      Inaccuracy in This Bill Must be Notified Immidetly on Its Receipt</font></td>
    <td style="border-left: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">
      </font></b></td>
    <td align="left" valign=bottom><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=5 height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">Disputes 
      if Any Will be Subject to Ranchi Court Jurisdiction</font></td>
    <td style="border-left: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">Authorised 
      Signatury</font></b></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-right: 1px solid #000000" align="left" valign=bottom><b><font face="Arial" color="#222222">E&amp;EO</font></b></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font size=1 color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=15 height="19" align="center" valign=middle bgcolor="#92D050"><b><font color="#FFFFFF">Corporate 
      Office :- HOUSE NO – 85/B-4, RING ROAD KAMRE, RANCHI – 835222, WWW.FRIENDSNETINDIA.COM, 
      EMAIL – FNIONLINEMARKETING@GMAIL.COM, PH NO – 9508108530</font></b></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td style="border-top: 1px solid #000000" colspan=15 height="19" align="center" valign=bottom bgcolor="#FFFFFF"><b><font color="#000000">This 
      is Computer Generated Invoice</font></b></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
  <tr> 
    <td height="19" align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
    <td align="left" valign=bottom bgcolor="#FFFFFF"><font color="#000000">&nbsp;
      </font></td>
  </tr>
</table>
