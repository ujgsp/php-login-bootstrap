<?php
session_start();

// hapus semua session active
session_destroy();

// redirect
header('location: index.php?msg=out');