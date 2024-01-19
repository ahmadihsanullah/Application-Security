# Berbagai Perintah OpenSSH dan OpenSSL

1. Generate private key dan public key dengan OpenSSH

    ```.json
    ssh-keygen -f namafile-tujuan
    ```

2. Generate private key dengan OpenSSL

    ```.json
    openssl genrsa -out private.pem
    ```

3. Generate public key dengan OpenSSL

    ```.json
     openssl rsa -in private.pem -pubout > public.pem
    ```
4. Konversi private key OpenSSH menjadi format PEM

    ```.json
    ssh-keygen -p -m PEM -f namafile-privatekey
    ```
5. Sign file halo.txt dengan private key

    ```.json
    openssl dgst -sha1 -sign private.pem -out halo.sign halo.txt
    ```
6. Verifikasi signature dengan public key

    ```.json
    openssl dgst -sha1 -verify public.pem -signature halo.sign halo.txt
    ```

7. Membuat self-signed certificate dengan OpenSSL

    ```.json
    openssl req -key private.pem -new -x509 -days 365 -out public.crt
    ```

8. Melihat isi digital certificate

    ```.json
    openssl x509 -in public.crt -text -nooout
    ```


9. Simpan private key dan certificate dalam file PKCS12

    ```.json
    openssl pkcs12 -inkey private.pem -in public.crt -export -out keypair.p12
    ```

10. Konversi PKCS12 menjadi PEM

    ```.json
    openssl pkcs12 -in keypair.p12 -nodes -out keypair.pem
    ```
    