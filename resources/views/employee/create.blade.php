@extends('layouts.master')
@section('content')

<div class="container">
    <h1>Create Karyawan</h1>
    <form action="/employee/store" method="POST">
        @csrf
        <input type="text" name="nama" placeholder="masukkan nama">
        <br>
        <input type="text" name="nik" placeholder="masukkan nik">
        <br>
        <input type="text" name="no_kk" placeholder="masukkan no_kk">
        <br>
        <select name="jenis_kelamin" id="">
            <option value="">Pilih Jenis Kelamin</option>
            <option value="l">Laki-Laki</option>
            <option value="p">perempuan</option>
        </select>
        <br>
        <textarea name="alamat" id="" cols="30" rows="10" placeholder="masukkan alamat"></textarea>
        <br>
        <button name="submit" value="Save">submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
@endsection