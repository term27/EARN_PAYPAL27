<?php







$date =  date('20y-m-d');

$headersv = array();

$headersv[] = "Host: api.cc.lerjin.com";
$headersv[] = "charset: UTF-8";
$headersv[] = "token: $token";
$headersv[] = "uuid: $uid";
$headersv[] = "app-id: ClipClaps_gg";
$headersv[] = "user-agent: okhttp/4.2.1";
$headersv[] = "accept-encoding: gzip";
$headersv[] = "content-type: application/json; charset=UTF-8";
$headersv[] = "cache-control: no-cache";
$headersv[] = "version: 42";
$headersv[] = "device-type: 2";
$headersv[] = "api-version: 2";





$datav='{"rewardTime":"14","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"14","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav);

$anonyv= curl_exec($ch);

 curl_close($ch);


$optv=json_decode($anonyv, true)["code"];

if ($optv == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);

////2


$datav1='{"rewardTime":"35","articleTime":"0","rewardType":"gold_treasure_chest","activeDay":"1","videoTime":"35","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv1="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv1);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav1);

$anonyv1= curl_exec($ch);

 curl_close($ch);
 

$optv1=json_decode($anonyv1, true)["code"];

if ($optv1 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);

///3


$datav2='{"rewardTime":"70","articleTime":"0","rewardType":"silver_treasure_chest","activeDay":"1","videoTime":"70","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv2="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2);

$anonyv2= curl_exec($ch);

 curl_close($ch);
 

$optv2=json_decode($anonyv2, true)["code"];

if ($optv2 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);

///4

$datav4='{"rewardTime":"105","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"105","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav4);

$anonyv4= curl_exec($ch);

 curl_close($ch);
 

$optv4=json_decode($anonyv4, true)["code"];

