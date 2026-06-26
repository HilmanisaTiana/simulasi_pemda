<?php
session_start();
$_SESSION['user'] = 'admin_pemda';
echo "<h3>Simulasi TK-3: Sesi Aktif (Rentan CSRF)</h3>";
?>