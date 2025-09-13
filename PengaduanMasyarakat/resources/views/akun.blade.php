@extends('template.appuser')
@section('title', 'Kelola Akun')
@section('content')
<div class="row">
      <div class="col-12">  
        <div class="card">
          <div class="card-body">
        <h2 class="az-content-title text-center">Kelola Akun</h2>
        <div class="table-responsive">
        <table class="table table-bordered text-center table-hover mg-b-0">
            <thead>
                <th>No</th>
                <th>Username</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nomor Hp</th>
                <th>Role</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                @foreach($user as $d)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$d->name}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->alamat}}</td>
                    <td>{{$d->noHp}}</td>
                    <td>{{$d->level}}</td>
                    <td><button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editModal{{$d->id}}">
<i class="fas fa-edit"></i>
</button>
<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#hapusModal{{$d->id}}">
<i class="fa fa-trash" aria-hidden="true"></i>
</button></td>
<div class="modal fade" id="editModal{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{url('/akun/edit/'.$d->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Edit Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <select class="form-control" name="level">
  <option value="" selected>Edit Role akun</option>
  <option value="user">User</option>
  <option value="petugas">Petugas</option>
</select>
<input class="form-control mt-2 mb-2" type="text" placeholder="ganti password" name="password">
<!-- <input class="form-control" type="text" placeholder="Konfirmasi Password Baru"> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="hapusModal{{$d->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                  <form action=" {{url('akun/delete/'.$d->id)}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Form Hapus akun</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="word-wrap: break-word; white-space: pre-wrap;">
                    <p>Apakah anda Yakin ingin menghapus akun dengan username {{$d->name}} ini ?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Hapus</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        </div>
      </div>
</div></div>

@endsection