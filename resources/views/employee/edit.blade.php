@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <div class="row  justify-content-center">
        <div class="col-4">
            <h1>UBAH DATA</h1>
            <form action="/employee/{{$employee->id}}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="text" name="nama" placeholder="masukkan nama" value="<?php echo $employee["nama"]; ?>" class="form-control">
                    <div id="emailHelp" class="form-text">Masukkan Nama Lengkap</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nomor Induk Kependudukan</label>
                    <input type="text" name="nik" placeholder="masukkan nik" value="<?php echo $employee["nik"]; ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nomor Kartu Keluarga</label>
                    <input type=" text" name="no_kk" placeholder="masukkan no_kk" value="<?php echo $employee["no_kk"]; ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <select name=" jenis_kelamin" id="">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="l" @if($employee->jenis_kelamin == 'l') selected @endif>Laki-Laki</option>
                        <option value="p" @if($employee->jenis_kelamin == 'p') selected @endif>perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" name="alamat" id="" cols="30" rows="10" placeholder="Masukkan Alamat" id="floatingTextarea2" style="height: 100px"> <?php echo $employee["alamat"]; ?></textarea>
                        <label for="floatingTextarea2">Masukkan Alamat</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" value="Save">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection