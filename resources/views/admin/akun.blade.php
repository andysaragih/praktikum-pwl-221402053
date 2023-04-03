@extends('admin.layout')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kelola Akun</h1>
                    </div>

                </div>

                <div class="card text-black mx-3" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <table id="basic-datatables" class="display table table-bordered table-hover">
                                    <tr>
                                        <th style="width: 7%;">No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 7%;">1</th>
                                        <th>Andy Saragih</th>
                                        <th>andysaragih</th>
                                        <th>andysaragih@gmail.com</th>
                                        <th>User</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 7%;">2</th>
                                        <th>Darren Kang</th>
                                        <th>darrenhere</th>
                                        <th>darrenkang@gmail.com</th>
                                        <th>User</th>
                                    </tr>
                                    <tr>
                                        <th style="width: 7%;">1</th>
                                        <th>Dylan Mckenzie</th>
                                        <th>dylann.01</th>
                                        <th>dylanmckenzie@gmail.com</th>
                                        <th>User</th>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection('content')