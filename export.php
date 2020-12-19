<?php
//export.php

if (isset($_POST["export"])) {
    $connect = mysqli_connect("localhost", "root", "", "citizenparticipation");
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('GovID', 'Public Body Formal Name', 'Email'));
    $sql = "SELECT GovId FROM governments WHERE webgroup = 'Twp'";
    $query = mysqli_query($connect, $sql);
    while ($row_gov = mysqli_fetch_array($query)) {
        $govid = $row_gov["GovId"];

        $sql = "SELECT GovId, PublicBodyNameFormal, FoiaEmail FROM addresses WHERE GovId = '" . $govid . "'";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            fputcsv($output, $row);
        }
    }
    fclose($output);

}
