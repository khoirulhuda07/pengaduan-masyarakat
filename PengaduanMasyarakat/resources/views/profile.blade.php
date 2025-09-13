@extends('template.appuser')
@section('title', 'Profile')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<div class="row">
    <div class="col-xl-4 py-3 px-3 mx-auto">
        <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    @if (empty(Auth::user()->foto))
                        <img src="{{asset('user2/img/no_foto.jpg')}}" alt="Profile" class="rounded-circle" style="aspect-ratio: 1/1; object-fit: cover;" width="69%">
                        @else
                        <img src="{{asset('storage/photo_user/'.Auth::user()->foto)}}" alt="Profile" class="rounded-circle" style="aspect-ratio: 1/1; object-fit: cover;" width="69%">
                        @endif
                        <h3 class="mt-3"> @if (empty(Auth::user()->name))
                            {{''}}
                            @else
                            {{Auth::user()->name}}
                            @endif
                        </h3>
                    </div>

        </div>

    </div>
    <div class="col-xl-8 py-3 px-3 mx-auto">

<div class="card">
    <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>

            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
            </li>

        </ul>
        <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <h5 class="card-title">Profile Details</h5>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nomor Hp</div>
                    <div class="col-lg-9 col-md-8">
                        @if (empty(Auth::user()->noHp))
                        {{''}}
                        @else
                        {{Auth::user()->noHp}}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Username</div>
                    <div class="col-lg-9 col-md-8">
                        @if (empty(Auth::user()->name))
                        {{''}}
                        @else
                        {{Auth::user()->name}}
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8">
                        @if (empty(Auth::user()->alamat))
                        {{''}}
                        @else
                        {{Auth::user()->alamat}}
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">
                        @if (empty(Auth::user()->email))
                        {{''}}
                        @else
                        {{Auth::user()->email}}
                        @endif
                    </div>
                </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="{{url('profile/edit/'.$user->id)}}" method="post" enctype="multipart/form-data">
                                  
                                  @csrf
                    <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="foto" type="file" class="form-control " id="profileImage">
                            
                            <!-- <div class="pt-2">
                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                            </div> -->
                        </div>
                    </div>
                   

                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-lg-3 col-form-label">Username</label>
                        <div class="col-md-8 col-lg-9">
                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            @error('username')
                            <span>
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nomor Hp</label>
                        <div class="col-md-8 col-lg-9">
                        <div class="input-group">
<span class="input-group-text" id="basic-addon1">+62</span>
<input type="text" class="form-control" placeholder="nomor hp anda" name="noHp" aria-label="nomor hp anda" aria-describedby="basic-addon1"
value="{{ str_starts_with($user->noHp, '+62') ? substr($user->noHp, 3) : $user->noHp }}">
</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                        <div class="col-md-8 col-lg-9">
                        <input name="alamat" type="text" class="form-control" id="Address" value="{{$user->alamat}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        
                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control" id="Email" value="{{$user->email}}">
                                        </div>
                     
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>

            </div>
            <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form action="{{url('profile/edit/'.$user->id)}}" method="post" enctype="multipart/form-data">
                                  
                                  @csrf
                                  <input name="email" type="hidden" class="form-control" id="Email" value="{{$user->email}}">
                                  <input name="alamat" type="hidden" class="form-control" id="Address" value="{{$user->alamat}}">
                                  <input type="hidden" class="form-control" placeholder="nomor hp anda" name="noHp" aria-label="nomor hp anda" aria-describedby="basic-addon1"
value="{{ str_starts_with($user->noHp, '+62') ? substr($user->noHp, 3) : $user->noHp }}">
                                  <input type="hidden" class="form-control" name="name" value="{{$user->name}}">
                                  <input name="email" type="hidden" class="form-control" id="Email" value="{{$user->email}}">

                    <div class="row mb-3">
                        <label for="currentPassword" class="col-md-5 col-lg-4 col-form-label"> Password Sekarang</label>
                        <div class="col-md-7 col-lg-8">
                            <input name="old_password" type="password" class="form-control" id="currentPassword">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="newPassword" class="col-md-5 col-lg-4 col-form-label">Password Baru</label>
                        <div class="col-md-7 col-lg-8">
                            <input name="password" type="password" class="form-control" id="newPassword">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="renewPassword" class="col-md-5 col-lg-4 col-form-label">Masukkan kembali Password Baru</label>
                        <div class="col-md-7 col-lg-8">
                            <input name="password_confirmation" type="password" class="form-control" id="renewPassword">
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form>

            </div>

        </div><!-- End Bordered Tabs -->

    </div>
</div>

</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
@endsection