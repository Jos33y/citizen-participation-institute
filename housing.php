<?php
$title = " Housing";
include 'include/dbcon.php';
include 'include/header.php';

$sql = "SELECT * FROM governments WHERE webgroup = 'Housing'";
$result = mysqli_query($con, $sql);
$rowcount = mysqli_num_rows($result);

$sql = "SELECT GovId FROM governments WHERE webgroup = 'Housing'";
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
    <h3 class="records-head text-left">The <?php echo $rowcount; ?> Housing or Home Equity Authorities in Illinois
    </h3>
    <p class="date">Units of government created by <a href="http://www.ilga.gov/legislation/ilcs/ilcs3.asp?ActID=1424&ChapterID=29"
            style="text-decoration:none;"> 310 ILCS 10.</a></p>
    <div class="text-center">
        <p class="citizen"> &#169; Citizen Participation Institute. <span class="date"> Last updated on <?php echo $newDate; ?></span>
        </p>
        <p><a href="contact.php" class="changes" style="text-decoration:none;">Click here to report changes or errors​.</a></p>
    </div>
    <br>
    <p class="texts">​​In sequence by the headquarters city:</p>
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
             <!-- this will hold all the data -->
             <tbody id="results"> </tbody>

</table>
<!-- loading image -->
<div id="loader_image"><img src="images/loader.gif" alt="" width="24" height="24"> Loading...please wait
</div>
<!-- for message if data is avaiable or not -->
<div id="loader_message"></div>
</div>

<?php include 'include/footer.php';?>

</body>

</html>



<script type="text/javascript">
var busy = false;
var limit = 50
var offset = 0;
var web = 'Housing';

function displayRecords(lim, off) {
    $.ajax({
        type: "GET",
        async: false,
        url: "getheadquarters.php",
        data: {
            limit: lim,
            offset: off,
            webgroup: web
        },
        cache: false,
        beforeSend: function () {
            $("#loader_message").html("").hide();
            $('#loader_image').show();
        },
        success: function (html) {
            $("#results").append(html);
            $('#loader_image').hide();
            if (html == "") {
                $("#loader_message").html(
                    '<button data-atr="nodata" class="btn btn-default" type="button">No more records.</button>'
                ).show()
            } else {
                $("#loader_message").html(
                        '<button class="btn btn-default" type="button">Loading please wait...</button>'
                        )
                    .show();
            }
            window.busy = false;

        }
    });
}

$(document).ready(function () {
    // start to load the first set of data
    if (busy == false) {
        busy = true;
        // start to load the first set of data
        displayRecords(limit, offset);
    }


    $(window).scroll(function () {
        // make sure u give the container id of the data to be loaded in.
        if ($(window).scrollTop() + $(window).height() > $("#results").height() && !busy) {
            busy = true;
            offset = limit + offset;

            // this is optional just to delay the loading of data
            setTimeout(function () {
                displayRecords(limit, offset);
            }, 500);

            // you can remove the above code and can use directly this function
            // displayRecords(limit, offset);

        }
    });

});
</script>