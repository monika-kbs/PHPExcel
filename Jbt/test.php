<?php 
require("config.php");
require_once  ('../Classes/PHPExcel/IOFactory.php');
 
if(isset($_POST['submit'])) {
    $table_name = $_POST['report_type'];
    $inputfilename = $_FILES["file"]["tmp_name"];
 
    $exceldata = array();
     
     
    //  Read your Excel workbook
    try
    {
        $inputfiletype = PHPExcel_IOFactory::identify($inputfilename);
        $objReader = PHPExcel_IOFactory::createReader($inputfiletype);
        $objPHPExcel = $objReader->load($inputfilename);
    }
    catch(Exception $e)
    {
        die('Error loading file "'.pathinfo($inputfilename,PATHINFO_BASENAME).'": '.$e->getMessage());
    }
     
    //  Get worksheet dimensions
    $sheet = $objPHPExcel->getSheet(0); 
    $highestRow = $sheet->getHighestRow(); 
    $highestColumn = $sheet->getHighestColumn();
     
    //  Loop through each row of the worksheet in turn
    for ($row = 1; $row <= $highestRow; $row++)
    { 
        //  Read a row of data into an array
        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
      
        //  Insert row data array into your database of choice here
      $sql = "INSERT INTO jbt_2017_users (user_id,first_name, last_name, test_type,count,verification_date,join_date,gender,phone,zip,ethnicity,dob,city,state)
          VALUES ('".$rowData[0][0]."', '".$rowData[0][1]."', '".$rowData[0][2]."', '".$rowData[0][3]."', '".$rowData[0][4]."', '".$rowData[0][5]."', '".$rowData[0][6]."','".$rowData[0][7]."','".$rowData[0][8]."','".$rowData[0][9]."','".$rowData[0][10]."','".$rowData[0][11]."','".$rowData[0][12]."','".$rowData[0][13]."')";
      
      if (mysqli_query($conn, $sql)) {
        $exceldata[] = $rowData[0];
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
 
} 
