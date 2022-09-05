<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Petunjuk Awal

- git pull
- php artisan:key generate
- php artisan migrate --seed

## Petunjuk Pembeli Tiket

- /tiket = untuk melakukan pemesanan tiket
- akan diredirect ke /tikettemp untuk menyimpan tiket tersebut

## Petunjuk Admin Agen X

- /login = dengan admin@gmail.com, 12345678
- /home = melihat data laman pesanan,  admin bisa edit dan delete pesanan
- /checkin = admin memasukkan id pesanan, lalu akan dilakukan pengecekkan
  -jika tiket belum dipakai akan redirect ke /tiketvalid dan status tiket akan berubah menjadi sudah terpakai agai tidak bisa digunakan untuk 2x pemakaian tiket
  -jika tiket sudah pernah dipakai akan muncul alert tiket sudah terpakai
  -jika id tiket tidak terdaftar akan muncul error id tiket tidak terdaftar
- /laporanuser = berisi table dengan data user yang sudah checkin dan belum checkin
- logout pada navbar untuk logout
