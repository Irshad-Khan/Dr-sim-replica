<?php

/**
 * Return privious route name
 */
function getPriviousRouteName()
{
    $url = url()->previous();
    return app('router')
        ->getRoutes($url)
        ->match(app('request')->create($url))
        ->getName();
}

function csvToArray($filename = '', $delimiter = ',')
{
    if (!file_exists($filename) || !is_readable($filename))
        return false;

    $header = null;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== false) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }

    return $data;
}
