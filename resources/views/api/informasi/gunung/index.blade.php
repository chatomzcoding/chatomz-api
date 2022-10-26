<x-frest-layout title="Informasi Gunung" menu="informasi">
    <x-navbar kembali="informasi"></x-navbar>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
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
</x-frest-layout>