# Belajar Autentikasi Laravel dari Nol

Repo ini berisi kode dari seri tutorial **Autentikasi Laravel dari Nol** di [Kyoma Journal](https://journal.kyomacorner.com).

Di seri ini kita bikin sistem autentikasi (daftar, login, logout, lupa password) dari nol tanpa Breeze, biar paham betul apa yang terjadi di balik layar.

## Yang dipakai

- Laravel
- MySQL (via Laragon)
- Blade

## Ikuti serinya

Kode di repo ini dibangun bertahap mengikuti tiap part:

- Part 0: Persiapan project
- Part 1: Fondasi & tabel pengguna
- Part 2: Register
- Part 3: Login & logout
- Part 4: Proteksi halaman
- Part 5: Lupa password

Baca tutorial lengkapnya di [Kyoma Journal](https://journal.kyomacorner.com).

## Menjalankan di komputermu

1. Clone repo ini
2. Jalankan `composer install`
3. Salin `.env.example` jadi `.env`, lalu atur koneksi database
4. Jalankan `php artisan key:generate`
5. Jalankan `php artisan migrate`
6. Jalankan `php artisan serve`

---

Dibuat oleh [The Studio by Kyoma](https://studio.kyomacorner.com)
