## Panduan Penggunaan
- Jalankan `composer update` (didalam project Web-Perpustakaan-GingerBread)
- Kemudian jalankan `copy .env.example .env`
- Selanjutnya jalankan `php artisan key:generate`
- Buat databas (perpus_gingerbread) di phpmyadmin
- Langkah selanjutnya setting database nya di .env sebagai berikut:
  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=perpus_gingerbread
  DB_USERNAME=root
  DB_PASSWORD=
  ```
- Lanjut jalankan `php artisan migrate`
- Jalankan juga `php artisan db:seed`
- Dan yang terakhir jalankan `php artisan serve`
- Login System dengan mengguanka account
  ```
  LOGIN ADMIN
  username :04burhanuddin
  password :141004
  
  LOGIN USER
  username :userBurhan
  password :141004
  ```
- Done...
