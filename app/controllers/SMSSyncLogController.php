<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SMSSyncLog
 *
 * @author skwakwa
 */
class SMSSyncLogController {

    public function __construct() {
        ;
        $this->rules = array(
            'from' => 'required|min:10|max:16|unique:subscribers',
            'device_id' => 'required',
            'sent_timestamp' => 'required',
            'sent_to' => 'required|numeric'
        );
    }

    public function index() {
        
    }

    public function save() {

        if ($validator->fails()) {
            
        } else {
            $from = Input::get("from");
            $message = Input::get("message");
            $message_id = Input::get("message_id");
            $sent_to = Input::get("sent_to");
            $secret = Input::get("secret");
            $device_id = Input::get("device_id");
            $sent_timestamp = Input::get("sent_timestamp");

            $sms = new SMSLog;
            $sms->message = $message;
            $sms->sent_from = $from;
            $sms->message_id = $message_id;
            $sms->sent_to = $sent_to;
            $sms->secret = $secret;
            $sms->device_id = $device_id;
            $sms->sent_timestamp = $sent_timestamp;

            $sms->created_by = "smslog";


            if ($sms->save()) {
                //Fire Request
                
                
            }
        }
    }

}
