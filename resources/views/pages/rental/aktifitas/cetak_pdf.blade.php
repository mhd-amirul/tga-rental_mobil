<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HISTORY</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        @page { size: A4 }
    </style>
</head>
<body class="A3">
    <br><br>
    <h4 class="mt-3 text-center">LAPORAN HISTORY PENYEWAAN MOBIL RENTAL</h4>
    @foreach ($histories as $history)
        <section class="padding-10mm mx-5 my-5">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>NO.</th>
                        <th>NAMA PEMINJAM</th>
                        <th>NIK PEMINJAM</th>
                        <th>TANGGAL PEMINJAMAN</th>
                        <th>BATAS TANGGAL</th>
                        <th>STATUS</th>
                        <th>SISA WAKTU</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $history->nama_pinjam }}</td>
                        <td>{{ $history->nik_pinjam }}</td>
                        <td>{{ $history->tgl_pinjam }}</td>
                        <td>{{ $history->batas_pinjam }}</td>
                        <td>{{ $history->status }}</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">
                            <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                <img src="{{ url('images/notfound.png') }}" alt="#" class="img-fluid">
                            </div>
                        </td>
                        <td colspan="2">
                            <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                <img src="{{ url('images/notfound.png') }}" alt="#" class="img-fluid">
                            </div>
                        </td>
                        <td colspan="2">
                            <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                <img src="{{ url('images/notfound.png') }}" alt="#" class="img-fluid">
                            </div>
                        </td>
                    </tr>
                </tbody>
                <thead class="thead-dark ">
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>MERK</th>
                        <th>TAHUN PRODUKSI</th>
                        <th>HARGA SEWA</th>
                        <th>NO POLISI</th>
                        <th>TOKO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>wqeqw</td>
                        <td>empty</td>
                        <td>empty</td>
                        <td>empty</td>
                        <td>Empty</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan="2">
                            <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                <img src="{{ url('images/notfound.png') }}" alt="#" class="img-fluid">
                            </div>
                        </td>
                        <td colspan="2">
                            <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                <img src="{{ url('images/notfound.png') }}" alt="#" class="img-fluid">
                            </div>
                        </td>
                        <td colspan="2">
                            <div style="max-height: 200px; max-width: 300px; overflow: hidden;" class="border border-dark">
                                <img src="{{ url('images/notfound.png') }}" alt="#" class="img-fluid">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    @endforeach
    <script>
        window.print();
    </script>

</body>
</html>




