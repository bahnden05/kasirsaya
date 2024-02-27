<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Transaksi</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Penjualan</li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0">Penjualan</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control" placeholder="Type here...">
          </div>
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="<?= base_url('logout') ?>" class="nav-link text-white font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Logout</span>
            </a>
          </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
            </a>
          </li>
          <li class="nav-item px-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0">
              <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
            </a>
          </li>
          <!--<li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../public/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../public/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>-->
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <div class="container-fluid py-4">
    <div class="row mt-4">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4>Penjualan</h6>
          </div>
          <br>
          <div class="card-body px-0 pt-0">
            <div class="p-0 ms-3">
              <div class="col-sm-4 shadow-sm border-radius-lg">
                <div class="card">
                  <div class="card-header bg-warning text-center">
                    <h5 class="text-white mb-0"><i class="ni ni-single-02" aria-hidden="true"></i> Pelanggan</h5>
                  </div>
                  <div class="card-body p-3">
                    <select class="form-control" type="select">
                      <option value="">Pilih Pelanggan</option>
                      <?php foreach ($tb_pelanggan as $plg) : ?>
                        <option value="<?= $plg['PelangganID']; ?>"><?= $plg['nama_pelanggan']; ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 shadow-sm border-radius-lg mt-4">
                <div class="card">
                  <div class="card-header bg-warning text-center">
                    <h5 class="text-white mb-0"><i class="ni ni-box-2" aria-hidden="true"></i> Produk</h5>
                  </div>
                  <div class="card-body p-3">
                    <select class="form-control" type="select">
                      <option value="">Pilih Produk</option>
                      <?php foreach ($tb_produk as $pro) : ?>
                        <option value="<?= $pro['ProdukID']; ?>"><?= $pro['nama_produk']; ?> (<?= $pro['stock']; ?>) -<?= $pro['harga_jual']; ?> </option>
                      <?php endforeach; ?>
                    </select>
                    <!-- <button class="btn btn-success mt-2">keranjang</button> -->
                  </div>
                </div>
              </div>
              <div class="col-sm-4 shadow-sm border-radius-lg mt-4">
                <div class="card">
                  <div class="card-header bg-warning text-center">
                    <h5 class="text-white mb-0"><i class="ni ni-box-2" aria-hidden="true"></i> jumlah produk</h5>
                  </div>
                  <div class="card-body p-3">
                    <input type="text" class="form-control" placeholder="masukan jumlah barang" name="nama" autocomplete="off">
                  </div>
                </div>
              </div>
              <button class="btn btn-primary mt-4">keranjang</button>
              <div class="container-fluid py-4">
                <div class="row">
                  <div class="col-12">
                    <div class="card mb-4">
                      <div class="card-header pb-0">
                        <h6><i class="ni ni-single-02 text-dark align-items-center" aria-hidden="true"></i>&nbsp;Tabel Penjualan</h6>
                        <!--<div class='col-8  text-sm alert alert-warning'>
              <span class='glyphicon glyphicon-info-sign'></span> Ada <span class=" text-danger">2</span> barang yang Stok tersisa sudah kurang dari 3 items. Silahkan pesan lagi !!
              <span class='pull-right'><a class="text-white" href='index.php?page=barang&stok=yes'>Cek Barang <i class='fa fa-angle-double-right'></i></a></span>
          </div>-->
                        <div class="card-body px-0 pt-0">
                          <div class="table-responsive p-0">
                            <table class="table table-bordered table-striped table-sm align-items-center mb-0 mt-2">
                              <thead>
                                <tr>
                                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="5px">No.</th>
                                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">Nama Pelanggan</th>
                                  <th class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7 ps-2">Alamat</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Telepon</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" width="55px">Aksi</th>

                                </tr>
                              </thead>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>