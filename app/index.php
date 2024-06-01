<?php
    //Uzdevums 1
    // Aprēķini masīva summu
    $numbers = [1, 2, 3, 4, 5];
    $result = 0;
    foreach($numbers as $value){
        $result += $value;
    }
    echo "Summa: " . $result . "<br>";

    //Uzdevums 2
    //Atrodi maksimālo vērtību masīvā
    $numbers = [4, 43, 35, 53, 60, 3, 30];
    $maxValue = $numbers[0];
    foreach($numbers as $value){
        if($value > $maxValue){
            $maxValue = $value;
        }
    }
    echo "<br>" . "Maksimums: " . $maxValue . "<br>";

    //Uzdevums 3
    //Aprēķini masīvā vidējo vērtību
    $numbers = [1, 2, 3, 4, 5];
    $counter = 0;
    $sum = 0;
    foreach($numbers as $value){
        $sum += $value;
        $counter++;
    }
    echo "<br>" . "Vidējā: " . $sum / $counter . "<br>";

    //Uzdevums 4
    //Atrodi minimālo vērtību masīvā
    $numbers = [4, 43, 35, 53, 60, 3, 30];
    $minValue = $numbers[0];
    foreach($numbers as $value){
        if($value < $minValue){
            $minValue = $value;
        }
    }
    echo "<br>" . "Minimums: " . $minValue . "<br>";

    //Uzdevums 5
    //Saskaiti cik masīvā ir pāra un cik nepāra skaitļi.
    $numbers = [4, 43, 35, 53, 60, 3, 30];
    $oddCounter = 0;
    $evenCounter = 0;
    foreach($numbers as $value){
        if($value % 2 == 0){
            $evenCounter++;
        } else {
            $oddCounter++;
        }
    }
    echo "<br>" . "Pāra: " . $evenCounter . "; Nepāra: " . $oddCounter . "<br>";

    //Uzdevums 6
    //Apgriez masīvu otrādi
    $numbers = [1, 2, 3, 4, 5];
    $length = $position = 0;
    $numbersOpposite = [];
    foreach($numbers as $value){
        $result += $value;
        $length++;
    }
    for ($i = $length - 1; $i >= 0  ; $i--){
        $numbersOpposite[$position] = $numbers[$i];
        $position++;
    }
    echo "<br>" . "Apgriezts: ";
    print_r($numbersOpposite);
    echo "<br>";

    //Uzdevums 7
    //Izdzēs ierakstu dublikātus masīvā
    $numbers = [1, 2, 3, 3, 4, 5, 5, 5, 5, 6, 7];
    $comparison = $numbers[0];
    $numbersUnique = [$comparison];
    foreach($numbers as $value){
        if($value <> $comparison){
            $numbersUnique[] = $value;
            $comparison = $value;
        }
    }
    echo "<br>" . "Unikāli: ";
    print_r($numbersUnique);
    echo "<br>";

    //Uzdevums 8
    //Apvieno divus masīvus
    $array1 = [1, 2, 3];
    $array2 = [5, 6, 7];
    foreach($array2 as $value){
        $array1[] = $value;
    }
    echo "<br>" . "Apvienots: ";
    print_r($array1);
?>