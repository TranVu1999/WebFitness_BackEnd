<?php
    try {
        $conn = new PDO("sqlsrv:Server=DESKTOP-UOALLFK\SQLEXPRESS;Database=Fitness");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $ex) {
    }
?>