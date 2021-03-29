<?php
require_once "include/dbcon.php";

$limit = (intval($_GET['limit']) != 0) ? $_GET['limit'] : 20;
$offset = (intval($_GET['offset']) != 0) ? $_GET['offset'] : 0;
$webgrp = ($_GET["webgroup"]); 

$sql = "SELECT *
FROM governments
INNER JOIN addresses
ON governments.GovId = addresses.GovId
WHERE governments.webgroup = '$webgrp'
ORDER BY addresses.HQphysicalCity ASC
LIMIT $limit OFFSET $offset";

try {
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();

} catch (Exception $ex) {
    echo $ex->getMessage();
}


if (count($results) > 0) {
    foreach ($results as $row) {

        $govid = $row["GovId"];
        $kty_nbr = $row["ElectionAuthority"];

        $website = $row["WebsiteURL"];

        if ($website == "") {
            $pb = $row["PublicBodyNameFormal"];

        } else {
            $pb = '<a href="//' . $row["WebsiteURL"] . '" class="link" target="_blank">' . $row["PublicBodyNameFormal"] . '</a>';
        }

        $sql = "SELECT namesimple FROM kountynbrs WHERE eiauthority = '" . $kty_nbr . "'";
        $query_kty = mysqli_query($con, $sql);
        while ($row_kty = mysqli_fetch_array($query_kty)) {
            $emailBreak = explode("@", $row["FoiaEmail"]);
            $email  = $emailBreak[0] . '<br>' . '@' . $emailBreak[1]; 

            echo
            '<tr>
                <td><p><span>' . $pb . '<br>
                <small>' . $row_kty["namesimple"] . '</small></span></p></td>
       <td><p><span>' . $row["FoiaPhysicalAddress"] . '<br />&#8203;
       <strong>' . $row["FoiaMailingCity"] . '</strong>' . ' ' . $row["FoiaState"] . ' ' . $row["FoiaMailingZip"] . '</span></p></td>
       <td><p><span>' . $email . '</span></p></td>
       <td><p><span>' . $row["FoiaPhone"] . '</span></p></td>
       </tr>';


        }

    }
}
?>