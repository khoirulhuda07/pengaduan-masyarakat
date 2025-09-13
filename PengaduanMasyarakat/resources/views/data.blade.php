@extends('template.appuser')
@section('title', 'Riwayat Pengaduan')
@section('content')
<div class="row">
<div class="col-12">
  <div class="card">
    <div class="card-body">
          <h2 class="az-content-title text-center">Riwayat Pengaduan Anda</h2>
            <div class="table-responsive">
            <table class="table table-bordered  table-hover mg-b-0">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Pengadu</th>
                  <th>Detail Lokasi</th>
                  <th>Jenis Pengaduan</th>
                  <th>Deskripsi</th>
                  <th>dokument pendukung</th>
                  <th>Status</th>
                  <th>Lihat Balasan</th>
                  <th>aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($pengaduan as $data)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$data->NAMA}}</td>
                  <td>{{$data->LOKASI}}</td>
                  <td>{{$data->JENIS}}</td>
                  <td>{{$data->PENGADUAN}}</td>
                  @if($data->DOKUMEN == null)
                  <td>Tidak ada</td>
                  @else
                  <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#pendukung{{$data->ID_PENGADUAN}}"><i class="fas fa-envelope-open-text"></i></button></td>
                  @endif
                  <td>{{$data->STATUS}}</td>
                  @if($data->STATUS == 'diproses')
                  <td>Tidak ada</td>
                  @else
                  <td><button class="btn btn-outline-primary" data-toggle="modal" data-target="#pesan{{$data->ID_PENGADUAN}}" type="button"><i class="fas fa-envelope-open-text"></i></button></td>
                  @endif
                  <td>
                  @if(auth()->check() && auth()->user()->level == 'petugas' && $data->STATUS != 'ditolak' && $data->STATUS != 'disetuji')
                  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal{{ $data->ID_PENGADUAN }}">
                    Tanggapi
                  </button>
                  @else

                @endif
                  <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#hapusModal{{$data->ID_PENGADUAN}}">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                  
                  <div class="modal fade" id="pendukung{{$data->ID_PENGADUAN}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body  text-center">
                      @php
                          $path = asset('storage/' . $data->DOKUMEN);
                          $extension = pathinfo($data->DOKUMEN, PATHINFO_EXTENSION);
                      @endphp
                      @if(in_array($extension, ['jpg', 'jpeg', 'png', 'gif']))
                        <img src="{{url('storage/'.$data->DOKUMEN)}}" alt="Dokumen Gambar" class="img-fluid">
                      @elseif($extension === 'pdf')
                        <embed src="{{url('storage/'.$data->DOKUMEN)}}" type="application/pdf" width="100%" height="500px" />
                      @endif
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                      </div>
                    </div>
                  </div>
                </div>

                
                <div class="modal fade" id="pesan{{$data->ID_PENGADUAN}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Surat Balasan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="word-wrap: break-word; white-space: pre-wrap;">
                     <p>{{$data->balasan->KETERANGAN ?? 'Belum Ada Balasan'}}</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                    </div>
                  </div>
                </div>
              </div>


              <div class="modal fade" id="exampleModal{{$data->ID_PENGADUAN}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                    <form action="{{url('/pengaduan/tanggapi/'.$data->ID_PENGADUAN)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">balan Pesan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <select class="form-control" name="status">
                      <option selected value="">ubah status pesan</option>
                      <option value="ditolak">Ditolak</option>
                      <option value="disetujui">Disetujui</option>
                    </select>
                    <input class="form-control mt-2 mb-2" type="text" name="keterangan" placeholder="Kirim Balasan DIsini">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>

                <div class="modal fade" id="hapusModal{{$data->ID_PENGADUAN}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                  <form action="{{url('pengaduan/hapus/'.$data->ID_PENGADUAN)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('DELETE')
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hapus Pengaduan</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="word-wrap: break-word; white-space: pre-wrap;">
                 <p>apakah anda ingin menghapus pengaduan ini ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
                </td>
                </tr>
               @endforeach
              </tbody>
            </table>
          </div>
      
        </div>
      </div>
    </div>
</div>
@endsection