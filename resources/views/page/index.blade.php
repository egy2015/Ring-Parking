@extends('layout.dashboard')
@section('tittle', 'Dashboard')
@section('content')


    <div class="container">
        {{-- <section class="text-center containerD">
            <button href="/page-detail" class="button text-light left btn bg-success">Add</button>

            <button class="button btn btn-warning">Mobil</button>
            <h1> | </h1>
            <button class="button btn btn-warning">Motor</button>

            <button class="button text-light right btn bg-success">Sort</button>
        </section> --}}

        <table class="table ">
            <thead>
                <tr>
                    <th><a href="page/create" class="containerD button text-light left btn bg-success"><i
                                class="far fa fa-plus">Add</a></th>
                    <th>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="semua" checked>
                            <label style="color: aliceblue;" class="form-check-label" for="inlineRadio1">Semua</label>
                        </div>
                    </th>
                    <th>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="motor">
                            <label style="color: aliceblue;" class="form-check-label" for="inlineRadio2">Motor</label>
                        </div>
                    </th>
                    <th>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                value="mobil">
                            <label style="color: aliceblue;" class="form-check-label" for="inlineRadio3">Mobil</label>
                        </div>
                    </th>
                    <th><a class="containerD button text-light btn bg-success"><i
                                class="far fa fa-sort-amount-down">Sort</a></th>
                    <th>
                        <div class="input-grup custom-search-form">
                            <input type="text" class="form-control" name="search" placeholder="Cari. . .">
                    </th>
                    <th><button style="float: right;" class="btn btn-primary" type="submit"><i class="fa fa-search"></i>
                            Cari</button>
    </div>
    </th>
    </tr>
    </thead>
    </table>



    <table class="table ">
        <thead>
            <tr class="bg-warning">
                <th class="mid text-dark">ID Parkir</th>
                <th class="mid text-dark">Plat Nomor</th>
                <th class="mid text-dark">Jenis Kendaraan</th>
                <th class="mid text-dark">Jam Masuk</th>
                <th class="mid text-dark">Aksi</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($tparkiran as $item)
                    @if ($item->j_k == 1)
                        <?php $item->j_k = 'Motor'; ?>
                    @elseif ($item->j_k == 2)
                        <?php $item->j_k = 'Mobil'; ?>
                    @else
                        <?= ' ' ?>
                            @endif
                                <td class="mid">{{ $item->id }}</td>
                                <td class="mid">{{ $item->plat_no }}</td>
                                <td class="mid">{{ $item->j_k }}</td>
                                <td class="mid">{{ $item->created_at }}</td>
                                <td class="mid">
                                    <form action="{{ route('page.destroy', $item->id) }}" method="POST" >
                                        @csrf
                                        @method('DELETE')
                                            <button style="margin: 10px;" type="submit" class="btn btn-danger btn-md text-light"><i class="fas fa-times"></i> Hapus</button>
                                        <a style="margin: 10px;" type="button" class="btn btn-info btn-md text-light" href="{{ route('page.show', $item->id) }}"><i class="far fa-eye"></i> Detail</a>
                                        <a style="margin: 10px;" href="/page/{{ $item->plat_no }}/cetak_pdf" type="button" class="btn btn-primary btn-md text-light"><i class="far fa-file-alt"></i> Cetak</a><br><br>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
@endsection
