<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Contact Us</title>
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
    <div class="bg-contact">

        <?php  include('include/bg-header.php');  ?>

        <div class="text-space">
         <!--   <img src="images/4869420be83.png" alt=""> -->
        </div>

    </div>

    <div class="container">
        <div class="first-col">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="donate-head"> Contact us</h2>

                    <p>We are always happy to hear from you.</p>

                    <form method="POST">

                        <div class="form-group">
                            <table class="table table-borderless">
                                <p><span class="red">*</span><i> Indicates required field</i></p>

                                <tbody>
                                    <tr>
                                        &nbsp;&nbsp; Name <span class="red">*</span>
                                        <td><input type="text" class="form-control" placeholder="First name" id="fname">
                                        </td>
                                        <td><input type="text" class="form-control" placeholder="Last name" id="lname">
                                        </td>
                                    </tr <tr>
                                    <td colspan="2">
                                        Email <span class="red">*</span>
                                        <input type="email" class="form-control" placeholder="Email" id="email">
                                    </td>
                                    </>
                                    <tr>
                                        <td colspan="1">
                                            Phone Number (daytime)
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="1">
                                            Phone Number (evening)
                                            <input type="text" class="form-control">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            Comment <span class="red">*</span>
                                            <textarea name="comment" class="form-control" id="" cols="45"
                                                rows="5"></textarea>
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
                    </form>
                </div>


                <div class="col-lg-5">
                    <h2 class="donate-head"> Email addresses</h2>

                    <span> General: <a style="text-decoration: none;" href="mailto:Info@CitizenParticipation.Org"
                            class="link">
                            Info@CitizenParticipation.Org </a> <br>
                        Elections Desk: <a style="text-decoration: none;"
                            href="mailto:Elections@CitizenParticipation.Org" class="link">
                            Elections@CitizenParticipation.Org </a> <br>
                        Errors: <a style="text-decoration: none;" href="mailto:Accuracy@CitizenParticipation.Org"
                            class="link">
                            Accuracy@CitizenParticipation.Org </a> <br>
                        Public Records: <a style="text-decoration: none;" href="mailto:FOIA@CitizenParticipation.Org"
                            class="link">
                            FOIA@CitizenParticipation.Org</a> <br>
                        Public Meetings: <a style="text-decoration: none;" href="mailto:OMA@CitizenParticipation.Org"
                            class="link">
                            OMA@CitizenParticipation.Org </a></span>
                    <p> <span style="font-weight: 600;margin-top: 3%;"> Telephone Number: </span>
                        (630) 791-0397‬</p>

                    <span><b> Administrative Office:</b> <br>
                        27w734 Gary's Mill Rd <br>
                        Winfield IL 60190-1556
                    </span>


                </div>
            </div>
        </div>
    </div>
    <?php  include('include/footer.php');  ?>
</body>

</html>