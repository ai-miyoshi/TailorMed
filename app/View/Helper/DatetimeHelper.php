<?php
App::uses('AppHelper', 'View/Helper');

class DatetimeHelper extends AppHelper {
    public $helpers = array('Html');

    public function getDiff($caketime) {
        $diff = '';
        $diffmin = intval((time()-strtotime($caketime.' UTC'))/60);
        if($diffmin <= 1) {
            $diff = 'a minute';
        } elseif($diffmin < 60) {
            $diff = $diffmin.' minutes';
        } else{
            $diffhr = intval($diffmin/60);
            if($diffhr == 1) {
                $diff = 'an hour';
            } elseif($diffhr <24) { 
                $diff = $diffhr.' hours';
            } else{ 
                $diffday = intval($diffhr/24);
                if($diffday ==1) {
                    $diff = 'a day';
                } else {
                    $diff = $diffday.' days';
                }
            }
        }

        return $diff . ' ago';
    }
}
