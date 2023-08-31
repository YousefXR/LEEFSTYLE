<?php
error_reporting(E_ALL & ~E_NOTICE);
$bmiText = "";
$bmrText = "";

$bmiLengte = $_POST['bmilengte'];
$bmiGewicht = $_POST['bmigewicht'];

$bmrleeftijd = $_POST['bmrLeeftijd'];

$bmrGewicht = $_POST['bmrGewicht'];
$bmrLengte = $_POST['bmrLengte'];
$geslacht = $_POST['geslacht'];



if (isset($_POST['berekenBmi'])) {
    $bmiText = $bmiGewicht / ($bmiLengte * $bmiLengte);
} else {
    $bmiText = "";
}

if (isset($_POST['berekenBmr'])) {
    if ($geslacht == "man") {
        $bmrText = (((13.7516 * $bmrGewicht) + (5.0033 * $bmrLengte) - (6.755 * $bmrleeftijd)) + 66.473);
    } elseif ($geslacht == "vrouw") {
        $bmrText = (((9.5634 * $bmrGewicht) + (1.8496 * $bmrLengte) - (4.6756 * $bmrleeftijd)) + 655.0955);
    }
} else {
    $bmrText = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Leefstijl</title>
</head>

<body style="background-color:#97688a ;">
    <form method="post">
        <div class="container text-center">
            <div class="row">
                <div class="col">

                </div>
                <div class="col">
                    <h2 class="mt-5">Leefstijl</h2>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h6>BMI</h6>
                    <p>Berken snel je of je een gezond gewicht hebt.</p>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Lengte (in meter)</span>
                        <input name="bmilengte" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">gewicht (in kg)</span>
                        <input name="bmigewicht" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <button type="submit" name="berekenBmi" class="btn btn-danger d-flex">Submit</button>
                    <p class="result">Bmi is: <?php echo $bmiText ?> </p>
                </div>

                <div class="col">

                </div>
                <div class="col">
                    <h6>BMR</h6>
                    <p>Berken snel je energieverbruik.</p>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Leeftijd (in jaar) </span>
                        <input name="bmrLeeftijd" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Lengte (in cm)</span>
                        <input name="bmrLengte" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Gewicht (in kg) </span>
                        <input name="bmrGewicht" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="man" name="geslacht" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1"> mannen </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="vrouw" name="geslacht" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2"> vrouwen </label>
                    </div>

                    <button type="submit" name="berekenBmr" class="btn btn-danger d-flex">Submit</button>
                    <p class="result">BMR is: <?php echo $bmrText ?> </p>
                </div>
            </div>
        </div>
        </div>
    </form>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nerko+One&display=swap');
        * {
            padding: 0;
            margin: 0;
            font-family: 'Nerko One', cursive;
        }

        .result {
            font-size: 4vh;
            font-weight: 700;
        }
    </style>


</body>

</html>