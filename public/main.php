<main>
  <div class="row">
    <div class="col-3 col-s-3 menu">
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
              <a href="./loaitin.php?alias=<?=$tenkhongdau?>&id_loai=<?=$id?>"><?=$ten?></a>
            </li>
            <?php
          }
          ?>
        </ul>
        <?php
      }
      ?>
      
    </div>
    <!-- end list  -->
    <div class="col-6 col-s-9 main" >
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php
          for($i=0;$i<count($slide);$i++){
            if($i==0){
              ?>
              <div class="item active">
                <img src="./public/image/slide/<?=$slide[$i]->Hinh?>" alt="Hình của Slide">
                <div class="text-on-image"><?=$slide[$i]->Ten ?></div>
            
              </div>
              <?php
            }
            else{
              ?>         
              <div class="item">
                <img src="./public/image/slide/<?=$slide[$i]->Hinh?>" alt="Hình của Slide">
                <div class="text-on-image"><?=$slide[$i]->Ten ?></div>
              </div>
              <?php
            }
          }
          ?>
          
          
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon-chevron-right"></span>
        </a>
      </div>

      <!-- end slide -->
      <div class="panel-body" id="datasearch">
        <!-- item -->
        <?php
        foreach($menu as $mn){
         ?>
         <div class="item">
          
         <img class="img-responsive" src="./public/image/tintuc/<?=$mn->HinhTin?>" style="width:100%" alt="Hình ảnh mô tả thông tin">
        
         <h3 class="text-on-image">
            <a href="#"><?=$mn->Ten ?></a> |
            <?php
            $loaitin = explode(',',$mn->LoaiTin);
            foreach($loaitin as $loai){list($id, $ten, $tenkhongdau) = explode(':',$loai);
             ?>
            <small><a href="./loaitin.php?alias=<?=$tenkhongdau?>&id_loai=<?=$id?>"><?=$ten?></a></small>|
              <?php
            }
            ?>					
          </h3>
           
          <div class="border-right">
           
          
             <h3 class="text-on-image"> <a class="btn btn-primary" href="./chitiet.php?loai_tin=<=$tenkhongdau?>&alias=<=$mn->TieuDeKhongDauTin?>&id_tin=<=$mn->idTin?>"><?= $mn->TieuDeTin ?></a></h3>
            <!-- <p><= $mn->TomTatTin ?></p> -->
            <!-- <a class="btn btn-primary" href="./chitiet.php?loai_tin=<=$tenkhongdau?>&alias=<=$mn->TieuDeKhongDauTin?>&id_tin=<=$mn->idTin?>">View Project <span class="glyphicon glyphicon-chevron-right"></span></a> -->
           

         </div>
         </div>
       
       <?php
     }
     ?>
     
   </div>
 </div>


 <!--end panel-body -->
 
 
 <!-- end slide   -->
 <div class="col-3 col-s-12">
  <div class="aside" style="overflow-x:auto;">
  <h3> Top Cầu Thủ Brazil ghi bàn tại Châu Âu</h3>
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Points</th>
    </tr>
    <tr>
      <td>Jill</td>
      <td>Smith</td>
      <td>50</td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
    </tr>
    <tr>
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
    </tr>
  </table>
  </div>
</div>
<!-- end aside   -->

</main>
