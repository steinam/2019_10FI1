<?php
function isVovel($buchstabe) { // Prüfung Vokal
    if ($buchstabe = "A" || $buchstabe = "E" || $buchstabe = "I" || $buchstabe = "O" || $buchstabe = "U") {
        $vokal = 1;
        return $vokal;
    }
    return $vokal;
}
########################################################################
function mra($word) {
    $Cword = strtoupper($word);  // Großbuchstaben
    $lengh = strlen($Cword);
    for ($i = 1; $i < $lengh; $i++) {
        $vokal = isVovel($Cword[$i]);
        if ($vokal == 0) {  // Prüfung Vokal
            if ($Cword[$i] == $Cword[$i - 1]) { // Prüfung Doppelkonsonanten
                $Cword[$i - 1] = " "; // Doppelkonsonant mit Leerzeichen ersetzen
                $Cword = trim($Cword); // Leerzeichen entfernen
            }
        } else {
            $Cword = strtr($Cword, " ", $Cword[$i]); // Vokale mit Leerzeichen ersetzen
            $Cword = trim($Cword); // Leerzeichen entfernen
        }
    }
    $Clengh = strlen($Cword);
    if ($Clengh > 6) {
        $Rword = substr($Cword, 3) . substr($Cword, -3); // String kürzen
        return $Rword;
    }
    return $Cword;
}
################################################################################
$word = "Basketball";
$New_word = mra($word);
echo($New_word);

