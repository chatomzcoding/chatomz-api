<x-frest-layout title="Informasi Surah" menu="informasi">
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
                                <th>Ayat</th>
                                <th>Arti</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($doa as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->ayat }} <br> {{ $item->latin }}</td>
                                    <td>{{ $item->arti }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-frest-layout>