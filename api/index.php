<?php

// Jalankan migrasi database otomatis saat web diakses di Vercel
if (!file_exists('/tmp/database.sqlite')) {
    touch('/tmp/database.sqlite');
    \Artisan::call('migrate:fresh', ['--force' => true]);
}

// Meneruskan request ke file public utama Laravel
require __DIR__ . '/../public/index.php';
