<?php

include_once('./lib/class.einzahlungsschein.php');
include_once('./lib/class.etkesr.php');

$etk = new etkesr();
$pdf = new FPDF();
$ezs = new createEinzahlungsschein(190, 0);
$ezs->setBankData($_POST['bank_name'], 
        $_POST['bank_plz']." ".$_POST['bank_city'], 
        $_POST['bank_account']);
$ezs->setRecipientData($_POST['company_name'], 
        $_POST['company_street'], 
        $_POST['company_plz']." ".$_POST['company_city'], 
        $_POST['bank_customerid']);
$ezs->setPayerData($_POST['debitor_firstname']." ".$_POST['debitor_lastname'], 
        $_POST['debitor_street'], 
        $_POST['debitor_plz']." ".$_POST['debitor_city'], 
        "Switzerland");
$ezs->setPaymentData($_POST['payment_amount'], 
        $etk->getReferenceNumber($_POST['payment_id'],
                $_POST['payment_year'],
                $_POST['payment_account'],
                $_POST['debitor_id']
        ));
$ezs->createEinzahlungsschein(true);

//output
$pdf->output();

//Create a A4 page in landscape mode and place the Einzahlungsschein 52mm from the top and 87mm from the left.
//The actual measurements may vary on your printer.
//$ezs = new createEinzahlungsschein(52, 87, false, "L", "A4");


?>