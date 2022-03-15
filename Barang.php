<h3> List Stok Barang </h3>

<table border="2">
    <tr>
        <th> Kode Barang </th>
        <th> Jenis </th>
        <th> Merk </th>
        <th> Harga Beli </th>
        <th> Harga Jual </th>
        <th> Stok Awal </th>
    </tr>

    <?php

    include "koneksi1.php";
    $no=1;
    $ambildata = mysqli_query($koneksi1, "select * from barang");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr>
            <td>$tampil[Kode_brg]</td>
            <td>$tampil[Jenis]</td>
            <td>$tampil[Merk]</td>
            <td>$tampil[Hrg_beli]</td>
            <td>$tampil[Hrg_Jual]</td>
            <td>$tampil[Stok_awl]</td>
        </tr>";
        $no++;
}
?>
</table>

