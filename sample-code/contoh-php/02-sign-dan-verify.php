<?php

include('01-baca-keypair.php');

echo "\n=================\n";

// 1. Melakukan sign message dengan private key

$message = 'hello php';
openssl_sign($message, $signature, $cert_info['pkey'], OPENSSL_ALGO_SHA256);

// 2. Tampilkan hasil signature
echo("Signature : \n");
echo($signature);

// 3. verifikasi signature dengan public key
$sukses = openssl_verify($message, $signature, $cert_info['cert'], "sha256WithRSAEncryption");
if ($sukses) {
    echo "\nveritifikasi berhasil, signature dan public key match";
} elseif ($ok == 0) {
    echo "\nveritifikasi gagal, signature dan public tidak key match";
} 