<?php 
    if (isset($_GET['id'])) {
        $id=$_GET['id'];

        $sql = "DELETE FROM tblkuser WHERE idkuser = $id";

        $db->runSQL($sql);

        header("location:?f=kuser&m=select");
    }
?>