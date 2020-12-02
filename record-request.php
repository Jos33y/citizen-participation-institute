<?php
$title = "Record Request";
include 'include/dbcon.php';
include 'include/header.php';

$sql = "SELECT DISTINCT webgroup FROM governments ORDER BY webgroup ASC";
$query = mysqli_query($con, $sql);

$sql = "SELECT * FROM addresses";
$result = mysqli_query($con, $sql);
$rowcount = mysqli_num_rows($result);

?>
<!--Body of page-->
<div class="container records">
    <h3 class="records-head text-center">Contact Information for all <?php echo $rowcount; ?> Units of Local Government
        in Illinois
    </h3>

    <div class="unit-og">
        <div class="row text-center">

              <!-- First row -->
            <div class="col-sm-3">
                <a href="municipalities.php" class="btn btn-md">Cities, Towns, Villages</a>
            </div>

            <div class="col-sm-3">
                <a href="counties.php" class="btn btn-md">Counties</a>
            </div>

            <div class="col-sm-3">
                <a href="townships.php" class="btn btn-md">Townships</a>
            </div>

            <div class="col-sm-3">
                <a href="school-districts.php" class="btn btn-md">School Districts</a>
            </div>

            <!-- Second row -->
            <div class="col-sm-3">
                <a href="fire-districts.php" class="btn btn-md">Fire Protection</a>
            </div>

            <div class="col-sm-3">
                <a href="park-districts.php" class="btn btn-md">Parks</a>
            </div>

            <div class="col-sm-3">
                <a href="forest-and-conservation-districts.php" class="btn btn-md">Forest and Conservation</a>
            </div>

            <div class="col-sm-3">
                <a href="community-colleges.php" class="btn btn-md">Community Colleges</a>
            </div>

              <!-- Third row -->
            <div class="col-sm-3">
                <a href="library-districts.php" class="btn btn-md">Libraries and Museums</a>
            </div>

            <div class="col-sm-3">
                <a href="#" class="btn btn-md">Housing</a>
            </div>

            <div class="col-sm-3">
                <a href="hospitals.php" class="btn btn-md">Health</a>
            </div>

            <div class="col-sm-3">
                <a href="cemeteries.php" class="btn btn-md">Cemetries</a>
            </div>

            <!-- Fourth row -->
            <div class="col-sm-3">
                <a href="transport.php" class="btn btn-md">Transport</a>
            </div>

            <div class="col-sm-3">
                <a href="roads.php" class="btn btn-md">Rural Roads</a>
            </div>

            <div class="col-sm-3">
                <a href="multi-townships.php" class="btn btn-md">Multi Townships</a>
            </div>

            <div class="col-sm-3">
                <a href="drainage-districts.php" class="btn btn-md">Drainage</a>
            </div>

            <!-- Fifth row -->
            <div class="col-sm-3">
                <a href="water-districts.php" class="btn btn-md">Water</a>
            </div>

            <div class="col-sm-3">
                <a href="sanitary-districts.php" class="btn btn-md">Sewerage</a>
            </div>

            <div class="col-sm-3">
                <a href="election-division.php" class="btn btn-md">Election</a>
            </div>

            <div class="col-sm-3">
                <a href="convention-ctrs.php" class="btn btn-md">Convention Centers</a>
            </div>

            <!-- Sixth row -->
            <div class="col-sm-3">
                <a href="public-buildings.php" class="btn btn-md">Public Buildings</a>
            </div>

            <div class="col-sm-3">
                <a href="planning.php" class="btn btn-md">Planning</a>
            </div>

            <div class="col-sm-3">
                <a href="utilities.php" class="btn btn-md">Special Utilities</a>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <hr>
    <h3 class="records-head"> How to make a Freedom of Information Request</h3>
    <br>
    <div class="row">
        <div class="col-md-6">
            <p>
                Anyone can request in writing or via e-mail a copy of any public record or group of records. There
                is no specific format or form required for the request. It can be rejected as too vague or too
                broad, so it is best to be as specific as possible describing what you are looking for, especially
                when asking for “all records pertaining to ….”
            </p>

            <p>
                ​There is no charge allowed for the first 50 pages of copies, and additional pages must be provided
                for $0.15 or less. There are also provisions in the law to make all copies free, under some
                circumstances.

            </p>

            <p>
                The public body must respond to the request, generally within 5 business days. Instead of supplying
                or denying the records, the response might be that they need more time to locate the records in
                storage but that they will be made available on a date certain.
            </p>
        </div>
        <div class="col-md-6">

            <h5 style="font-weight: 700; font-style: italic;"> Here is an example of a request:</h5>
            <br>
            <p>
                "This is a request pursuant to the Freedom of Information Act for a copy of the original employment
                contract of William Breuder, along with all subsequent amendments, extensions, novations, or other
                documents affecting the provisions of that contract. This request also embraces complete minutes of
                all open or closed meetings of the Board of Trustees relating to the approval or modification in any
                of the original contract. This request also embraces the audio recordings of those parts of such
                closed meetings where minutes have been approved for release to the public.
            </p>
            <p>
                Please acknowledge this request (which is not made for commercial purposes), and email the requested
                public records to me at BGoode@IamGood.org. If you have any questions, I can also be contacted at
                (630) 555-5555."
            </p>

            <p style="font-weight: 700;">Your request can be either emailed or postal mailed. Buttons above give
                those addresses of many public bodies.</p>
        </div>
    </div>
</div>

<hr style="margin-top: 20%;" width="70%">
<div class="footer">
    <div class="col-md-12">
        <p class="text-center" style="font-size: 13px; color: darkred;"> &copy 2020 All right reserved Citizen
            Participation Institute</p>
    </div>
</div>
</body>

</html>
<script>
    $(document).ready(function () {
        $('#UOG').change(function () {
            var webgrp = $(this).val();
            $(window).scroll(function () {
                if ($(window).scrollTop() == $(document).height() - $(window).height()) {
                    if ($(".page_number:last").val() <= $(".total_record").val()) {
                        var pagenum = parseInt($(".page_number:last").val()) + 1;
                        loadRecords('load_data.php?page=' + pagenum);
                    }
                }
            });
        });
    });

    function loadRecords(url) {
        $.ajax({
            url: url,
            type: "GET",
            data: {
                webgrp: webgrp,
                total_record: $("#total_record").val()
            },
            beforeSend: function () {
                $('#loader').show();
            },

            success: function (data) {
                $("#display").html(data);
            },
            complete: function () {
                $('#loader').hide();
            },
            error: function () {

            }

        });
        /* $(document).ready(function () {
             $('#UOG').change(function () {
                 var webgrp = $(this).val();
                 $.ajax({
                     url: "load_data.php",
                     method: "POST",
                     data: {
                         webgrp: webgrp
                     },
                     beforeSend: function () {
                         // Show image container
                         $("#loader").show();
                     },
                     success: function (data) {
                         $('#display').html(data);
                     },
                     complete: function (data) {
                         // Hide image container
                         $("#loader").hide();
                     }
                 });
             });
         }); */
    }
</script>