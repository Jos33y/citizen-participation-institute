<?php
 include('include/dbcon.php');
 include('include/header.php');

 $sql = "SELECT DISTINCT webgroup FROM governments ORDER BY webgroup ASC";
 $query = mysqli_query($con , $sql);

 $sql = "SELECT * FROM addresses";
 $result=mysqli_query($con,$sql);
 $rowcount=mysqli_num_rows($result);


?>
<!--Body of page-->
<div class="container records">
    <h3 class="records-head text-center">Contact Information for all <?php echo $rowcount; ?> Units of Local Government in Illinois
    </h3>

    <div class="selection">
        <div class="form-group">
            <select name="uog" id="UOG" class="form-control">
                <!--form-control Begin -->
                <option selected disabled> Select a Unit of Government</option>
                <?php
                                    while ($row=mysqli_fetch_array($query)){

                                        $webgrp = $row['webgroup'];
    
                                        echo "
                                        <option value='$webgrp'>$webgrp</option>
                                        ";
                                    }
                                    ?>

            </select>
            <!--form-control Finish -->
        </div>

    </div>

    <div class="container">
        <div class="table">
            <table class="table table-bordered text-center">
                <thead style="background-color: #5040ae; color:#fff;">
                    <tr>
                        <!--the table heading -->
                        <th width="23%">Public Body Name</th>
                        <th width="25%">FOIA Address</th>
                        <th width="10%"><span style="font-weight:normal">&#8203;</span><strong>FOIA Email</strong></th>
                        <th width="25%">Office Phone</th>
                    </tr>
                </thead>
                <tbody id="display">
                </tbody>
               
            </table>
        </div>
    </div>

   <!-- <div id="loader" style="text-align:center;"><img src="images/loading.gif" /></div> -->


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
            $.ajax({
                url: "load_data.php",
                method: "POST",
                data: {
                    webgrp: webgrp
                },
                success: function (data) {
                    $('#display').html(data);
                }
            });
        });
    });


 var limit = 20; //The number of records to display per request
 var start = 0; //The starting pointer of the data
 var action = 'inactive'; //Check if current action is going on or not. If not then inactive otherwise active
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"load_data.php",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
     action = 'inactive';
    }
    
   }
  });
 }

</script>