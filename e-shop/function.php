<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 11/24/2018
 * Time: 4:53 PM
 */

function callService($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    // In Java: @Consumes(MediaType.APPLICATION_FORM_URLENCODED)
    //$data = array('username'=>$_GET['username'],'studentID'=>$_GET['studentID'],'fee'=>$_GET['fee']);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $output = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    return $output;
}

function callService2($url,$data){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    // In Java: @Consumes(MediaType.APPLICATION_FORM_URLENCODED)
    //$data = array('username'=>$_GET['username'],'studentID'=>$_GET['studentID'],'fee'=>$_GET['fee']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $output = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    return $output;
}
function callServiceRequestJson($url,$data){
    $data_string = json_encode($data);

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
    );

    $result = curl_exec($ch);
}

function getBrands(){
    $url =  "http://localhost:8080/iBanking/rest/services/getBrands";
    return callService($url);
}

function getModels(){
    $url =  "http://localhost:8080/iBanking/rest/services/getModels";
    return callService($url);
}

function getModelByID($data){
    $url =  "http://localhost:8080/iBanking/rest/services/getModelByID";
    return callService2($url,$data);
}

function getAllColorOfModel($data){
    $url =  "http://localhost:8080/iBanking/rest/services/getColorsOfModel";
    return callService2($url,$data);
}

function getAllStorageOfModel($data){
    $url =  "http://localhost:8080/iBanking/rest/services/getAllStorageOfModel";
    return callService2($url,$data);
}

function getModelsByBrand($data){
    $url =  "http://localhost:8080/iBanking/rest/services/getModelsByBrand";
    return callService2($url,$data);
}

function login($data){
   // $url =  "http://18.219.218.11:8097/MobileStore_Management_Web/rest/Login/sign-in-secure-v2";
    $url = "http://localhost:8080/iBanking/rest/services/sign-in-secure-v2";
    return callService2($url,$data);
}

function getDetail($data){
    $url =  "http://localhost:8080/iBanking/rest/services/getDetailId";
    return callService2($url,$data);
}

function getDetailInfo($data){
    $url =  "http://localhost:8080/iBanking/rest/services/getInfoDetail";
    return callService2($url,$data);
}

function login_customer($data){
    $url =  "http://localhost:8080/iBanking/rest/services/log-in-customer";
    return callService2($url,$data);
}

function saveInfoOrder($data){
    $url =  "http://localhost:8080/iBanking/rest/services/saveOrder";
    return callServiceRequestJson($url,$data);
}
//http://18.219.218.11:8097
