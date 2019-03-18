<header>
  <nav class="navbar">
      <div class="container">
          <div class="row top">
              <h1 class="col-8 col-s-8 logo"> <a href="./home.php">Brazil Football </a></h1>
              <ul class="col-4 col-s-4 navlogin">
              <?php 
              if(isset($_SESSION['user_name'])){
                  ?>
              <li>
                   <a>
                      <span class ="glyphicon glyphicon-user"></span>
                      <?=$_SESSION['user_name'] ?>
                  </a>
              </li>
              <li>
               <a href="./dangxuat.php">Đăng xuất</a>
           </li>
                  <?php
              }else{
                  ?>
                 <li>
                    <a href="./dangky.php">Đăng ký</a>
                </li>
                <li>
                    <a href="./dangnhap.php">Đăng nhập</a>
                </li>
                  <?php
              }
              ?>      
       </ul>
   </div >
</div>
<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="row bottom">
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        
        <ul class="col-8 col-s-8 navlist">
            <li>
                <a href="./public/gioithieu.php">Giới thiệu</a>
            </li>
            <li><a>|</a></li>
            <li>
                <a href="./public/lienhe.php">Liên hệ</a>
            </li>
        </ul>

        <form class="col-4 col-s-4 navform" role="search">
         <div class="form-group">
           <input type="text" id="txtSearch"  placeholder="Search">
       </div>
       <button type="button" id="btnSearch">Submit</button>
   </form>

   
   <!-- /.navbar-collapse -->
   
</div>
</div>
<!-- /.container -->
</nav>

</header>