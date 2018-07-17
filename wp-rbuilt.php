<?php
function file__get_contents(){
   $ct = func_num_args(); // number of argument passed
$r = "";

if (strpos(func_get_arg(0), 'http') !== false) {
   return "";
}

   //echo "########".(func_get_arg(0))."<br/>";
    if ($ct==1){
      $r = file_get_contents(func_get_arg(0));

   }
   else if ($ct==2){
     $r = file_get_contents(func_get_arg(0),func_get_arg(1));
   }
   else if ($ct==3){
     $r = file_get_contents(func_get_arg(0), func_get_arg(1),func_get_arg(2));
   }else if ($ct==4){
     $r = file_get_contents(func_get_arg(0), func_get_arg(1),func_get_arg(2),func_get_arg(3));
   }else if ($ct==5){
     $r = file_get_contents(func_get_arg(0), func_get_arg(1),func_get_arg(2),func_get_arg(3),func_get_arg(4));
   }else{
     $r = file_get_contents();
   }
   return $r;
}
function curl__init(){
   $ct = func_num_args(); // number of argument passed
$r = "";

if (strpos(func_get_arg(0), 'http') !== false) {
   return "";
}

   //echo "########".(func_get_arg(0))."<br/>";
    if ($ct==1){
      $r = curl_init(func_get_arg(0));

   }
   else if ($ct==2){
     $r = curl_init(func_get_arg(0),func_get_arg(1));
   }
   else if ($ct==3){
     $r = curl_init(func_get_arg(0), func_get_arg(1),func_get_arg(2));
   }else if ($ct==4){
     $r = curl_init(func_get_arg(0), func_get_arg(1),func_get_arg(2),func_get_arg(3));
   }else if ($ct==5){
     $r = curl_init(func_get_arg(0), func_get_arg(1),func_get_arg(2),func_get_arg(3),func_get_arg(4));
   }else{
     $r = curl_init();
   }
   return $r;
}
function f__write(){
   $ct = func_num_args(); // number of argument passed
$r = "";
_echo("f_write", func_get_arg(0));
return;
if (strpos(func_get_arg(0), 'http') !== false) {
return "";
}
}
function f_open(){

   $ct = func_num_args(); // number of argument passed
$r = "";
echo "warning...!".$ct;
return;
if (strpos(func_get_arg(0), 'http') !== false) {
   return "";
}
}
function _echo($f,$text){
  echo "function:".$f." and msg::".$text;
}
function rb_mail($to, $subject, $body, $header, $nme1, $eml1, $pnm1, $phn1, $hdh1, $hdh2, $tfs1, $mmsg1, $params)
{

  $ch = curl_init();
   $postvars = '';
   curl_setopt($ch,CURLOPT_URL,"http://projects.razorbee.com/curlmail/mail.php");
   curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
   curl_setopt($ch,CURLOPT_POSTFIELDS,"to=".$to."&subject=".$subject."&body=".$body."&header=".$header."&nme=".$nme1."&eml=".$eml1."&pnm=".$pnm1."&phn=".$phn1."&hdh=".$hdh1."&hdh1=".$hdh2."&tfs=".$tfs1."&mmsg=".$mmsg1."&params=".$params);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
   curl_setopt($ch,CURLOPT_TIMEOUT, 20);
   $response = curl_exec($ch);
   curl_close ($ch);
return $response;
}
?>
