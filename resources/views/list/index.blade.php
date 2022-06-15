@extends('components.layouts')
<div class="row justify-content-center mt-5">
  <div class="col-10">
      <div class="card">
          <div class="card-header">
          Data all users
          </div>
          <div class="card-body">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Angkatan</th>
                      <th scope="col">nohp</th>
                      <th scope="col">JenisKelamin</th>
                      <th scope="col">AKSI</th>
                      
                      
                      {{-- <th scope="col">Aksi</th> --}}
                    </tr>                 
                  </thead>

                  <tbody>
                  @foreach ($users as $key => $user)
                    <tr>
                      <th scope="row">{{ ++$key }}</th>
                     <td>{{  $user->nama }}</td>
                     <td>{{  $user->angkatan }}</td>
                     <td>{{  $user->nohp }}</td>
                     <td>{{  $user->jeniskelamin }}</td>
                     <td>
                      <a href="#"><button type="button" class="btn btn-primary">EDIT</button></a>
                      <a href="#"><button type="button" class="btn btn-danger">HAPUS</button></a>
                    </td>
                    </tr>   
                  @endforeach
                  </tbody>         
                </table>
                
                        
          </div>
      </div>
  </div>
</div>
<a class="d-block text-center justify-content-center mt-2" href="/register">Not Registered? Register Now</a>