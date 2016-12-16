<ul class="sidebar-menu">
  <li class="header">Menu Utama</li>
  <li id="wisata" class="treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Tempat Wisata</span> <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu" id="menuWisata">
      <li id="tambahWisata"><a href="{{ url('wisata/tambah') }}"><i class="fa fa-circle-o"></i> Tambah Tempat Wisata</a></li>
      <li id="lihatWisata"><a href="{{ url('wisata/lihat') }}"><i class="fa fa-circle-o"></i> Lihat Tempat Wisata</a></li>
    </ul>
  </li>
  <li id="desa" class="treeview">
    <a href="#">
      <i class="fa fa-home"></i>
      <span>Desa</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu" id="menuDesa">
      <li id="tambahDesa"><a href="{{ route('tambahDesa') }}"><i class="fa fa-circle-o"></i> Tambah Desa</a></li>
      <li id="lihatDesa"><a href="{{ route('lihatDesa') }}"><i class="fa fa-circle-o"></i> Lihat Data Desa</a></li>
    </ul>
  </li>
  <li id="penginapan" class="treeview">
    <a href="#">
      <i class="fa fa-hotel"></i>
      <span>Tempat Penginapan</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu" id="menuPenginapan">
      <li id="tambahPenginapan"><a href="{{ route('tambahPenginapan') }}"><i class="fa fa-circle-o"></i> Tambah Penginapan</a></li>
      <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Lihat Data Penginapan</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-files-o"></i>
      <span>Pengelolaan User</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#"><i class="fa fa-circle-o"></i> Tambah User</a></li>
      <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Lihat User</a></li>
    </ul>
  </li>
</ul>