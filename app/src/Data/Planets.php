<?php

/*
 * Pharo
 */

namespace Data;

/**
 * Description of Planets
 *
 * @author hippo
 */
class Planets {

    /**
     * 
     * @return array
     */
    public static function data() {
        $saturn = [];
        $saturn [] = [2, 9, 4];
        $saturn [] = [7, 5, 3];
        $saturn [] = [6, 1, 8];

        $jupiter = [];
        $jupiter[] = [4, 14, 15, 1];
        $jupiter[] = [9, 7, 6, 12];
        $jupiter[] = [5, 11, 10, 8];
        $jupiter[] = [16, 2, 3, 13];

        $mars = [];
        $mars[] = [11, 24, 7, 20, 3];
        $mars[] = [4, 12, 25, 8, 16];
        $mars[] = [17, 5, 13, 21, 9];
        $mars[] = [10, 18, 1, 14, 22];
        $mars[] = [23, 6, 19, 2, 15];

        $slunce = [];
        $slunce[] = [6, 32, 3, 34, 35, 1];
        $slunce[] = [7, 11, 27, 28, 8, 30];
        $slunce[] = [19, 14, 16, 15, 23, 24];
        $slunce[] = [18, 20, 22, 21, 17, 13];
        $slunce[] = [25, 29, 10, 9, 26, 12];
        $slunce[] = [36, 5, 33, 4, 2, 31];

        $venuse = [];
        $venuse[] = [22, 47, 16, 41, 10, 35, 4];
        $venuse[] = [5, 23, 48, 17, 42, 11, 29];
        $venuse[] = [30, 6, 24, 49, 18, 36, 12];
        $venuse[] = [13, 31, 7, 25, 43, 19, 37];
        $venuse[] = [38, 14, 32, 1, 26, 44, 20];
        $venuse[] = [21, 39, 8, 33, 2, 27, 45];
        $venuse[] = [46, 15, 40, 9, 34, 3, 28];

        $merkur = [];
        $merkur[] = [8, 58, 59, 5, 4, 62, 63, 1];
        $merkur[] = [49, 15, 14, 42, 63, 11, 10, 56];
        $merkur[] = [41, 23, 22, 54, 35, 19, 18, 48];
        $merkur[] = [32, 34, 35, 29, 28, 38, 39, 25];
        $merkur[] = [40, 26, 27, 37, 36, 30, 31, 33];
        $merkur[] = [17, 47, 46, 20, 21, 43, 42, 24];
        $merkur[] = [9, 55, 54, 12, 13, 51, 50, 16];
        $merkur[] = [64, 2, 3, 61, 60, 6, 7, 57];

        $luna = [];
        $luna[] = [37, 78, 29, 70, 21, 62, 13, 54, 5];
        $luna[] = [6, 38, 79, 30, 71, 22, 63, 14, 46];
        $luna[] = [47, 7, 39, 80, 31, 72, 23, 55, 15];
        $luna[] = [16, 48, 8, 40, 81, 32, 64, 24, 56];
        $luna[] = [57, 17, 49, 9, 41, 73, 33, 65, 25];
        $luna[] = [26, 58, 18, 50, 1, 42, 74, 34, 66];
        $luna[] = [67, 27, 59, 10, 51, 2, 43, 75, 35];
        $luna[] = [36, 68, 19, 60, 11, 52, 3, 44, 76];
        $luna[] = [77, 28, 69, 20, 61, 12, 53, 4, 45];


        $data = [];
        $data['saturn'] = $saturn;
        $data['jupiter'] = $jupiter;
        $data['mars'] = $mars;
        $data['slunce'] = $slunce;
        $data['venuse'] = $venuse;
        $data['merkur'] = $merkur;
        $data['luna'] = $luna;







        return $data;
    }

    public static function getData($field = 'all') {
        $data = self::data();
        if ($field == 'all') {
            return $data;
        }
        if (array_key_exists($field, $data)) {
            return $data[$field];
        }
        throw new Exception('Zadane pole neexistuje');
    }

}
