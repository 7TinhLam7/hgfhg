<?php
include('controller/c_tintuc.php');

$c_tintuc = new C_Tintuc();
if (isset($_POST['tukhoa'])){
    $key = $_POST['tukhoa'];
    $tintuc = $c_tintuc->timkiem($key);
    $thanh_phantrang = $tintucs['thanh_phantrang'];
    //print_r($tintuc);
?>
<div> Tìm thấy <?=count($tintuc)?> nội dung cho <strong><?=$key ?></strong></div>
<div class="panel panel-default">
        <?php
        foreach ($tintuc as $tin){
            ?>
            <div class="row-item row">
                <div class="col-md-3">

                    <a href="./chitiet.php?loai_tin=<?=$tin->ten_khong_dau?>&id_tin=<?=$tin->id?>">
                       
                        <img class="img-responsive" src="./public/image/tintuc/<?=$tin->Hinh?>" alt="">
                    </a>
                </div>

                <div class="col-md-9">
                    <h3><?= $tin->TieuDe ?></h3>
                    <p><?= $tin->TomTat ?></p>
                    <a class="btn btn-primary" href="./chitiet.php?loai_tin=<?=$tin->ten_khong_dau?>&id_tin=<?=$tin->id?>">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
                <div class="break"></div>
            </div>
            <?php
        }
        
        ?>

        <!-- Pagination -->
        <div class="row pagination">
            
            <?=$thanh_phantrang?> 
            
        </div>
        <!-- /.row -->

    </div>

<?php

    
}
?>