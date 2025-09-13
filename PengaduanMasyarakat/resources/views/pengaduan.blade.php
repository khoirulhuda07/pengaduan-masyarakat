@extends('template.appuser')
@section('title', 'Pengaduan')
@section('content')
<style>
 
    /* From Uiverse.io by Spacious74 */ 
.container1 {
  border: solid 1px #8d8d8d;
  padding: 20px;
  border-radius: 20px;
  background-color: #fff;
}

.container1 .heading {
  font-size: 1.3rem;
  text-align: center;
  margin-bottom: 20px;
  font-weight: bolder;
}

.form {
  max-width: 500px;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form .btn-container {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 20px;
}

.form .btn {
  padding: 10px 20px;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 3px;
  border-radius: 10px;
  border: solid 1px #1034aa;
  border-bottom: solid 1px #90c2ff;
  background: linear-gradient(135deg, #0034de, #006eff);
  color: #fff;
  font-weight: bolder;
  transition: all 0.2s ease;
  box-shadow: 0px 2px 3px #000d3848, inset 0px 4px 5px #0070f0,
    inset 0px -4px 5px #002cbb;
}

.form .btn:active {
  box-shadow: inset 0px 4px 5px #0070f0, inset 0px -4px 5px #002cbb;
  transform: scale(0.995);
}

.input-field {
  position: relative;
}

.input-field label {
  position: absolute;
  color: #8d8d8d;
  pointer-events: none;
  background-color: transparent;
  left: 15px;
  transform: translateY(0.6rem);
  transition: all 0.3s ease;
}

.input-field input {
  padding: 10px 15px;
  font-size: 1rem;
  border-radius: 8px;
  border: solid 1px #8d8d8d;
  letter-spacing: 1px;
  width: 100%;
}

.input-field input:focus,
.input-field input:valid {
  outline: none;
  border: solid 1px #0034de;
}

.input-field input:focus ~ label,
.input-field input:valid ~ label {
  transform: translateY(-51%) translateX(-10px) scale(0.8);
  background-color: #fff;
  padding: 0px 5px;
  color: #0034de;
  font-weight: bold;
  letter-spacing: 1px;
  border: none;
  border-radius: 100px;
}

.form .passicon {
  cursor: pointer;
  font-size: 1.3rem;
  position: absolute;
  top: 6px;
  right: 8px;
}

.form .close {
  display: none;
}
.input-field select {
    font-size: 1rem;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid #757575;
    background: transparent;
}

.input-field select:focus {
    outline: none;
    border-bottom: 2px solid #2196F3;
}
/* From Uiverse.io by Yaya12085 */ 
.radio-input {
  display: flex;
  flex-direction: row;
  justify-content: center;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 16px;
  font-weight: 600;
  color: white;
}

.radio-input input[type="radio"] {
  display: none;
}

.radio-input label {
  display: flex;
  align-items: center;
  padding: 10px;
  border: 1px solid #ccc;
  background-color: #212121;
  border-radius: 5px;
  margin-right: 12px;
  cursor: pointer;
  position: relative;
  transition: all 0.3s ease-in-out;
}

.radio-input label:before {
  content: "";
  display: block;
  position: absolute;
  top: 50%;
  left: 0;
  transform: translate(-50%, -50%);
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #fff;
  border: 2px solid #ccc;
  transition: all 0.3s ease-in-out;
}

.radio-input input[type="radio"]:checked + label:before {
  background-color: green;
  top: 0;
}

.radio-input input[type="radio"]:checked + label {
  background-color: royalblue;
  color: #fff;
  border-color: rgb(129, 235, 129);
  animation: radio-translate 0.5s ease-in-out;
}
#realInput {
      display: none;
    }

    .file-container {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .browse-btn {
      padding: 6px 12px;
      background-color: #eee;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .file-name {
      font-style: italic;
      color: #444;
    }
@keyframes radio-translate {
  0% {
    transform: translateX(0);
  }

  50% {
    transform: translateY(-10px);
  }

  100% {
    transform: translateX(0);
  }
}

</style>
<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    
      <div class="row py-3 px-3 align-items-center">
        <div class="col-12 col-md-4 mx-auto ">
        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
  <div class="card-body">
    <h4 class="card-title text-primary">Apa Itu Form Pengaduan?</h4>
    <p class="card-text">
      Form ini digunakan oleh masyarakat untuk melaporkan keluhan atau masalah yang terjadi di sekitar, khususnya terkait Lingungan, pelayanan publik dan lainnya.
    </p>

    <hr>

    <h5 class="card-subtitle mb-2 text-dark">Butuh Bantuan?</h5>
    <p class="card-text mb-1">📞 0812-3456-7890</p>
    <p class="card-text">✉️ pengaduan@desa.id</p>

    <hr>

    <p class="card-text text-muted">
      🔒 Semua pengaduan akan diproses secara rahasia dan hanya digunakan untuk peningkatan pelayanan masyarakat.
    </p>
  </div>
</div>

        </div>
        <div class="col-12 col-md-4 mx-auto ">

        
      <div class="container1">
  <div class="heading">Form Pengaduan</div>
  <form class="form" action="{{url('/pengaduan/tambah')}}" method="POST" enctype="multipart/form-data">
  @csrf
    
  <div class="input-field">
        <input required autocomplete="off" type="text" name="nama" id="nama" />
        <label for="nama">Nama Lengkap</label>
    </div>
  <!-- From Uiverse.io by Yaya12085 -->
   <h6 class="mb-n3 mt-n1 text-center">Pilih Jenis Pengaduan</h6> 
   
<div class="radio-input">
  <input value="Lingkungan" name="jenis" id="value-1" type="radio">
  <label for="value-1">Lingkungan</label>
  <input value="Pelayanan Publik" name="jenis" id="value-2" type="radio">
  <label for="value-2">Pelayanan Publik</label>
  <input value="Lainnya" name="jenis" id="value-3" type="radio">
  <label for="value-3">Lainnya</label>
</div>
<div class="input-field">
        <input required autocomplete="off" type="text" name="lokasi" id="lokasi" />
        <label for="lokasi">Detail Lokasi Kejadian</label>
    </div>
    <div class="input-field">
        <input required autocomplete="off" type="textarea" name="pengaduan" id="uraian" />
        <label for="uraian">Uraian Singkat Kejadian</label>
    </div>
    <div class="file-container">
    <button class="browse-btn" type="button"  onclick="document.getElementById('realInput').click()">Pilih File</button>
    <span class="file-name" id="fileName">masukkan dokument pendukung jika ada</span>
  </div>

  <input type="file" accept=".jpg,.jpeg,.png,.pdf" name='pendukung' id="realInput">

    <div class="btn-container">
      <button type="submit"  class="btn">adukan !!!</button>
    </div>
  </form>
</div>
        
      </div>
      
      </div><!-- container -->
    </div><!-- az-content -->
    <script>
    const fileInput = document.getElementById('realInput');
    const fileName = document.getElementById('fileName');

    fileInput.addEventListener('change', function () {
      if (fileInput.files.length > 0) {
        fileName.textContent = fileInput.files[0].name;
      } else {
        fileName.textContent = "Masukkan dokument pendukung jika ada";
      }
    });
  </script>
@endsection