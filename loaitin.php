<?php
session_start();
include('./controller/c_tintuc.php');
$c_tintuc = new C_tintuc();
$tintucs = $c_tintuc->loaitin();
$tintuc = $tintucs['danhmuctin'];
$menu = $tintucs['menu'];
$title = $tintucs['title'];
$thanh_phantrang = $tintucs['thanh_phantrang'];
$alias = $tintucs['alias'];


//print_r($alias);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" href="./public/css/all.css" />
    <link rel="stylesheet" href="./public/css/header.css" />
    <link rel="stylesheet" href="./public/css/main.css" />
    <link rel="stylesheet" href="./public/css/loaitin.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />
    
    <script src="./public/css/jquery.js"></script>
    <script src="./public/css/bootstrap.min.js"></script>
    
</head>
<body>
    <?php include './public/header.php';?>
    <main>
        <!-- Page Content -->
        <div class="row">
            <div class="col-3 menu">
             <ul class="list-group" id="menu">
                <li href="#" class="list-group-item menu1 active">
                   Menu
               </li>
               <?php
               foreach($menu as $mn){
                 ?>
                 <li href="#" class="list-group-item menu1">
                   <?=$mn->Ten?>
               </li>
               <ul>
                 <?php
                 $loaitin = explode(',',$mn->LoaiTin);
                 foreach($loaitin as $loai){
                    list($id, $ten, $tenkhongdau) = explode(':',$loai);
                    ?>
                    <li class="list-group-item">
                     <a href="<?=$tenkhongdau?>-<?=$id?>"><?=$ten?></a>
                 </li>
                 <?php
             }
             ?>
         </ul>
         <?php
     }
     ?>
     
 </div>
 <div class="col-9 " id="datasearch">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4><b><?= $title->Ten ?></b></h4>
        </div>
        <?php
        foreach ($tintuc as $tin){
            ?>
            <div class="row-item row">
                <div class="col-md-3">

                    <a href="<?=$alias->TenKhongDau?>-<?=$tin->TieuDeKhongDau?>-<?=$tin->id?>">
                        <br>
                        <img class="img-responsive" src="./public/image/tintuc/<?=$tin->Hinh?>" alt="">
                    </a>
                </div>

                <div class="col-md-9">
                    <h3><?= $tin->TieuDe ?></h3>
                    <p><?= $tin->TomTat ?></p>
                    <a class="btn btn-primary" href="./chitiet.php?loai_tin=<?=$alias->TenKhongDau?>&alias=<?=$tin->TieuDe?>&id_tin=<?=$tin->id?>">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
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
</div>


</div>
<!-- end Page Content -->
</main>
<?php include './public/footer.php';?>
<script src="./public/css/menu.js"></script>
<script src="./public/js/ajax_search.js"></script>
</body>
</html>