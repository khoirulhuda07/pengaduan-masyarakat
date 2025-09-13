@extends('template.appuser')
@section('title', 'dashboard')
@section('content')
<style>
  .card-dashboard-two {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card-dashboard-two:hover {
    transform: scale(1.03);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  }

  .card-header i {
    color: #6366f1;
  }

  .dashboard-title {
    font-size: 25px;
    font-weight: bold;
  }

  .tentang-aplikasi {
    background-color: #f8f9fa;
    padding: 30px;
    border-radius: 10px;
    margin-top: 40px;
  }

  .tentang-aplikasi h5 {
    font-weight: bold;
    color: #343a40;
  }

  .tentang-aplikasi p, .tentang-aplikasi li {
    font-size: 15px;
    color: #495057;
  }
</style>

<div class="az-content az-content-dashboard">
  <div class="container">
    <div class="az-content-body">
      <div class="az-dashboard-one-title text-center">
        <div class="d-flex flex-column align-items-center" style="width: 100%;">
          <h1 class="az-dashboard-title" style="font-size: 40px;">Selamat Datang Kembali !</h1>
          <p class="az-dashboard-text" style="font-size: 15px;">Di aplikasi Pengaduan Masyarakat Lamongan</p>
        </div>
      </div>

      <div class="row row-sm mg-b-20">
        <div class="col-lg-12 mg-t-20 mg-lg-t-0">
          <div class="row row-sm">

            <!-- Card 1 -->
            <div class="col-sm-4">
              <div class="card card-dashboard-two border-0 shadow-sm" style="background-color: #e3f2fd;">
                <div class="card-header d-flex align-items-center ">
                  <i class="typcn typcn-document-text" style="font-size: 24px; margin-right: 10px;"></i>
                  <p class="mb-0" style="font-size: 20px; font-weight: bold; color: #0d6efd;">Total Pengaduan Anda: {{$total}}</p>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="col-sm-4 mg-t-20 mg-sm-t-0">
              <div class="card card-dashboard-two border-0 shadow-sm" style="background-color: #f8d7da;">
                <div class="card-header d-flex align-items-center ">
                  <i class="typcn typcn-delete" style="font-size: 20px; margin-right: 10px; color: #dc3545;"></i>
                  <p class="mb-0" style="font-size: 20px; font-weight: bold; color: #dc3545;">Total Pengaduan Ditolak: {{$ditolak}}</p>
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="col-sm-4 mg-t-20 mg-sm-t-0">
              <div class="card card-dashboard-two border-0 shadow-sm" style="background-color: #d1e7dd;">
                <div class="card-header d-flex align-items-center">
                  <i class="typcn typcn-tick" style="font-size: 20px; margin-right: 10px; color: #198754;"></i>
                  <p class="mb-0" style="font-size: 20px; font-weight: bold; color: #198754;">Total Pengaduan Disetujui: {{$disetujui}}</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Tentang Aplikasi -->
      <div class="tentang-aplikasi">
        <h5>Tentang Aplikasi</h5>
        <p>
          <strong>Aplikasi Pengaduan Masyarakat Lamongan</strong> adalah platform digital yang bertujuan untuk memfasilitasi masyarakat dalam menyampaikan keluhan atau saran secara langsung kepada pemerintah daerah. Aplikasi ini dikembangkan agar komunikasi antara warga dan pemerintah lebih cepat, transparan, dan efisien.
        </p>
        <ul>
          <li>Menyampaikan pengaduan kapan saja dan di mana saja.</li>
          <li>Melihat status pengaduan secara real-time.</li>
          <li>Mendapatkan tanggapan dari pihak berwenang secara langsung.</li>
        </ul>
        <p>
          Dengan adanya aplikasi ini, diharapkan partisipasi masyarakat dalam membangun daerah menjadi lebih aktif dan terorganisir.
        </p>
      </div>

    </div>
  </div>
</div>
@endsection