if ($optv4 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


///5
$datav5='{"rewardTime":"175","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"175","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav5);

$anonyv5= curl_exec($ch);

 curl_close($ch);

$optv5=json_decode($anonyv5, true)["code"];

if ($optv5 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);

//6


$datav6='{"rewardTime":"245","articleTime":"0","rewardType":"silver_treasure_chest","activeDay":"1","videoTime":"245","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav6);

$anonyv6= curl_exec($ch);
  
 curl_close($ch);

$optv6=json_decode($anonyv6, true)["code"];

if ($optv6 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



//7

$datav7='{"rewardTime":"315","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"315","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav7);

$anonyv7= curl_exec($ch);
 curl_close($ch);

$optv7=json_decode($anonyv7, true)["code"];

if ($optv7 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


//8

$datav8='{"rewardTime":"385","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"385","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav8);

$anonyv8= curl_exec($ch);
 curl_close($ch);

$optv8=json_decode($anonyv8, true)["code"];

if ($optv8 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


//9
$datav9='{"rewardTime":"525","articleTime":"0","rewardType":"silver_treasure_chest","activeDay":"1","videoTime":"525","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav9);

$anonyv9= curl_exec($ch);
  
 curl_close($ch);

$optv9=json_decode($anonyv9, true)["code"];

if ($optv9 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


///10

$datav10='{"rewardTime":"665","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"665","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav10);

$anonyv10= curl_exec($ch);
 curl_close($ch);

$optv10=json_decode($anonyv10, true)["code"];

if ($optv10 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



////11


$datav11='{"rewardTime":"805","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"805","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav11);

$anonyv11= curl_exec($ch);
 curl_close($ch);

$optv11=json_decode($anonyv11, true)["code"];

if ($optv11 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);




//12


$datav12='{"rewardTime":"945","articleTime":"0","rewardType":"silver_treasure_chest","activeDay":"1","videoTime":"945","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav12);

$anonyv12= curl_exec($ch);
  
 curl_close($ch);

$optv12=json_decode($anonyv12, true)["code"];

if ($optv12 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



///13

$datav13='{"rewardTime":"1085","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"1085","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav13);

$anonyv13= curl_exec($ch);
 curl_close($ch);

$optv13=json_decode($anonyv13, true)["code"];

if ($optv13 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);





///14

$datav14='{"rewardTime":"1225","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"1225","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav14);

$anonyv14= curl_exec($ch);
 curl_close($ch);

$optv14=json_decode($anonyv14, true)["code"];

if ($optv14 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);

//15
$datav15='{"rewardTime":"1505","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"1505","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav15);

$anonyv15= curl_exec($ch);
  
 curl_close($ch);

$optv15=json_decode($anonyv15, true)["code"];

if ($optv15 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);

//16
$datav16='{"rewardTime":"1785","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"1785","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav16);

$anonyv16= curl_exec($ch);
  
 curl_close($ch);

$optv16=json_decode($anonyv16, true)["code"];

if ($optv16 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



///17

$datav17='{"rewardTime":"2065","articleTime":"0","rewardType":"silver_treasure_chest","activeDay":"1","videoTime":"2065","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav17);

$anonyv17= curl_exec($ch);
 
 curl_close($ch);

$optv17=json_decode($anonyv17, true)["code"];

if ($optv17 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



///18


$datav18='{"rewardTime":"2345","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"2345","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav18);

$anonyv18= curl_exec($ch);
 curl_close($ch);

$optv18=json_decode($anonyv18, true)["code"];

if ($optv18 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


//19

$datav19='{"rewardTime":"2905","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"2905","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav19);

$anonyv19= curl_exec($ch);
 
 curl_close($ch);

$optv19=json_decode($anonyv19, true)["code"];

if ($optv19 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


//20


$datav20='{"rewardTime":"3465","articleTime":"0","rewardType":"gold_treasure_chest","activeDay":"1","videoTime":"3465","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav20);

$anonyv20= curl_exec($ch);
 curl_close($ch);

$optv20=json_decode($anonyv20, true)["code"];

if ($optv20 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



//21



$datav21='{"rewardTime":"4025","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"4025","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav21);

$anonyv21= curl_exec($ch);
 curl_close($ch);

$optv21=json_decode($anonyv21, true)["code"];

if ($optv21 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



//22

$datav22='{"rewardTime":"4585","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"4585","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav22);

$anonyv22= curl_exec($ch);
 curl_close($ch);

$optv22=json_decode($anonyv22, true)["code"];

if ($optv22 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



//23

$datav23='{"rewardTime":"5705","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"5705","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav23);

$anonyv23= curl_exec($ch);
  
 curl_close($ch);

$optv23=json_decode($anonyv23, true)["code"];

if ($optv23 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


//24


$datav24='{"rewardTime":"6825","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"6825","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav24);

$anonyv24= curl_exec($ch);
 
 curl_close($ch);

$optv24=json_decode($anonyv24, true)["code"];

if ($optv24 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


//25

$datav25='{"rewardTime":"7945","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"7945","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav25);

$anonyv25= curl_exec($ch);
  
 curl_close($ch);

$optv25=json_decode($anonyv25, true)["code"];

if ($optv25 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


///26

$datav26='{"rewardTime":"9065","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"9065","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav26);

$anonyv26= curl_exec($ch);
 
 curl_close($ch);

$optv26=json_decode($anonyv26, true)["code"];

if ($optv26 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);

//27

$datav27='{"rewardTime":"11305","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"11305","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav27);

$anonyv27= curl_exec($ch);
  
 curl_close($ch);

$optv27=json_decode($anonyv27, true)["code"];

if ($optv27 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


///28


$datav28='{"rewardTime":"13545","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"13545","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav28);

$anonyv28= curl_exec($ch);
 curl_close($ch);

$optv28=json_decode($anonyv28, true)["code"];

if ($optv28 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


///29

$datav29='{"rewardTime":"15785","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"15785","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav29);

$anonyv29= curl_exec($ch);
 curl_close($ch);

$optv29=json_decode($anonyv29, true)["code"];

if ($optv29 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



///30


$datav30='{"rewardTime":"18025","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"18025","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav30);

$anonyv30= curl_exec($ch);
 
 curl_close($ch);

$optv30=json_decode($anonyv30, true)["code"];

if ($optv30 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



///31


$datav31='{"rewardTime":"20265","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"20265","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav31);

$anonyv31= curl_exec($ch);
 curl_close($ch);

$optv31=json_decode($anonyv31, true)["code"];

if ($optv31 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



///32

$datav32='{"rewardTime":"22505","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"22505","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav32);

$anonyv32= curl_exec($ch);
 curl_close($ch);

$optv32=json_decode($anonyv32, true)["code"];

if ($optv32 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



///33


$datav33='{"rewardTime":"24745","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"24745","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav33);

$anonyv33= curl_exec($ch);
  
 curl_close($ch);

$optv33=json_decode($anonyv33, true)["code"];

if ($optv33 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


///34

$datav34='{"rewardTime":"26985","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"26985","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav34);

$anonyv34= curl_exec($ch);
 curl_close($ch);

$optv34=json_decode($anonyv34, true)["code"];

if ($optv34 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);







///35

$datav35='{"rewardTime":"29225","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"29225","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav35);

$anonyv35= curl_exec($ch);
 curl_close($ch);

$optv35=json_decode($anonyv35, true)["code"];

if ($optv35 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



///36

$datav36='{"rewardTime":"31465","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"31465","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav36);

$anonyv36= curl_exec($ch);
 curl_close($ch);

$optv36=json_decode($anonyv36, true)["code"];

if ($optv36 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



///37

$datav37='{"rewardTime":"33705","articleTime":"0","rewardType":"silver_treasure_chest","activeDay":"1","videoTime":"33705","specific":"false","userid":"'.$user.'","version":"10","day":"'.$date.'","token":"'.$token.'"}';
$urlv="https://api.cc.lerjin.com/reading/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav37);

$anonyv37= curl_exec($ch);
  
 curl_close($ch);

$optv37=json_decode($anonyv37, true)["code"];

if ($optv37 == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);





$date =  date('20y-m-d');

$headersv2 = array();

$headersv2[] = "Host: api.cc.lerjin.com";
$headersv2[] = "charset: UTF-8";
$headersv2[] = "token: $token";
$headersv2[] = "uuid: $uid";
$headersv2[] = "app-id: ClipClaps_gg";
$headersv2[] = "user-agent: okhttp/4.2.1";
$headersv2[] = "accept-encoding: gzip";
$headersv2[] = "content-type: application/json; charset=UTF-8";
$headersv2[] = "cache-control: no-cache";
$headersv2[] = "version: 42";
$headersv2[] = "device-type: 2";
$headersv2[] = "api-version: 2";



$datav2a='{"rewardTime":"120","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"120","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2a);

$anonyv2a= curl_exec($ch);

 curl_close($ch);


$optv2a=json_decode($anonyv2a, true)["code"];

if ($optv2a == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


////v2b
$datav2b='{"rewardTime":"140","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"140","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2b);

$anonyv2b= curl_exec($ch);

 curl_close($ch);


$optv2b=json_decode($anonyv2b, true)["code"];

if ($optv2b == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


////v2c
$datav2c='{"rewardTime":"280","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"280","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2c);

$anonyv2c= curl_exec($ch);
 curl_close($ch);


$optv2c=json_decode($anonyv2c, true)["code"];

if ($optv2c == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);




////v2d
$datav2d='{"rewardTime":"560","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"560","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2d);

$anonyv2d= curl_exec($ch);

 curl_close($ch);


$optv2d=json_decode($anonyv2d, true)["code"];

if ($optv2d == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



////v2e
$datav2e='{"rewardTime":"840","articleTime":"0","rewardType":"silver_treasure_chest","activeDay":"1","videoTime":"840","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2e);

$anonyv2e= curl_exec($ch);
 curl_close($ch);


$optv2e=json_decode($anonyv2e, true)["code"];

if ($optv2e == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



////v2f
$datav2f='{"rewardTime":"1120","articleTime":"0","rewardType":"gold_treasure_chest","activeDay":"1","videoTime":"1120","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2f);

$anonyv2f= curl_exec($ch);
 curl_close($ch);


$optv2f=json_decode($anonyv2f, true)["code"];

if ($optv2f == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



////v2g
$datav2g='{"rewardTime":"1680","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"1680","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2g);

$anonyv2g= curl_exec($ch);
 curl_close($ch);


$optv2g=json_decode($anonyv2g, true)["code"];

if ($optv2g == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



////v2f
$datav2f='{"rewardTime":"2800","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"2800","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2f);

$anonyv2f= curl_exec($ch);
 curl_close($ch);


$optv2f=json_decode($anonyv2f, true)["code"];

if ($optv2f == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);




////v2h
$datav2h='{"rewardTime":"3920","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"3920","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2h);

$anonyv2h= curl_exec($ch);
 curl_close($ch);


$optv2h=json_decode($anonyv2h, true)["code"];

if ($optv2h == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



////v2i
$datav2i='{"rewardTime":"5040","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"5040","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2i);

$anonyv2i= curl_exec($ch);
 curl_close($ch);


$optv2i=json_decode($anonyv2i, true)["code"];

if ($optv2i == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



////v2l
$datav2l='{"rewardTime":"6160","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"6160","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2l);

$anonyv2l= curl_exec($ch);
 curl_close($ch);


$optv2l=json_decode($anonyv2l, true)["code"];

if ($optv2l == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);


////v2m
$datav2m='{"rewardTime":"7280","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"7280","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2m);

$anonyv2m= curl_exec($ch);
 curl_close($ch);


$optv2m=json_decode($anonyv2m, true)["code"];

if ($optv2m == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);



////v2n
$datav2n='{"rewardTime":"8400","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"8400","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2n);

$anonyv2n= curl_exec($ch);
 curl_close($ch);


$optv2n=json_decode($anonyv2n, true)["code"];

if ($optv2n == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}

sleep(5);




////v2o
$datav2o='{"rewardTime":"9520","articleTime":"0","rewardType":"copper_treasure_chest","activeDay":"1","videoTime":"9520","specific":"false","userid":"'.$user.'","version":"11","day":"'.$date.'","token":"'.$token.'"}';
$urlv2a="https://api.cc.lerjin.com/funny/obtainReward";
$ch = curl_init();
 curl_setopt ($ch, CURLOPT_URL, $urlv2a);
 curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, true);
 curl_setopt ($ch, CURLOPT_PORT, 443);
 curl_setopt ($ch, CURLOPT_ENCODING, "");
 curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headersv2);
curl_setopt ($ch, CURLOPT_TIMEOUT, 3000);
 curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_POSTFIELDS,$datav2o);

$anonyv2o= curl_exec($ch);
 curl_close($ch);


$optv2o=json_decode($anonyv2o, true)["code"];

if ($optv2o == "1"){
    echo "{$yellow2}successful !!"."\n";
}else{
    echo "{$red2}try again later!\n";
}


@system('clear');

?>