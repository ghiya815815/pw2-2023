<?php
/**
 * Function kelulusan
 * Function grade
 */

function kelulusan($rerata){
    if ($rerata > 55) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

function predikat($grades){
    switch ($grades) {
        case 'A':
            return "Sangat Memuaskan";
        case 'B':
            return "Memuaskan";
        case 'C':
            return "Cukup";
        case 'D':
            return "Kurang";
        case 'E':
            return "Sangat Kurang";
        default:
            return "Tidak Ada";
    }
}

function grade($rerata) {
    if ($rerata <= 100 && $rerata >= 85) {
        return "A";
    } elseif ($rerata <= 84 && $rerata >= 70) {
        return "B";
    } elseif ($rerata <= 69 && $rerata >= 56) {
        return "C";
    } elseif ($rerata <= 55 && $rerata >= 36) {
        return "D";
    } elseif ($rerata <= 35 && $rerata >= 0) {
        return "E";
    } else {
        return "I";
    }
}
?>
