<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
  </head>
  <body>
    <?php
    include('./cfg/config.inc.php');
    echo "<h3>ETK AG ESR (Einzahlungschein mit Referenznzummer)</h3>";
    echo "<table>";
    echo "<form name='esr' action='esr.php' method='post'>";
    
    echo "<tr><td colspan='2'>Bankangaben:</td></tr>";
    echo "<tr><td>Name</td><td><input type='text' name='bank_name' value='$g_bank_name'></td></tr>";
    echo "<tr><td>Street</td><td><input type='text' name='bank_street' value='$g_bank_street'></td></tr>";
    echo "<tr><td>PLZ/Ort</td><td><input type='text' size='4' name='bank_plz' value='$g_bank_plz'>/<input type='text' name='bank_city' value='$g_bank_city'></td></tr>";
    echo "<tr><td>Kontonummer</td><td><input type='text' name='bank_account' value='$g_bank_account'></td></tr>";
    echo "<tr><td>Bankkundenidentifikation</td><td><input type='text' name='bank_customerid' value='$g_bank_customer_identification'></td></tr>";
    
    echo "<tr><td colspan='2'>Firmenangaben:</td></tr>";
    echo "<tr><td>Firma</td><td><input type='text' name='company_name' value='$g_company_name'></td></tr>";
    echo "<tr><td>Strasse</td><td><input type='text' name='company_street' value='$g_company_street'></td></tr>";
    echo "<tr><td>PLZ/Ort</td><td><input size='4' type='text' name='company_plz' value='$g_company_plz'>/<input type='text' name='company_city' value='$g_company_city'></td></tr>";
    echo "<tr><td colspan='2'>Kundenangaben:</td></tr>";
    
    echo "<tr><td>Kundennummer</td><td><input size='5' type='text' name='debitor_id'></td></tr>"; 
    echo "<tr><td>Name</td><td><input type='text' name='debitor_lastname'></td></tr>"; 
    echo "<tr><td>Vorname</td><td><input type='text' name='debitor_firstname'></td></tr>"; 
    echo "<tr><td>Strasse</td><td><input type='text' name='debitor_street'></td></tr>"; 
    echo "<tr><td>PLZ/Ort</td><td><input size='4' type='text' name='debitor_plz'>/<input type='text' name='debitor_city'></td></tr>";
    
    echo "<tr><td colspan='2'>Rechnung:</td></tr>";
    echo "<tr><td>Nummer</td><td><input size='5' type='text' name='payment_id'></td></tr>"; 
    echo "<tr><td>Jahr</td><td><input size='2' type='text' name='payment_year' value=".date('y')."></td></tr>"; 
    echo "<tr><td>Kontostelle</td><td><input size='1' type='text' name='payment_account'></td></tr>"; 
    echo "<tr><td>Betrag</td><td><input type='text' name='payment_amount'></td></tr>"; 
    echo "<tr><td>&nbsp;</td><td><input type='submit' name='send' value='ESR erstellen'></td></tr>"; 
    
    echo "</form>";
    echo "</table>";
    
    ?>
  </body>
</html>
