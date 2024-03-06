<?php
    
    function hitungLuasSegitiga($alas, $tinggi) {
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }

    function deteksiJenisSegitiga($alas, $tinggi) {
        if($alas == $tinggi) {
            return "Segitiga Sama Sisi";
        } elseif($alas == 0.5 * $tinggi || $tinggi == 0.5 * $alas) {
            return "Segitiga Siku-siku";
        } else {
            return "Segitiga Biasa";
        }
    }

?>