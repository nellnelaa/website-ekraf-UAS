<?php

//koneksi
$conn = mysqli_connect("localhost", "root", "", "website_ekraf");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahbarang($data) {
    global $conn;
    $gambar = htmlspecialchars($data["gambar"]);
    $namabarang = htmlspecialchars($data["namabarang"]);
    $qty = htmlspecialchars($data["qty"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO barang VALUES (
        '', '$gambar', '$namabarang', '$qty', '$harga', '$deskripsi' 
        )";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE id = $id");
    return mysqli_affected_rows($conn);

}

function ubahbarang($data){
    global $conn;

    $id = $data["id"];
    $gambar = htmlspecialchars($data["gambar"]);
    $namabarang = htmlspecialchars($data["namabarang"]);
    $qty = htmlspecialchars($data["qty"]);
    $harga = htmlspecialchars($data["harga"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "UPDATE barang SET
                gambar = '$gambar',
                namabarang = '$namabarang',
                qty = '$qty',
                harga = '$harga',
                deskripsi = '$deskripsi'
                where id = $id
                ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $notelp = $data["notelp"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username udah ada apa belom
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result) ) {
        echo "<script>
        alert('username sudah tidak tersedia')
        </script>";
        return false;
    }

    //cek konfirm password
    if ($password !== $password2) {
        echo "<script>
            alert('password tidak sesuai!');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$email', '$notelp', '$password')");
    return mysqli_affected_rows($conn);

}

?>