<?php
    include("connect.php");
    $id=$_POST["dosen_id"];
    $dosen=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * from dosen where dosen_id=$id"));
    
?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Description Teacher</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Nama : <?=$dosen["dosen_nama"]?><br>
            Mata Kuliah : <br><?=$dosen["dosen_makul"]?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
