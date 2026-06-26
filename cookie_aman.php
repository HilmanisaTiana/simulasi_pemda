<?php
// Mengatur SameSite menjadi Strict
ini_set('session.cookie_samesite', 'Strict');

session_start();

// Memaksa PHP membuang sesi lama dan mencetak cookie baru
session_regenerate_id(true); 

$_SESSION['user'] = 'admin_pemda';
echo "<h3>Simulasi TK-5: Sesi Aktif (Aman)</h3>";
?>