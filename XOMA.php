<?php

class XOMA
{
    //Function for converting string into decryptive String
    public static function CONVERT_STRING($e)
    {

        include 'LAN.php';

        $put_in_array = str_split($e);

        $TO_ARR = [];

        foreach ($put_in_array as $b) {

            if (isset($LAN[$b])) {

                array_push($TO_ARR, $LAN[$b]);

            } else {

                array_push($TO_ARR, $b);
            }

        }

        $TO_STRING = implode($TO_ARR);

        return $TO_STRING;

    }

    //Function for converting string into decryptive Array
    public static function CONVERT_ARRAY($e)
    {

        $put_in_array = str_split($e);

        $TO_ARR = [];

        foreach ($put_in_array as $b) {

            if (isset($LAN[$b])) {

                array_push($TO_ARR, $LAN[$b]);

            } else {

                array_push($TO_ARR, $b);
            }

        }

        $TO_STRING = implode($TO_ARR);

        return $TO_ARR;

    }

    //Function for converting Decryptive string into standart readible String
    public static function DECRYPT_STRING($e)
    {

        include 'LAN.php';

        $final_string_arr = [];

        $input_string = $e;

        $m = $e;

        foreach ($LAN as $a => $b) {

            $countarr = count($final_string_arr) - 1;

            if ($countarr > 0) {

                $m = $final_string_arr[$countarr];

                $n = str_replace($b, $a, $m);

                array_push($final_string_arr, $n);

            } else {

                $n = str_replace($b, $a, $m);

                array_push($final_string_arr, $n);

            }
        }

        $count = count($final_string_arr) - 1;

        return $final_string_arr[$count];

    }
}
