<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://portal.casthost.net//includes/api.php');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt(
    $ch,
    CURLOPT_POSTFIELDS,
    http_build_query(
        array(
            'action' => 'GetProducts',
            // See https://developers.whmcs.com/api/authentication
            'username' => '2aIZCL5Fct2LVH2qCNZFGqHtkmBHyC1L',
            'password' => 'OnUNCLxy0mBRhScxBCUvMI8XXmxLxdvm',
            'pid' => '81',
            'responsetype' => 'json',
        )
    )
);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);
