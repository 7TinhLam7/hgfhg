<?php 
session_start();
include './controller/c_tintuc.php';
$c_tintuc = new C_tintuc();
$tin = $c_tintuc->chitietTin();
$chitietTin = $tin['chitietTin'];
$comment = $tin['comment'];
$relatednews = $tin['relatednews'];
$tinnoibat = $tin['tinnoibat'];
//print_r($comment);
if(isset($_POST['binhluan'])){
    if(isset($_SESSION['id_user'])){
        $id_user = $_SESSION['id_user'];
        $id_tin = $_POST['id_tin'];
        $noidung = $_POST['noidung'];
        $comment = $c_tintuc->themBinhLuan($id_user, $id_tin, $noidung);
    }
    else{
        $_SESSION['chua_dang_nhap'] = "Vui lòng đăng nhập để thêm bình luận";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <base href="http://localhost/footballnews/"> 
    <link rel="stylesheet" href="./public/css/all.css" />
    <link rel="stylesheet" href="./public/css/header.css" />
    <link rel="stylesheet" href="./public/css/main.css" />
    <link rel="stylesheet" href="./public/css/footer.css" />
    <link rel="stylesheet" href="./public/css/chitiet.css" />
    
</head>
<body>
    <?php include './public/header.php';?>
    <main>
        <!-- Page Content -->
        <div class="container" >
            <div class="row chitiet">

                <!-- Blog Post Content Column -->
                <div class="col-8 mchitiet" id="datasearch">
                    <!-- Blog Post -->

                    <!-- Title -->
                    <h1><?=$chitietTin->TieuDe?></h1>
                    <!-- Author -->
                    <p class="lead">
                        by <a href="#">Admin</a>
                    </p>

                    <!-- Preview Image -->
                    <img class="img-responsive" src="./public/image/tintuc/<?=$chitietTin->Hinh?>" alt="">

                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time">Post on </span> <?=$chitietTin->created_at?></p>
                    <hr>
                    <!-- Post Content -->
                    <p class="lead"><?=$chitietTin->TomTat?></p>
                    <p><?=$chitietTin->NoiDung?></p>
                    <hr>
                    <!-- Blog Comments -->
                    <?php
                    if(isset($_SESSION['chua_dang_nhap'])){
                        echo "<div class='title'>$_SESSION[chua_dang_nhap]</div>";
                    }
                    ?>
                    <!-- Comments Form -->
                    <div class="well">
                        <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                        <form role="form" method="post" action="#">
                        <input type="hidden" name="id_tin" value="<?=$chitietTin->id ?>">
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="noidung"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="binhluan" >Gửi</button>
                        </form>
                    </div>

                    <hr>

                    <!-- Posted Comments -->

                    <!-- Comment -->
                    
                    
                    <?php 
                    foreach ($comment as $cmt){
                       ?>
                       <div class="col-12 media">
                        <div class="col-2">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                        </div>
                        <div class="col-10 media-body">
                            <h4 class="media-heading">
                                <small><?=$cmt->created_at ?></small>
                            </h4>
                            <?=$cmt->NoiDung ?>
                        </div>
                    </div>
                    <?php                
                }
                ?>
                

                <!-- Comment -->
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-3 panelright">

                <div class="panel-default">
                    <div class="panel-heading"><b>Tin liên quan</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        <?php 
                        foreach ($relatednews as $rln){
                            ?>
                            <div class="row">
                                <div class="col-5">
                                    <a href="./chitiet.php?loai_tin=<?=$rln->TenKhongDau?>&alias=<?=$rln->TieuDe?>&id_tin=<?=$rln->id?>">
                                        <img class="img-responsive" src="./public/image/tintuc/<?=$rln->Hinh?>" alt="">
                                    </a>
                                </div>
                                <div class="col-7">
                                    <a href="./chitiet.php?loai_tin=<?=$rln->TenKhongDau?>&alias=<?=$rln->TieuDe?>&id_tin=<?=$rln->id?>"><b><?=$rln->TieuDe?></b></a>
                                </div>
                                
                                <div class="break"></div>
                            </div> 
                            <?php
                        }
                        
                        ?>
                        
                        <!-- end item -->
                        
                    </div>
                </div>

                <div class="panel-default">
                    <div class="panel-heading"><b>Tin nổi bật</b></div>
                    <div class="panel-body">
                        <?php 
                        foreach ($tinnoibat as $tnb){
                           ?>
                           <!-- item -->
                           <div class="row" >
                            <div class="col-5">
                                <a href="./chitiet.php?loai_tin=<?=$tnb->TenKhongDau?>&alias=<?=$tnb->TieuDe?>&id_tin=<?=$tnb->id?>">
                                    <img class="img-responsive" src="./public/image/tintuc/<?=$tnb->Hinh?>" alt="">
                                </a>
                            </div>
                            <div class="col-7">
                                <a href="./chitiet.php?loai_tin=<?=$tnb->TenKhongDau?>&alias=<?=$tnb->TieuDe?>&id_tin=<?=$tnb->id?>"><b><?=$tnb->TieuDe?></b></a>
                            </div>
                            <div class="break"></div>
                            
                        </div>
                        <!-- end item -->

                        <?php

                    }
                    ?>
                    

                    
                </div>
            </div>
            
        </div>

    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->
</main>
<?php include './public/footer.php';?>
<script src="./public/js/ajax_search.js"></script>
</body>
</html>