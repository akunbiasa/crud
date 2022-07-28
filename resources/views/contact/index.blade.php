@extends('components.layouts')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Contact Us</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row justify-content-center">

        <div class="col-lg-4">
            <main class="form-registration w-100 m-auto mt-5">
                <form action="/contact" method="post">
                    @csrf

                    <h1 class="h3 mb-3 fw-normal">Hubungi Kami</h1>

                    <div class="form-floating">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control rounded-top" id="email"
                            placeholder="Email">
                        
                    </div>
                    <div class="form-floating">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="pesan"  class="form-control rounded-top"  rows="5" placeholder="Pesan"></textarea>
                    </div>
                    
                    


                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Kirim Pesan</button>

                </form>


                <a class="d-block text-center mt-3" href="/dashboard">Kembali ke Dasboard</a>

            </main>
        </div>
    </div>
</div>
@endsection