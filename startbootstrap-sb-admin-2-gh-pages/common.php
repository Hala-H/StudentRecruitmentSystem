<?php
/**
 * Created by PhpStorm.
 * User: kc
 * Date: 11/29/2018
 * Time: 7:50 PM
 */

class Common
{
  public function uploadData($connection,$SName,$SType,$SStudentsTotal)
  {
      $mainQuery = "INSERT INTO schools(SName,SType,SStudentsTotal) VALUES('".$SName."','".$SType."',".$SStudentsTotal.")";
      $result1 = $connection->query($mainQuery) or die("Error in main Query".$connection->error);
      return $result1;
  }
}
?>