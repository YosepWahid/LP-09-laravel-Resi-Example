@extends('layouts.app')


@section('header-title')
    Halaman Cetak
@endsection

@section('title')
    Cetak Resi
@endsection

@section('content')
    <div class="container-fluid">

        <a href="{{ route('create') }}" class="btn btn-sm btn-primary">Tambah</a>



        <div class="row mt-1">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Resi yang Harus Dicetak</h4>
                        {{-- <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>No Resi</th>
                                    <th>Pembuatan</th>
                                    <th>Desa</th>
                                    <th>Tanggal Resi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resis as $item)
                                    <tr>
                                        <td>{{ $item->no_resi }}</td>
                                        <td>{{ $item->pembuatan }}</td>
                                        <td>{{ $item->desa }}</td>
                                        <td>{{ $item->tanggal_resi }}</td>
                                        <td>
                                            <a href="{{ route('print', [$item->id]) }}"
                                                class="btn btn-primary btn-sm">Print</a>

                                            <a href="{{ route('edit', [$item->id]) }}"
                                                class="btn btn-info btn-sm">Update</a>

                                            <a href="{{ route('delete', [$item->id]) }}"
                                                class="btn btn-danger btn-sm">Delete</a>


                                            <!-- Button Detail -->
                                            <button type="button" class="btn btn-sm btn-primary" id="detailResi"
                                                data-id="{{ $item->id }}">
                                                Detail
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <!-- Modal Detail-->
                    <div class="modal fade" id="ModalDetail" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="content">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Detail-->
                    <!-- /.card-body -->
                </div>
                {{ $resis->links('pagination::bootstrap-4') }}
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script>
        $(document).on('click', '#detailResi', function() {
            let ResiID = $(this).data('id');
            //fetch detail post with ajax
            $.ajax({
                url: "show/" + ResiID,
                type: "GET",
                cache: false,
                success: function(response) {
                    $('#content').html('pembuatan :' + response.data.pembuatan);
                    $('#title').html(response.data.desa);
                    $('#ModalDetail').modal('show');
                }
            });
        })
    </script>
@endpush
