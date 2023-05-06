# Laravel Api Wilayah Indonesia

Api laravel siap digunakan untuk menampilkan list wilayah indonesia

## File yg ditambahkan

Migration + Seeder + Apicontroller

## Installation

buka terminal, masuk ke directory project ini, kemudian ketik perintah

`composer install`

`cp .env.example .env`

edit dan input data mysql sesuai dengan konfigurasi mysql anda. buka kembali terminal, ketik perintah

`php artisan migrate:fresh --seed`

## Running

buka terminal, kemudian ketik perintah

`php artisan serve`

## Requirement

framework laravel 10 requirement

## Documentation API

#### 1. Mengambil daftar provinsi

```
GET http://localhost:8000/api/province
```

#### 2. Mengambil daftar Kabupaten / Kota pada provinsi tertentu

```
GET http://localhost:8000/api/regencies?province_id=31
```

Parameter yg dibutuhkan province_id didapat dari `id` province

#### 3. Mengambil daftar kecamatan pada kabupaten / kota tertentu

```
GET http://localhost:8000/api/districts?regencies_id=3171
```

Parameter yg dibutuhkan regencies_id didapat dari `id` regencies

#### 4. Mengambil daftar kelurahan pada kecamatan tertentu

```
GET http://localhost:8000/api/villages?districts_id=3171070
```

Parameter yg dibutuhkan districts_id didapat dari `id` districts

## Thank To

Resource Data: [Emsifa](https://github.com/emsifa/api-wilayah-indonesia)

Laravel 10: [Laravel](https://laravel.com)
