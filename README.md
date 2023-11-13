# Lab7Web
Nama : Anggita Risqi Nur Clarita

NIM : 312210450

Kelas : TI.22.A.4

## DAFTAR ISI <br>
| No | Description | Link |
|-----|------|-----|
|1|Modul Praktikum 7|[Click Here](https://drive.google.com/file/d/1rnEyF_g51pcIJtTbEPloNkhwQhBVAX7T/view)|
|2|Praktikum|[Click Here](#praktikum)|
|3|Langkah-langkah Praktikum|[Click Here](#langkah-langkah-praktikum)|
|4|Pertanyaan dan Tugas|[Click Here](#pertanyaan-dan-tugas)|

## Praktikum
> ### Instruksi Praktikum
> 1. Persiapkan text editor misalnya **VSCode**.
>
> 2. Buat folder baru dengan nama **lab7_php_dasar** pada docroot webserver **(htdocs)**.
>
> 3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya.

## Langkah-langkah Praktikum
1. ### Persiapan

    Untuk memulai membuat kode php, perlu disiapkan web server dan interpreter PHP terlebih dahulu. Web server yang kita gunakan adalah **Apache 2** dan **interpreter PHP 7**. Untuk memudahkan proses praktikum, kita gunakan aplikasi bundle web server yaitu **XAMPP**.

2. ### Install XAMPP

    Unduh XAMPP dari https://www.apachefriends.org/download.html dan pilih versi portable untuk memudahkan proses installasi. Kemudian extract file tersebut, sesuaikan directory-nya *(misal: C:\xampp)*.

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/1.png)

3. ### Konfigurasi Web Server
    * **Konfigurasi Apache :** Untuk konfigurasi HTTP server, seperti port yang digunakan akses HTTP, modul yang diaktifkan, lokasi document root, dll. Lokasi file: **\xampp\apache\conf\httpd.conf**

    * **Konfigrasi PHP :** Untuk konfigurasi perilaku engine PHP yang berefek pada keamanan dan performa. Seperti batas maksimal waktu eksekusi script, batas file yang dapat diupload, error reporting, dll. Lokasi file: **\xampp\php\php.ini**

    * **Konfigrasi MySql :** Konfigurasi server MySQL, seperti administrator user, port, timezone, dll. Lokasi file: **\xampp\mysql\bin\my.ini**

4. ### Menjalankan Web Server
    Menjalankan web server dari menu XAMPP Control.

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/2.png)

    * **Dokumen Website :** Semua file website tempatkan di directory: **\xampp\htdocs**

    * **Database MySQL :** File ditempatkan di directory: **\xampp\mysql**

    * **Manajemen Database:** http://localhost/phpmyadmin

5. ### Memulai PHP
    Buat folder **lab7_php_dasar** pada root directory web server **(d:\xampp\htdocs)**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/3.png)

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/4.png)


    Kemudian untuk mengakses directory tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/


    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/5.png)

6. ### PHP Dasar
    Buat file baru dengan nama `php_dasar.php` pada directory tersebut. Kemudian buat kode seperti berikut:

    **Script HTML**
    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
    </head>
    <body>
        <h1>Belajar PHP Dasar</h1>
    </body>
    </html>
    ```

    **Script PHP**
    ```php
    <?php
        echo "Hello World";
    ?>
    ```

    **Output :**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/6.png)

    **Keterangan :** Untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/php_dasar.php

7. ### Variable PHP
    ```php
    <?php
        $nim = "0411500400";
        $nama = 'Abdullah';
        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
    ?>
    ```

    **Output :**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/7.png)

8. ### Predefine Variable $_GET

    **Script HTML**
    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
    </head>
    <body>
    <body>
        <h1>Predefine Variable</h1>
    </body>
    </html>
    ```

    **Script PHP**
    ```php
    <?php
        echo 'Selamat Datang ' . $_GET['nama'];
    ?>
    ```

    **Output :**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/8.png)

    **Keterangan :** Untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/latihan2.php?nama=Anggita

9. ### Membuat Form Input

    **Script HTML**
    ```html
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
    </head>
    <body>
        <h2>Form Input</h2>
        <form method="post">
            <label>Nama: </label>
            <input type="text" name="nama">
            <input type="submit" value="Kirim">
        </form>
    </body>
    </html>
    ```

    **Script PHP**
    ```php
    <?php
        echo 'Selamat Datang ' . $_GET['nama'];
    ?>
    ```

    **Output :**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/9.png)

    **Keterangan :** Untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/latihan2.php

10. ### Operator
    ```php
    <?php
        $gaji = 1000000;
        $pajak = 0.1;
        $thp = $gaji - ($gaji*$pajak);
        echo "Gaji sebelum pajak = Rp. $gaji <br>";
        echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
    ```

    **Output :**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/10.png)

11. ### Kondisi If
    ```php
    <?php
        $nama_hari = date("l");
        if ($nama_hari == "Sunday") {
            echo "Minggu";
        } elseif ($nama_hari == "Monday") {
            echo "Senin";
        } else {
            echo "Selasa";
        }
    ?>
    ```

    **Output :**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/11.png)

12. ### Kondisi Switch
    ```php
    <?php
        $nama_hari = date("l");
        switch ($nama_hari) {
            case "Sunday":
                echo "Minggu";
                break;
            case "Monday":
                echo "Senin";
                break;
            case "Tuesday":
                echo "Selasa";
                break;
            default:
                echo "Sabtu";
        }
    ?>
    ```

    **Output :**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/12.png)

13. ### Perulangan For
    ```php
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        for ($i=1; $i<=10; $i++) {
            echo "Perulangan ke: " . $i . '<br />';
        }

        echo "Perulangan Menurun dari 10 ke 1 <br />";
        for ($i=10; $i>=1; $i--) {
            echo "Perulangan ke: " . $i . '<br />';
        }
    ?>
    ```

    **Output**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/13.png)

14. ### Perulangan While
    ```php
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        while ($i<=10) {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        }
    ?>
    ```

    **Output :**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/14.png)

15. ### Perulangan Do-While
    ```php
    <?php
        echo "Perulangan 1 sampai 10 <br />";
        $i=1;
        do {
            echo "Perulangan ke: " . $i . '<br />';
            $i++;
        } while ($i<=10);
    ?>
    ```

    **Output :**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/15.png)


## Pertanyaan dan Tugas
* Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan **nama, tanggal lahir dan pekerjaan**. Kemudian tampilkan outputnya dengan menghitung umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang berbeda-beda sesuai pilihan pekerjaan!


    **Script :** 
    [form_input.php](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/lab7_php_dasar/form_input.php)

    **Output :**

    ![image](https://github.com/AnggitaRisqiNC/Lab7Web/blob/main/screenshot/16.png)

    **Keterangan :** Untuk mengakses hasilnya melalui URL: http://localhost/lab7_php_dasar/form_input

## Finish