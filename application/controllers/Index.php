<?php
/**
 * Created by PhpStorm.
 * User: holdenhuang
 * Date: 2018/7/22
 * Time: 14:31
 */

class Index extends CI_Controller
{

    public function get()
    {
        $token = 'hchhch520';
        $signature = $_GET["signature"];
        $timestamp  = $_GET['timestamp'];
        $nonce = $_GET['nonce'];
        $echostr = $_GET['echostr'];
        $tmpArr = array($timestamp, $nonce,$token);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $signature == $tmpStr){
            echo  $echostr;
        }else{
            echo  false;
        }
    }
}