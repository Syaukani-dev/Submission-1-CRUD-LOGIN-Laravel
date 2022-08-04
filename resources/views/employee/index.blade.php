 @extends('layouts.app')
 @section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-8">
             <div class="card">
                 <div class="card-header">{{ __('Employee') }}</div>
                 <div class="card-body">
                     <table class=" table table-light table-hover table-responsive">
                         <a href="/employee/create" style="text-decoration: none; color:white;" class="btn btn-primary mb-5">Tambah Instruktur</a>
                         <tr>
                             <th> NAMA </th>
                             <th> NIK</th>
                             <th> NOMOR KK </th>
                             <th> JENIS KELAMIN </th>
                             <th> ALAMAT </th>
                             <th>AKSI</th>
                         </tr>
                         <?php foreach ($employee as $emp) : ?>
                             <tr>
                                 <td><?php echo $emp["nama"]; ?></td>
                                 <td><?php echo $emp["nik"]; ?></td>
                                 <td><?php echo $emp["no_kk"]; ?></td>
                                 <td><?php echo $emp["jenis_kelamin"]; ?></td>
                                 <td><?php echo $emp["alamat"]; ?></td>
                                 <td>
                                     <a href=" /employee/<?php echo $emp["id"]; ?>/edit">Edit</a>
                                     <form action="/employee/<?php echo $emp["id"]; ?>" method="POST">
                                         @csrf
                                         @method('delete')
                                         <input type="submit" value="Delete">
                                     </form>
                                 </td>
                             </tr>
                         <?php endforeach; ?>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>

 @endsection