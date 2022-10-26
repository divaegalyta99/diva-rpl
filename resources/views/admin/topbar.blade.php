[07.05, 26/10/2022] alan: @extends('admin.app')
@section('title','Show Siswa')
@section('content-title','Show Siswa')
@section('content')
<div class="row">
    <div class="col-lg-4">
    <div class="card shadow mb-4">
        <div class="card-body text-center">
            <img src="{{asset('/template/img/'.$data->foto)}}" width="200" class="rounded-circle">
            <h5>{{ $data->nama }}</h5>
            <h6>{{ $data->email }}</h6>
            <h6>{{ $data->alamat }}</h6>
        </div>
    </div>
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i>Kontak Siswa</h6>
            </div>
            <div class="card-body">
                @foreach($kontak as $item)
               {{ $item->jenis->jenis_kontak }} : {{ $item->deskripsi}}
                @endforeach
            </div>
        </div>
</div>
<div class="col-lg-8">
<div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-quote-left"></i>About Siswa</h6>
            </div>
            <div class="card-body">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">{{ $data->about }}</p>
                </blockquote>
            </div>   
</div>
<div class="card-shadow mb-4">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-folder-open"></i>Projek Siswa</h6>
</div>
<div class="card-body">
@if($projek->isEmpty())
<h6 class="text-center">Siswa Belum Memiliki Project</h6>
@else
@foreach($projek as $item) 
<ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold" style="font-weight:bold ;">{{ $item->nama_projek }}</div>
      {{ $item->deskripsi }}
    </div>
    <span class="badge bg-success rounded-pill" style="color:beige">{{ $item->tanggal }}</span>
  </li>
</ol>  

@endforeach
@endif
</div>
</div>
    </div>
</div>
@endsection
[07.05, 26/10/2022] 🦋: Master kontak
[07.05, 26/10/2022] 🦋: Login
[07.05, 26/10/2022] 🦋: Head
[07.05, 26/10/2022] 🦋: Footer
[07.05, 26/10/2022] 🦋: Edit siswa
[07.05, 26/10/2022] alan: <!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>


<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>

    
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
            <img class="img-profile rounded-circle"
                src="{{asset ('template/img/undraw_profile.svg') }}">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- End of Topbar -->