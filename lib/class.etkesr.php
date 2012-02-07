<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class
 *
 * @author christian
 */
class etkesr {
//put your code here
  public function getReferenceNumber($paymentnumber,$year,$account,$debitorid){
    return sprintf("%05s",$paymentnumber)."00".$year.$account.$debitorid;
  }
  
}
?>
