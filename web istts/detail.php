<style>
        .table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td {
            border: 1px solid #ddd;
        }
        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
            padding: 8px;
            line-height: 1.42857143;
            vertical-align: top;
            border-top: 1px solid #ddd;
        }
        table {
            border-spacing: 0;
            border-collapse: collapse;
        }
</style>
<?php
    $id=$_GET["jurusan"];
    include("connect.php");
    $jurusan=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from jurusan_bahasa where jurusan_id=$id"));
    echo $jurusan["jurusan_deskripsi"];
?>