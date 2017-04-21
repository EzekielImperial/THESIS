<!DOCTYPE html>
<html lang="en">

<head>
    <title>:::iMARKET:::</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="css/design.css" />


</head>

<body>

    <?php
        session_start();
        require_once('connector.php');
    ?>


        <?php include 'header.php';?>

        <!--First-->

        <div class="jumbotron text-center">
            <h1>Slider here in this part</h1>
            <p>with Sell Buy button</p>
            <br><br><br>
        </div>
        <div class="col-md-12 text-center">
            <br><br> Product list first line
            <br><br><br><br><br><br><br>
        </div>
        <div class="col-md-12 text-center">
            Product list second line
            <br><br><br><br><br><br><br>
        </div>

        <div class="row">
            <div class="col-md-6 text-center">
                <h3>Column 1</h3> Best prod or man prod
                <br><br><br><br><br><br><br>

            </div>
            <div class="col-md-6 text-center">
                <h3>Column 2</h3> woman prod
                <br><br><br><br><br><br><br>

            </div>

        </div>


        </div>
    <?php include 'footer.php';?>

</body>

</html>
