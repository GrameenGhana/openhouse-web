<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of APIController
 *
 * @author skwakwa
 */
class APIController {
 
    
     public static function register($username,$company,$designation,$tel) {

        $sURL = "http://testadmin:admin@http://188.166.30.140:8080/motech-platform-server/module/open-day/web-api/subscribe"; // The POST URL
        $sPD = "name=" . $username . "&company=" . $company . "&designation=" . $designation . "&msisdn=" . $tel ; // The POST Data
        $aHTTP = array(
            'http' => // The wrapper to be used
            array(
                'method' => 'POST', // Request Method
                // Request Headers Below
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => $sPD
            )
        );
        $context = stream_context_create($aHTTP);
        $contents = file_get_contents($sURL, false, $context);
        return $contents;
    }

}
