<?php
// ============================================================
// index.php — Entry point
// Checks session and routes to correct dashboard by role
// ============================================================

require_once __DIR__ . '/config/session.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: /tailorshop/auth/login.php');
    exit;
}

if ($_SESSION['user_role'] === 'admin') {
    header('Location: /tailorshop/modules/dashboard/admin.php');
} else {
    header('Location: /tailorshop/modules/dashboard/employee.php');
}
exit;