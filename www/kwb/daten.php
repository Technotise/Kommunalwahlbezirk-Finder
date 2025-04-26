<?php
$filename = 'strassen.csv'; // <- Neuer Dateiname
$rows = [];

if (($handle = fopen($filename, "r")) !== FALSE) {
    $header = fgetcsv($handle, 1000, ";");
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $rows[] = array_combine($header, $data);
    }
    fclose($handle);
}

header('Content-Type: application/json');
echo json_encode($rows);
