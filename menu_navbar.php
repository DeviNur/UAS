    <nav class="mainmenu-area navbar-default navbar-fixed-top" >
        <div class="container">
            <div class="row">
                <div class="navbar-header" >
                 <div class="container-fluid">
           <a class="navbar-brand" href="index.php?hlm=Dashboard" ><img src="logo/2.png" width="100px" height="100px"></img></a>
                    <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
               </div>
                </div> 
                 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php?hlm=Dashboard">Home</a></li>
                        <li class="dropdown">
						  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Atasan
							<span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="produk.php?hlm=Kemeja">Kemeja</a></li>
							<li><a href="produk.php?hlm=Blouse">Blouse</a></li>
							<li><a href="produk.php?hlm=Kaos">Kaos</a></li>
							<li><a href="produk.php?hlm=Cardigan">Cardigan</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bawahan
							<span class="caret"></span></a>
						  <ul class="dropdown-menu">
							<li><a href="produk.php?hlm=Celana">Celana</a></li>
							<li><a href="produk.php?hlm=Rok">Rok</a></li>
						  </ul>
						</li>
						<li><a href="produk.php?hlm=Dress">Dress</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <?php
   if (@$_SESSION['nmpegawai']) {
   ?>
          <li><a href="data_barang.php?hlm=Data"><span class="glyphicon glyphicon-folder-open"></span> &nbsp;Data Barang</a></li>
          <li><a href="Keranjang.php?hlm=Keranjang"><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Keranjang</a></li>
          <li class="dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown" href="#">
         <span class="glyphicon glyphicon-user"></span> <?php echo(@$_SESSION['nmpegawai']) ?>
         <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="keluar.php"><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
          </ul>
          </li>
        <?php
      }else
      {
    ?>
    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
<?php
}
?>
      </ul>
                </div>  
            </div>
        </div>
    </nav> <!-- End mainmenu area -->