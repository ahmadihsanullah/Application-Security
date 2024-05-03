<?php

// 1. Baca keypair didalam file
if (!$cert_store = file_get_contents("../../key-pair/open-ssl/keypair.p12")) {
    echo "Error: Unable to read the cert file\n";
    exit;
}

// 2. Tampilkan private key dan public key
if (openssl_pkcs12_read($cert_store, $cert_info, "")) {
    echo "Certificate Information\n";

    // 2.a Tampilkan private key
    echo("Private Key" . PHP_EOL);
    echo($cert_info['pkey'] . PHP_EOL);
    // 2.b Tampilkan certificate
    echo("Certificate" . PHP_EOL);
    echo($cert_info['cert']);
} else {
    echo "Error: Unable to read the cert store.\n";
    exit;
}
