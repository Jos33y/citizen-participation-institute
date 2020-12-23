<?php
$title = "Cemeteries";
include 'include/dbcon.php';
include 'include/header.php';

$sql = "SELECT * FROM governments WHERE webgroup = 'Facilities'";
$result = mysqli_query($con, $sql);
$rowcount = mysqli_num_rows($result);

$sql = "SELECT GovId FROM governments WHERE webgroup = 'Facilities'";
$query = mysqli_query($con, $sql);
while ($row_gov = mysqli_fetch_array($query)) {
    $govid = $row_gov["GovId"];

}
$sql = "SELECT timestamp FROM addresses WHERE GovId = '" . $govid . "'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);

$date = $row["timestamp"];

$newDate = date("M j, Y", strtotime($date));

//echo date_format($date,"M j, Y, g:i a");

?>

<!--Body of page-->
<div class="container record-req">
    <h3 class="records-head text-left">The <?php echo $rowcount; ?> Cemetery Maintenance Districts in Illinois
    </h3>
    <p class="date">Units of government created by <a href="http://www.ilga.gov/legislation/ilcs/ilcs3.asp?ActID=826&ChapterID=15"
            style="text-decoration:none;">70 ILCS 105</a></p>
    <div class="text-center">
        <p class="date" style="float:left; font-style:italic"> &#169; Citizen Participation Institute. Last updated on
                <?php echo $newDate; ?>
        </p>
        <p><a href="contact.php" style="text-decoration:none;">Click here to report changes or
                errors​.</a></p>
    </div>
    <p class="changes">This is not a list of all cemetery authorities in Illinois. Many other cemeteries are operated
            as departments of a <a href="municipalities.php" style="text-decoration:none;">municipal
                government</a>
            or a <a href="townships.php" style="text-decoration:none;">township.</a> This is a list
            of those operated by their own separate governments, independent of any city, village, town, or township.
        </p>
        <br>
    <p class="texts" >​In sequence by the headquarters city:​</p>
</div>
<!-- Table -->
<div class="container">
    <div class="table">
        <table class="table table-bordered text-center">
            <thead style="background-color: #5040ae; color:#fff;">
                <tr >
                    <!--the table heading -->
                    <th width="25%">Public Body Name</th>
                    <th width="25%">FOIA Address</th>
                    <th width="25%"><span style="font-weight:normal">&#8203;</span><strong>FOIA Email</strong></th>
                    <th width="25%">Office Phone</th>
                </tr>
            </thead>
            <tbody>
<?php
$sql = "SELECT *
FROM governments
INNER JOIN addresses
ON governments.GovId = addresses.GovId
WHERE governments.webgroup = 'Facilities'
ORDER BY addresses.HQphysicalCity ASC";

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
</div>

<?php include 'include/footer.php';?>

</body>

</html>