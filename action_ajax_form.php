<?php

if (isset($_POST["count"])) {
    $count = $_POST["count"];
    $check = 1;
    $box = [];

    while ($count > 0) {
        if (($count % 12 >= 0) && ($count >= 12)) {
            $box[] = [
                'box' => 12,
                'check' => $check++
            ];
            $count = $count - 12;
        } elseif (($count % 6 >= 0) && ($count >= 6)) {
            $box[] = [
                'box' => 6,
                'check' => $check++
            ];
            $count = $count - 6;
        } else {
            $box[] = [
                'box' => 3,
                'check' => $check++
            ];
            $count = $count - 3;
        }
    }

    

    // Переводим массив в JSON
    echo json_encode($box);
}
