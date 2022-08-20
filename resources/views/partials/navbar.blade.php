<nav class="navbar navbar-expand-lg navbar-light bg-secondary text-white">
    <div class="container-fluid ">
      <a class="navbar-brand text-white {{$title == 'Home' ? 'active' : ''}}" href="{{route('/')}}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white {{$title == 'Barang' ? 'active' : ''}}" aria-current="page" href="{{route('/barang')}}">Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white {{$title == 'Kategori Barang' ? 'active' : ''}}" href="{{route('/kategori-barang')}}">Kategori Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white {{$title == 'Kategori Barang' ? 'active' : ''}}" href="{{route('/transaksi')}}">Transaksi</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>

              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>
