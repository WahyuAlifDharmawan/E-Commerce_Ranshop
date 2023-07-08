  <!-- navbar -->
  <nav class="navbar navbar-default" style="background-color: #D9D9D9;>
    <div class="container">
      <ul class="nav navbar-nav" style="margin: 1 auto; display: table;"">
        <li><a href="index.php">Home</a></li>
        <li><a href="keranjang.php">Keranjang</a></li>
        <!-- Jika sudah login (ada login pelanggan) -->
        <li><a href="checkout.php">Checkout</a></li>
        <?php if(isset($_SESSION["pelanggan"])): ?>
          <li><a href="riwayat.php">Riwayat Belanja</a></li>
          <li><a href="logout.php">Logout</a></li>
        <!-- Selain itu (belum login / belum ada session pelanggan) -->
        <?php else: ?>
          <li><a href="login.php">Login</a></li>
        <?php endif; ?>

        
      </ul>

      <form action="pencarian.php" method="get" class="navbar-form navbar-right">
        <input type="text" class="form-control" name="keyword">
        <button class="btn btn-primary">Cari</button>
      </form>
    </div>
  </nav>