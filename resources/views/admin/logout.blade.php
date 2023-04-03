@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Log out</h1>
                    </div>

                </div>

                <div class="card text-black mx-3" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <p>Apakah anda yakin ingin logout?</p>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">Ya</button>
                            <button type="reset" class="btn btn-danger ml-4">Cancel</button>
                        </div>
                        <div class="row justify-content-center mt-3">
                            <img src="{{asset('img/logout.jpeg')}}" alt="Jangan Pergi!" width="30%" height="30%">
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection('content')