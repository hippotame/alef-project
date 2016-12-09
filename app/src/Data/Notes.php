<?php

/*
 * Pharo
 */

namespace Data;

/**
 * Description of Notes
 *
 * @author hippo
 */
class Notes {

    public static function data() {
        $octave = [];
        $octave[1] = 'D';
        $octave[] = 'Dis';
        $octave[] = 'E';
        $octave[] = 'Es';
        $octave[] = 'F';
        $octave[] = 'Fis';
        $octave[] = 'G';
        $octave[] = 'Gis';
        $octave[] = 'A';
        $octave[] = 'B';
        $octave[] = 'C';
        $octave[] = 'Cis';
        $notes = [];
        $i = 1;
        for ($a = 1; $a < 86; $a++) {
            if ($i > 12) {
                $i = 1;
            }
            $note = $octave[$i];
            $notes[$a] = $note;
            $i++;
        }
        return $notes;
    }
    
    
    public static function getData($note){
        $notes = self::data();
        return $notes[$note];
    }

}
