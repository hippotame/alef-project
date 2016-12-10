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
class Alphabet {

    public static function data() {
        $alphabet = [];

        $alphabet['a'] = [
            'c_value' => 1000,
            'unicode' => '05D0',
            'unicode_name' => "HEBREW ' + l + 'ALEF",
            'num' => 1,
            'fone_name' => 'alef',
            'what' => 'býk'
        ];
        $alphabet['b'] = [
            'c_value' => 2,
            'unicode' => '05D1',
            'unicode_name' => "HEBREW ' + l + 'BET",
            'num' => 2,
            'fone_name' => 'beth',
            'what' => 'dům'
        ];
        $alphabet['g'] = [
            'c_value' => 2,
            'unicode' => '05D2',
            'unicode_name' => "HEBREW ' + l + 'GIMEL",
            'num' => 3,
            'fone_name' => 'ghimel',
            'what' => 'velbloud'
        ];
        $alphabet['d'] = [
            'c_value' => 2,
            'unicode' => '05D3',
            'unicode_name' => "HEBREW ' + l + 'DALET",
            'num' => 4,
            'fone_name' => 'daleth',
            'what' => 'dveře'
        ];
        $alphabet['h'] = [
            'c_value' => 1,
            'unicode' => '05D4',
            'unicode_name' => "HEBREW ' + l + 'HE",
            'num' => 5,
            'fone_name' => 'he',
            'what' => 'okno'
        ];
        $alphabet['v'] = [
            'c_value' => 1,
            'unicode' => '05D5',
            'unicode_name' => "HEBREW ' + l + 'VAV",
            'num' => 6,
            'fone_name' => 'vau',
            'what' => 'hák'
        ];
        $alphabet['z'] = [
            'c_value' => 1,
            'unicode' => '05D6',
            'unicode_name' => "HEBREW ' + l + 'ZAYIN",
            'num' => 7,
            'fone_name' => 'zajin',
            'what' => 'meč'
        ];
        $alphabet['ch'] = [
            'c_value' => 1,
            'unicode' => '05D7',
            'unicode_name' => "HEBREW ' + l + 'HET",
            'num' => 8,
            'fone_name' => 'chet',
            'what' => 'plot'
        ];
        $alphabet['t'] = [
            'c_value' => 1,
            'unicode' => '05D8',
            'unicode_name' => "HEBREW ' + l + 'TET",
            'num' => 9,
            'fone_name' => 'thet',
            'what' => 'had'
        ];
        $alphabet['j'] = [
            'c_value' => 1,
            'unicode' => '05D9',
            'unicode_name' => "HEBREW ' + l + 'YOD",
            'num' => 10,
            'fone_name' => 'jod',
            'what' => 'ruka'
        ];
        $alphabet['k,ch'] = [
            'c_value' => 2,
            'unicode' => '05DB',
            'unicode_name' => "HEBREW ' + l + 'KAF",
            'num' => 20,
            'fone_name' => 'kaf',
            'what' => 'pěst'
        ];
        $alphabet['l'] = [
            'c_value' => 1,
            'unicode' => '05DC',
            'unicode_name' => "HEBREW ' + l + 'LAMED",
            'num' => 30,
            'fone_name' => 'lamed',
            'what' => 'ostruha'
        ];
        $alphabet['m'] = [
            'c_value' => 1000,
            'unicode' => '05DE',
            'unicode_name' => "HEBREW ' + l + 'MEM",
            'num' => 40,
            'fone_name' => 'mem',
            'what' => 'voda'
        ];
        $alphabet['n'] = [
            'c_value' => 1,
            'unicode' => '05E0',
            'unicode_name' => "HEBREW ' + l + 'NUN",
            'num' => 50,
            'fone_name' => 'nun',
            'what' => 'ryba'
        ];
        $alphabet['s'] = [
            'c_value' => 1,
            'unicode' => '05E1',
            'unicode_name' => "HEBREW ' + l + 'SAMEKH",
            'num' => 60,
            'fone_name' => 'samech',
            'what' => 'podpěra'
        ];
        $alphabet['i'] = [
            'c_value' => 1,
            'unicode' => '05E2',
            'unicode_name' => "HEBREW ' + l + 'AYIN",
            'num' => 70,
            'fone_name' => 'ajin',
            'what' => 'oko'
        ];
        $alphabet['p'] = [
            'c_value' => 2,
            'unicode' => '05E4',
            'unicode_name' => "HEBREW ' + l + 'PE",
            'num' => 80,
            'fone_name' => 'pe',
            'what' => 'ústa'
        ];
        $alphabet['Ts'] = [
            'c_value' => 1,
            'unicode' => '05E6',
            'unicode_name' => "HEBREW ' + l + 'TSADI",
            'num' => 90,
            'fone_name' => 'cade',
            'what' => 'udice'
        ];
        $alphabet['k'] = [
            'c_value' => 1,
            'unicode' => '05E7',
            'unicode_name' => "HEBREW ' + l + 'QOF",
            'num' => 100,
            'fone_name' => 'kuf',
            'what' => 'týl'
        ];
        $alphabet['r'] = [
            'c_value' => 2,
            'unicode' => '05E8',
            'unicode_name' => "HEBREW ' + l + 'RESH",
            'num' => 200,
            'fone_name' => 'reš',
            'what' => 'hlava'
        ];
        $alphabet['š'] = [
            'c_value' => 1000,
            'unicode' => '05E9',
            'unicode_name' => "HEBREW ' + l + 'SHIN",
            'num' => 300,
            'fone_name' => 'šin',
            'what' => 'zub'
        ];
        $alphabet['th'] = [
            'c_value' => 2,
            'unicode' => '05EA',
            'unicode_name' => "HEBREW ' + l + 'TAV",
            'num' => 400,
            'fone_name' => 'tau',
            'what' => 'kříž'
        ];
        return $alphabet;
    }

    
    
    
    public static function getAll() {
        $data = self::data();
        return $data;
    }

}
