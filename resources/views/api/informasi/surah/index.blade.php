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
                                <th>Nama Surah</th>
                                <th>Nama Arti</th>
                                <th>Keterangan</th>
                                <th>Audio</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($surah as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }} <br> {{ $item->asma }} <br>{{ $item->type }} <br>{{ $item->ayat }} Ayat</td>
                                    <td>{{ $item->arti }}</td>
                                    <td>{!! $item->keterangan !!}</td>
                                    <td>
                                        <a href="{{ $item->audio }}" target="_blank" class="btn btn-label-info btn-sm btn-icon"><i class="bi-play"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-frest-layout>