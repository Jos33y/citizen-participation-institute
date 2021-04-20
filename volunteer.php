<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Help wanted</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicons/-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!--  Bootstrap Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/eedc5762fd.js"></script>

    <!--  CSS File -->
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>
    <div class="bg-volunteer">

        <?php include 'include/bg-header.php';?>

        <div class="text-left text-space">
            <!--  <img src="images/4869420be83.png" alt=""> -->
        </div>
    </div>

    <div class="container">
        <div class="first-col">
            <p>The Institute has many opportunities for volunteers to help, more than we have listed here. Click the
                boxes that describe you, submit this form, and we will contact you.
            </p>
            <hr>
            <form method="POST">
                <div class="form-group">
                    <label for="interest">I'm interested in... </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Being a local area representative"> Being a local area representative
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Elections Research Project">Elections Research Project
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Public Information Project Research">Public Information Project Research
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Public Meetings Project Research">Public Meetings Project Research
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Write / Edit for our Publications">Write / Edit for our Publications

                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Office / Secretarial / Clerical">Office / Secretarial / Clerical
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Web Page / Social Media / Data Base">Web Page / Social Media / Data Base

                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Accounting">Accounting
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Legal">Legal
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Anything We Need">Anything We Need
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="interest[]" value="Other">Other
                        </label>
                    </div>
                    <br>
                    <label for="other">If other, please specify </label><br>
                    <textarea name="other" id="" cols="38" rows="7"></textarea>
                </div>
                </p>
                <hr>

                <div class="form-group">
                    <label for="time">My availability... </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I am available during the day
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I am available most evenings
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I am available mainly on weekends
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I can do computer work from home
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">Other
                        </label>
                    </div>

                    <br>
                    <label for="other">If other, please specify </label><br>
                    <textarea name="other-time" id="" cols="38" rows="7"></textarea>
                </div>
                <hr>
                <div class="form-group">
                    <label for="time">More about me... </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I am interested in community
                            affairs
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I sometimes attend public meetings
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I have run for public office
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value=""> I have good knowledge of some laws
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I know how to do some legal
                            research
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I am a recent law graduate
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I have, or have had, a law degree
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I am newly licensed, or awaiting
                            results
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I am an attorney in practice
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" value="">I am a retired attorney
                        </label>
                    </div>
                </div>
                <hr>

                <div class="col-md-12">
                    <div class="form-group">
                        <table class="table table-borderless">
                            <p><span class="red">*</span><i> Indicates required field</i></p>

                            <tbody>
                                <tr>
                                    &nbsp;&nbsp; Name <span class="red">*</span>
                                    <td><input type="text" class="form-control" placeholder="First name" name="fName"  id="fname" required>
                                    </td>
                                    <td><input type="text" class="form-control" placeholder="Last name" name="lName" id="lname" required></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        Email <span class="red">*</span>
                                        <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        Address
                                        <input type="text" class="form-control" placeholder="Line 1" name="address" id="lineone">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="text" class="form-control" placeholder="Line 2" name="addressTwo" id="linetwo">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="City" name="city">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="State" name="state">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Zip Code" name="zip">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" placeholder="Country" name="country">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1">
                                        Phone Number (daytime)
                                        <input type="text" class="form-control" name="pNumberDay">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1">
                                        Phone Number (evening)
                                        <input type="text" class="form-control" name="pNumberNight">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        Comment <span class="red">*</span>
                                        <textarea name="comment" class="form-control" name="comment" id="" cols="38"
                                            rows="5" required></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <button class="btn btn-lg" name="submit" type="submit">Submit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr style="margin-top: 20%;" width="70%">
    <div class="footer">
        <div class="col-md-12">
            <p class="text-center" style="font-size: 12px; color: darkred;"> &copy 2021 All right reserved Citizen
                Participation Institute</p>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {

    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $addressTwo = $_POST['addressTwo'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $dayPhone = $_POST['pNumberDay'];
    $nightPhone = $_POST['pNumberNight'];
    $comment = $_POST['comment'];

    $to = "director@citizenparticipation.org ";
    $subject = "Volunteer Information";
    $txt = "First Name: " . $firstName . "\n" .
        "last Name: " . "$lastName" . "\n" .
        "Email: " . "$email" . "\n" .
        "Address One: " . "$address" . "\n" .
        "Address Two: " . "$addressTwo" . "\n" .
        "City: " . "$city" . "\n" .
        "State: " . "$state" . "\n" .
        "Zip: " . "$zip" . "\n" .
        "Country: " . "$country" . "\n" .
        "Phone Number(Day): " . "$dayPhone" . "\n" .
        "Phone Number(Night): " . "$nightPhone" . "\n" .
        "Comment " . "$comment" . "\n";

    $sendmail = mail($to, $subject, $txt);

    if ($sendmail) {
        echo "<script>alert('Information Sent');</script>";

    }

}

?>