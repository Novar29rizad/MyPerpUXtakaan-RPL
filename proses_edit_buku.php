<?php
    include("config.php");
    var_dump($_POST);
    if (isset($_POST['ubah']))
    {
        if (isset($_GET['id_buku']))
        {
            $id_buku = $_GET['id_buku'];
            $penulis = $_POST['penulis'];
            $penerbit = $_POST['penerbit'];
            $tahun_terbit = $_POST['tahun_terbit'];
            $ebook = $_POST['ebook'];
            $summary = $_POST['summary'];

            $edit = "UPDATE buku SET penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', ebook = '$ebook', summary = '$summary' WHERE id_buku = '$id_buku'";

            $query = pg_query($db,$edit);

            if ($query == TRUE)
                header('location:buku.php?aksi=sukses&edit=pengeditan');
            else header('location:buku.php?aksi=gagal&edit=pengeditan');
        }
    }
?>