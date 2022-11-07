<x-frest-layout title="Data Daerah Kecamatan" menu="data">
    <x-navbar kembali="dataprovinsi/{{ $datakota->dataprovinsi->id }}"></x-navbar>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <header>
                        <h3>Data Kota {{ $datakota->nama }}</h3>
                    </header>
                    <table class="table table-striped" id="example1">
                        <thead>
                            <tr>
                                <th width="10%">No</th>
                                <th>ID</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datakota->datakecamatan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ url('datakecamatan/'.$item->id) }}">{{ $item->id }}</a> </td>
                                    <td>{{ $item->nama }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="kodejs">
        <script>
            $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": ["copy","excel"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            });
        </script>
    </x-slot>
</x-frest-layout>