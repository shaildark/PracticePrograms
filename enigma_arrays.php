<?php

class enigma
{
    public $msg_ar;
    public $secret_arr;
    function __construct()
    {
        $this->msg_ar = array();

        $key = 1;
        for ($i = 65; $i <= 90; $i++) {
            $j = chr($i);

            $this->msg_ar[$key] = $j;
            $key++;
        }



        $key_arr = $this->msg_ar;
        $this->secret_arr = array_fill_keys($key_arr, "A");




        for ($i = 65; $i <= 90; $i++) {
            $k = $i;
            $val = "";
            for ($j = 1; $j < 27; $j++) {

                $val .= chr($k);
                $k++;
                if ($k == 91) {
                    $k = 65;
                }
            }

            $m = chr($i);
            $this->secret_arr[$m] = $val;
        }


        // $a='D';
        // $m=array_keys($this->msg_ar,$a);
        // $str1=implode($m);
        // echo "<br>".$str1."<br>";
        // print_r(array_search($a,$this->msg_ar));
        // print_r($m);
    }

    public function encryptMessage($message, $keyname, $keylength)
    {
        $messagelength = strlen($message);
        $secretmsg = "";
        for ($i = 0; $i < $messagelength; $i++) {
            $secretmsg .= $this->encrypt1($message[$i], $keyname[$i]);
        }
        return $secretmsg;
    }

    public function encrypt1($msg, $key)
    {
        $msgpositionArray = array_keys($this->msg_ar, $msg);
        $msgposition = implode($msgpositionArray);
        $str = $this->secret_arr[$key];
        $secret = $str[$msgposition - 1];
        return $secret;
    }

    public function decryptMessage($message, $keyname, $keylength)
    {
        $messagelength = strlen($message);
        $secretmsg = "";
        for ($i = 0; $i < $messagelength; $i++) {
            $secretmsg .= $this->decrypt1($message[$i], $keyname[$i]);
        }
        return $secretmsg;
    }

    public function decrypt1($msg, $key)
    {
        $keymsg=$this->secret_arr[$key];
        $keyposition=strpos($keymsg,$msg)+1;
        $secret=$this->msg_ar[$keyposition];
        return $secret;
    }

}
