@extends('components.layouts')
    <div class="row justify-content-center">
  
        <div class="col-lg-4">
          <main class="form-registration w-100 m-auto mt-5">
            <form action="/register" method="post">
              @csrf
              
              <h1 class="h3 mb-3 fw-normal">Form Daftar</h1>
          
              <div class="form-floating">
                <input type="text" name="nama" class="form-control rounded-top" id="nama" placeholder="Nama">
                <label for="nama">Nama</label>
              </div>
              <div class="form-floating">
                <input type="text" name="angkatan" class="form-control" id="angkatan" placeholder="Angkatan">
                <label for="angkatan">Angkatan</label>
              </div>
              <div class="form-floating">
                <input type="nohp" name="nohp" class="form-control" id="nohp" placeholder="NoHP">
                <label for="nohp">NoHP</label>
              </div>
              <div class="form-floating">
                <input type="jeniskelamin" class="form-control rounded-bottom" name="password" id="jeniskelamin" placeholder="JenisKelamin">
                <label for="jeniskelamin">JenisKelamin</label>
              </div>
          
             
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
              
            </form>
      
            
            <a class="d-block text-center mt-3" href="/list">Sudah Mendaftar? Lihat Peserta disini</a>
          
          </main>
        </div>
    </div>