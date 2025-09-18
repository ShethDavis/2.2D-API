<?php
require_once 'conf.php';

try {
    $dsn = "mysql:host={$conf['db_host']};dbname={$conf['db_name']}";
    $pdo = new PDO($dsn, $conf['db_user'], $conf['db_pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT username, email FROM users ORDER BY id ASC");

    echo "<!DOCTYPE html><html><head><title>Registered Users</title></head><body>";
    echo "<h2>Registered Users</h2><ol>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>{$row['username']} ({$row['email']})</li>";
    }
    echo "</ol></body></html>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
