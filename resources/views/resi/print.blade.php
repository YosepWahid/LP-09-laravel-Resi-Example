<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ env('APP_NAME') }} - Cetak
    </title>

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>

<body>
    <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>No Resi</th>
                    <th>Pembuatan</th>
                    <th>Desa</th>
                    <th>Tanggal Resi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $item->no_resi }}</td>
                    <td>{{ $item->pembuatan }}</td>
                    <td>{{ $item->desa }}</td>
                    <td>{{ $item->tanggal_resi }}</td>
                </tr>
            </tbody>
        </table>
    </div>


    <script>
        window.print();

        window.onafterprint = function() {
            window.location.href = "http://localhost:8000/resi";
        }
    </script>
</body>

</html>
