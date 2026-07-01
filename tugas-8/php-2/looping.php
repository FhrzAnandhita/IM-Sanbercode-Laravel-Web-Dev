<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Looping</title>

</head>

<body>

    <h1>Berlatih Looping</h1>    
     <?php 

        echo "<h3>Soal No 1 Looping I Love PHP</h3>";

        echo "LOOPING PERTAMA<br>";

        for($i = 1; $i <= 20; $i++) {
            if($i % 2 == 0) {
                echo "$i - I Love PHP <br>";
            }
        }

        echo "<br>LOOPING KEDUA<br>";

        for($i = 20; $i >= 1; $i--) {
            if($i % 2 == 0) {
                echo "$i - I Love PHP <br>";
            }
        }

        /* 

            Soal No 1 

            Looping I Love PHP

            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) 

            dan Looping yang ke dua menurun (Descending).             
Output: 

            LOOPING PERTAMA

            2 - I Love PHP

            4 - I Love PHP

            6 - I Love PHP

        */

     ?>

</body>

</html>