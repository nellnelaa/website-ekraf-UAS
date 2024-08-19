<?php
require 'function.php';

$id = $_GET["id"];
if(hapus($id) > 0 ){
    echo "<script>
        alert('Data berhasil dihapus');
        document.location.href = '2.EkonomiKreatif_Barang.php';
    </script>";
} else {
    echo "<script>
        alert('Data gagal dihapus');
        document.location.href = '2.EkonomiKreatif_Barang.php';
    </script>";
}

?>
