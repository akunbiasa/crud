@extends('components.layouts')
@if($message = Session::get('success'))
    <div class="row">
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
<div class="row justify-content-center mt-5">
  
  <div class="col-10">
    
      <div class="card">
     
  </div>
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
                  @foreach ($users as $row )
                    <tr>
                      <th scope="row">{{ $row->id }}</th>
                     <td>{{  $row->nama }}</td>
                     <td>{{  $row->angkatan }}</td>
                     <td>{{  $row->nohp }}</td>
                     <td>{{  $row->jeniskelamin }}</td>
                     <td>
                      <a href="/tampilkandata/{{ $row->id }}"  class="btn btn-primary">EDIT</a>
                      <a href="/hapusdata/{{ $row->id }}" type="button" class="btn btn-danger">HAPUS</a>
                    </td>
                    </tr>   
                  @endforeach
                  </tbody>         
                </table>
                
                        
          </div>
      </div>
  </div>
</div>
<a class="btn btn-primary d-block text-center justify-content-center mt-2" href="/register">Not Registered? Register Now</a>