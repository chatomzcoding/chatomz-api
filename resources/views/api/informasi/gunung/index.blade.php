<x-frest-layout title="Informasi Gunung" menu="informasi">
    <x-navbar kembali="informasi"></x-navbar>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped" id="example1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Bentuk</th>
                                <th>Tinggi</th>
                                <th>Letusan Terakhir</th>
                                <th>Geolokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gunung as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->bentuk }}</td>
                                    <td>{{ $item->tinggi }}</td>
                                    <td>{{ $item->letusan_terakhir }}</td>
                                    <td>{{ $item->geolokasi }}</td>
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