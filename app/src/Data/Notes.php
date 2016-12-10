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

    public static function getData($note) {
        $notes = self::data();
        if (array_key_exists($note, $notes)) {
            return $notes[$note];
        }
        $note_try = $note / 10; 
        if (array_key_exists($note_try, $notes)) {
            return $notes[$note_try];
        }
        $note_try = $note / 100; 
        if (array_key_exists($note_try, $notes)) {
            return $notes[$note_try];
        }
        $note_try = $note / 1000; 
        if (array_key_exists($note_try, $notes)) {
            return $notes[$note_try];
        }
        return 'na';
    }

}
