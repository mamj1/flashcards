
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fh = fopen("deData.json", 'w') ;
    $data = $_POST['data'];
    fwrite($fh, $data);
    fclose($fh);
}
?>


    

