<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DateTImeHelper
 *
 * @author apple
 */
class DateTImeHelper {

    /**
     * 
     * @param String $time
     */
    public static function timeToHuman($time) {
        $timeConverted = strtotime($time);
        if ($timeConverted) {
            return date('h:i a', $timeConverted);
        }
        return "";
    }

    public static function dateToHuman($date) {
        $timeConverted = strtotime($date);
        if ($timeConverted) {
            return date('M. j, Y', $timeConverted);
        }
        return "";
    }

}
