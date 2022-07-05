<?php
require "db.php";

if(isset($_FILES['excel']['name']))
{
  $con=mysqli_connect($host,$user,"",$pass);
  include "xlsx.php";
  if($con)
  {
      $excel=SimpleXLSX::parse($_FILES['excel']['tmp_name']);
      for ($sheet=0; $sheet < sizeof($excel->sheetNames()) ; $sheet++)
      {
          $rowcol=$excel->dimension($sheet);
          $i=0;
          if($rowcol[0]!=1 && $rowcol[1]!=1)
          {
              foreach ($excel->rows($sheet) as $key => $row)
              {
                  if($key == 0) // skips header
                      continue;
                  $q="";
                  foreach ($row as $key => $cell) {

                      $q.="'".$cell. "',";
                 }

                  $query="INSERT INTO students (StName, StID, StNationality, SName, StGrade, StMobile, StEmail)
                      values (".rtrim($q,",").");";
                  if(mysqli_query($con,$query))
                  {
                      echo '<script language="javascript">';
  					echo 'alert("Records added successfully!")';
  					echo "</script>";
  					header("Location: students.php");
                  }
                  else
                  {
                     	echo '<script language="javascript">';
  					echo 'alert("Records were not added!")';
  					echo("Error Description: " . mysqli_error($con));
  					echo "</script>";
  					header("Location: studentsImport.php");
                  }
                  $i++;
              }
          }
       }
  }
}
?>
