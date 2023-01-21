@extends('layouts.app')


@section('header-title')
    Halaman Utama
@endsection

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-3 col-3">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{ $jumlah }}</h3>

                        <p>Total Data Resi</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-book"></i>
                    </div>
                    {{-- <a href="#" class="small-box-footer">More info<i class="fas fa-arrow-circle-right"></i></a> --}}
                </div>
                {{-- <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div> --}}
            </div>


            {{-- <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kartu Resi</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Alamat</th>
                                    <th>Tanggal</th>
                                    <th>Resi</th>
                                    <th>Desa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-warning">Pending</span></td>
                                    <td>Bacon ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-primary">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-danger">Denied</span></td>
                                    <td>Bacon ipsum dolor sit amet</td>
                                </tr>
                            </tbody>

                        </table>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div> --}}
            <!-- /.card -->
        </div>
        <!-- ./col -->
    </div>
@endsection
