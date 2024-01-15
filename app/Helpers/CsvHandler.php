<?php
namespace App\Helpers;

class CsvHandler{

    public static function csvToArray($url)
    {
        $data = [];
        if (empty($url)){
            return false;
        }
        $file = fopen($url, 'r');
        while (($line = fgetcsv($file)) !== FALSE)
        {
            $data[] = $line;
        }
        fclose($file);
       
        return $data;
    }
}