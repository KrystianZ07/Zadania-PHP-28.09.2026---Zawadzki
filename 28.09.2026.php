<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania PHP</title>
</head>
<body>
    <?php

        // 1. SUMA
        function suma($a, $b) {
            echo "1. Suma: " . ($a + $b) . "<br><br>";
        }
        suma(5, 3);


        // 2. PODSTAWY
        function podstawy($a, $b) {
            echo "2. Podstawy dla $a i $b:<br>";
            echo "Różnica = " . ($a - $b) . "<br>";
            echo "Iloczyn = " . ($a * $b) . "<br>";
            echo "Iloraz = " . ($a / $b) . "<br><br>";
        }
        podstawy(10, 2);


        // 3. KALKULATOR
        function kalkulator($a, $b, $dzialanie) {
            if ($dzialanie == "+") $w = $a + $b;
            if ($dzialanie == "-") $w = $a - $b;
            if ($dzialanie == "*") $w = $a * $b;
            if ($dzialanie == "/") $w = $a / $b;
            
            echo "3. Wynik = $w<br><br>";
        }
        kalkulator(15, 5, "+");


        // 4. MAKS
        function maks($a, $b, $c) {
            $m = $a;
            if ($b > $m) $m = $b;
            if ($c > $m) $m = $c;
            echo "4. Maksimum z ($a, $b, $c) to: $m<br><br>";
        }
        maks(4, 9, 2);


         // 5. WZROST
        function wzrost($w) {
            echo "5. Wzrost $w cm: ";
            if ($w < 150) {
                echo "niski<br><br>";
            } elseif ($w > 180) {
                echo "wysoki<br><br>";
            } else {
                echo "średni<br><br>";
            }
        }
        wzrost(170);


        // 6. BMI
        function bmi($wzrost_cm, $waga) {
            $wzrost_m = $wzrost_cm / 100;
            $wynik_bmi = $waga / ($wzrost_m * $wzrost_m);
            
            echo "6. BMI (" . round($wynik_bmi, 2) . "): ";
            if ($wynik_bmi < 18.5) {
                echo "za mało!<br><br>";
            } elseif ($wynik_bmi > 25) {
                echo "za dużo!<br><br>";
            } else {
                echo "OK!<br><br>";
            }
        }
        bmi(185, 82);


        // 7. STARSZY
        function starszy($rok1, $rok2) {
            echo "7. Starsza osoba: ";
            if ($rok1 < $rok2) {
                echo "Pierwsza osoba jest starsza<br><br>";
            } else {
                echo "Druga osoba jest starsza<br><br>";
            }
        }
        starszy(2008, 2007);


        // 8. PRZESTĘPNY
        function przestepny($rok) {
            echo "8. Rok $rok: ";
            if ($rok % 4 == 0) {
                echo "jest przestępny<br><br>";
            } else {
                echo "nie jest przestępny<br><br>";
            }
        }
        przestepny(2026);


        // 9. SIŁA
        function sila($haslo) {
            $dl = strlen($haslo);
            echo "9. Siła hasła \"$haslo\": ";
            if ($dl <= 4) {
                echo "słabe<br><br>";
            } elseif ($dl <= 8) {
                echo "średnie<br><br>";
            } else {
                echo "mocne<br><br>";
            }
        }
        sila("abc");
        sila("haslo123");


        // 10. TROJKAT
        function trojkat($a, $b, $c) {
            echo "10. Trójkąt ($a, $b, $c): ";
            if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
                echo "da się utworzyć<br><br>";
            } else {
                echo "nie da się utworzyć<br><br>";
            }
        }
        trojkat(3, 4, 5);


        // 11. SZYFR
        function szyfr($litera) {
            $kod = ord($litera) + 2;
            $zaszyfrowana = chr($kod);
            echo "11. Szyfr (dla $litera): $zaszyfrowana<br>";
        }
        szyfr('a');
        szyfr('k');

    ?>
</body>
</html>