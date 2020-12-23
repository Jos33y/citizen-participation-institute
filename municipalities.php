<?php
$title = "Municipalities";
include 'include/dbcon.php';
include 'include/header.php';

$sql = "SELECT * FROM governments WHERE webgroup = 'Municipal'";
$result = mysqli_query($con, $sql);
$rowcount = mysqli_num_rows($result);

$sql = "SELECT GovId FROM governments WHERE webgroup = 'Municipal' ORDER BY GovId DESC";
$query = mysqli_query($con, $sql);
while ($row_gov = mysqli_fetch_array($query)) {
    $govid = $row_gov["GovId"];

}
$sql = "SELECT timestamp FROM addresses WHERE GovId = '" . $govid . "'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$date = $row["timestamp"];

$newDate = date("M j, Y", strtotime($date));

?>

<!--Body of page-->
<div class="container record-req">
   <!-- <form method="POST" action="export.php">
    <input type="submit" name="export" value="CSV Export" class="btn btn-sm btn-primary">

    </form> -->
    <h3 class="records-head text-left">The <?php echo $rowcount; ?> Municipalities in Illinois
    </h3>
    <div class="text-center">
        <p class="citizen"> &#169; Citizen Participation Institute. <span class="date"> Last updated on
                <?php echo $newDate; ?></span>
        </p>
        <p><a href="contact.php" class="changes" style="text-decoration:none;">Click here to report changes or errors​.</a></p>
    </div>
</div>
<!-- Table -->
<div class="container">
    <div class="table">
        <table class="table table-bordered text-center">
            <thead style="background-color: #5040ae; color:#fff;">
                <tr>
                    <!--the table heading -->
                    <th width="25%">Public Body Name</th>
                    <th width="25%">FOIA Address</th>
                    <th width="25%"><span style="font-weight:normal">&#8203;</span><strong>FOIA Email</strong></th>
                    <th width="25%">Office Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php

if (isset($_GET['page_no']) && $_GET['page_no'] != "") {
    $page_no = $_GET['page_no'];
} else {
    $page_no = 1;
}

$total_records_per_page = 100;

$offset = ($page_no - 1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query(
    $con,
    "SELECT COUNT(*) As total_records FROM governments WHERE webgroup = 'Municipal'"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1

$sql = "SELECT *
FROM governments
INNER JOIN addresses
ON governments.GovId = addresses.GovId
WHERE governments.webgroup = 'Municipal'
LIMIT $offset, $total_records_per_page";

$query = mysqli_query($con, $sql);

while ($row = mysqli_fetch_array($query)) {
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

        echo
            '<tr>
                <td><p><span>' . $pb . '<br>
                <small>' . $row_kty["namesimple"] . '</small></span></p></td>
       <td><p><span>' . $row["FoiaPhysicalAddress"] . '<br />&#8203;
       <strong>' . $row["FoiaMailingCity"] . '</strong>' . ' ' . $row["FoiaState"] . ' ' . $row["FoiaMailingZip"] . '</span></p></td>
       <td><p><span>' . $row["FoiaEmail"] . '</span></p></td>
       <td><p><span>' . $row["FoiaPhone"] . '</span></p></td>
       </tr>';

    }

}

mysqli_close($con);
?>

            </tbody>
        </table>
    </div>
    <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
        <strong>Page <?php echo $page_no . " of " . $total_no_of_pages; ?></strong>
    </div>
    <hr>
    <div class="text-center">
        <ul class="pagination">
            <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>

            <li <?php if ($page_no <= 1) {echo "class='disabled'";}?>>
                <a <?php if ($page_no > 1) {echo "href='?page_no=$previous_page'";}?>>Previous</a>
            </li>
            <?php
if ($total_no_of_pages <= 10) {
    for ($counter = 1; $counter <= $total_no_of_pages; $counter++) {
        if ($counter == $page_no) {
            echo "<li class='active'><a>$counter</a></li>";
        } else {
            echo "<li><a href='?page_no=$counter'>$counter</a></li>";
        }
    }
} elseif ($total_no_of_pages > 10) {

    if ($page_no <= 4) {
        for ($counter = 1; $counter < 8; $counter++) {
            if ($counter == $page_no) {
                echo "<li class='active'><a>$counter</a></li>";
            } else {
                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
            }
        }
        echo "<li><a>...</a></li>";
        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
    } elseif ($page_no > 4 && $page_no < $total_no_of_pages - 4) {
        echo "<li><a href='?page_no=1'>1</a></li>";
        echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {
            if ($counter == $page_no) {
                echo "<li class='active'><a>$counter</a></li>";
            } else {
                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
            }
        }
        echo "<li><a>...</a></li>";
        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
    } else {
        echo "<li><a href='?page_no=1'>1</a></li>";
        echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
            if ($counter == $page_no) {
                echo "<li class='active'><a>$counter</a></li>";
            } else {
                echo "<li><a href='?page_no=$counter'>$counter</a></li>";
            }
        }
    }
}
?>

            <li <?php if ($page_no >= $total_no_of_pages) {echo "class='disabled'";}?>>
                <a <?php if ($page_no < $total_no_of_pages) {echo "href='?page_no=$next_page'";}?>>Next</a>
            </li>
            <?php if ($page_no < $total_no_of_pages) {
    echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
}?>
        </ul>
    </div>
</div>

<?php include 'include/footer.php';?>

</body>

</html>