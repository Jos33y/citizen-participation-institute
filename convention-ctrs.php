<?php
$title = "Convention Centers";
include 'include/dbcon.php';
include 'include/header.php';

$sql = "SELECT * FROM governments WHERE webgroup = 'Expo'";
$result = mysqli_query($con, $sql);
$rowcount = mysqli_num_rows($result);
?>


<!--Body of page-->
<div class="container record-req">
    <h3 class="records-head text-left">The <?php echo $rowcount; ?> Exposition and Auditorium Authorities of Illinois
    </h3>
    <div class="text-center">
        <p class="citizen"> &#169; Citizen Participation Institute. <span class="date"> Last updated on Oct. 26, 2015</span>
        </p>
        <p><a href="#" class="changes" style="text-decoration:none;">Click here to report changes or errors​</a></p>
    </div>
        <p class="text-left">In sequence by the public body name:</p>
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
<?php
$sql = "SELECT * FROM governments WHERE webgroup = 'Expo' LIMIT 10";
$query = mysqli_query($con, $sql);
while ($row_gov = mysqli_fetch_array($query)) {
    $govid = $row_gov["GovId"];

    $sql = "SELECT * FROM governments WHERE GovId = '" . $govid . "'";
    $query_ktynbr = mysqli_query($con, $sql);
    while ($row_ktynbr = mysqli_fetch_array($query_ktynbr)) {
        $kty_nbr = $row_ktynbr["ElectionAuthority"];

        $sql = "SELECT * FROM kountynbrs WHERE eiauthority = '" . $kty_nbr . "'";
        $query_kty = mysqli_query($con, $sql);
        while ($row_kty = mysqli_fetch_array($query_kty)) {

            $sql = "SELECT * FROM addresses WHERE GovId = '" . $govid . "'  ORDER BY PublicBodyNameFormal DESC";
            $result = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result)) {

                $website = $row["WebsiteURL"];

                if ($website == "") {
                    $pb = $row["PublicBodyNameFormal"];

                } else {
                    $pb = '<a href="//' . $row["WebsiteURL"] . '" class="link" target="_blank">' . $row["PublicBodyNameFormal"] . '</a>';
                }

                $output .=
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
    }
    
}
echo $output;
?>
