<?php 
require("config.php");
require_once  ('../Classes/PHPExcel/IOFactory.php');

if(isset($_POST['submit'])) {
   
    $table_name = $_POST['report_type'];
    $file = $_FILES["file"]["tmp_name"];

    $objPHPExcel = PHPExcel_IOFactory::load($file);

    foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
        $worksheetTitle     = $worksheet->getTitle();
        $highestRow         = $worksheet->getHighestRow(); // e.g. 10
        $highestColumn      = $worksheet->getHighestColumn(); // e.g 'F'
        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
        $nrColumns = ord($highestColumn) - 64;

        for ($row = 1; $row <= $highestRow; ++ $row) {
            
            for ($col = 0; $col < $highestColumnIndex; ++ $col) {
                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                $val = $cell->getValue();   
           

              
                echo "<pre>";
                print_r($val);
                echo "</pre>";
                // $insert = "INSERT INTO jbt_2017_users (first_name) VALUES ('$val[0]')";
                // $result = mysqli_query($conn, $insert);
            }
        }
        // if($result){
        //   echo "Record inserted";
        // }

    }

}
?>

