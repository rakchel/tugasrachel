<?php

// **********************  1  ************************** 
// ========== tangkap nilai tinggi_badan dan berat_badan yang ada pada form html
// silakan taruh code kalian di bawah

$berat_badan = isset($_POST['berat_badan']) ? $_POST['berat_badan'] : '';
$tinggi_badan = isset($_POST['tinggi_badan']) ? $_POST['tinggi_badan'] : '';

// Initialize an empty error message string.
$pesan_error = ""; 

// Initialize an empty result string for the BMI calculation.
$perhitungan = "";

// Initialize an empty status string to show the BMI status later.
$status = "";

// **********************  2  ************************** 
// ========== buatkan sebuah perkondisian di mana 
// tinggi_badan atau $berat_badan tidak boleh kosong nilainya, kalau kosong buatkanlah pesan error
// silakan taruh code kalian di bawah

// Check if either the height or weight is empty.
if (empty($berat_badan) || empty($tinggi_badan)) {
     // Set an error message if they are empty.
    $pesan_error = 'Tinggi badan dan berat badan tidak boleh kosong';
} else {
    // Convert height from cm to meters.
    $tinggi_meter = $tinggi_badan / 100;

    // Calculate BMI using the provided formula.
    $perhitungan = $berat_badan / ($tinggi_meter)**2;

    // Determine the BMI status based on the calculated value.
    if ($perhitungan <= 18.4) {
        $status = 'Underweight';
    } elseif ($perhitungan <= 24.9) {
        $status = 'Normal';
    } elseif ($perhitungan <= 39.9) {
        $status = 'Overweight';
    } else {
        $status = 'Obese';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator BMI</title>
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 p-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Kalkulator BMI</h4>
                    <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="175">
                            <label for="tinggi_badan">Tinggi Badan (CM)</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control" name="berat_badan" id="berat_badan" placeholder="53">
                            <label for="berat_badan">Berat Badan (KG)</label>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3 mt-3 w-100">Hitung BMI</button>
                    </form>

                    <!--  **********************  4  **************************     -->
                    <!-- Hasilnya perhitungan BMI taruh di sini yaaa!! 😊 -->
                    <!-- silakan taruh code kalian di bawah -->
                    
                    <!--  **********************  4  **************************     -->
                    <!-- Display the calculated BMI status -->
                    
                    <?php
                        echo $status;
                    ?>

                    <!--  **********************  5  **************************     -->
                    <!-- Hasil pesan error nya taruh di sini yaaa!! 😊  -->
                    <!-- silakan taruh code kalian di bawah -->
                    

                    <!--  **********************  5  **************************     -->
                   <!-- Display error message if any -->
                   
                    <?php
                        if (!empty($pesan_error)) {
                            echo $pesan_error;
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
