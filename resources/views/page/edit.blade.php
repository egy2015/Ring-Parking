@extends('layout.dashboard')
@section('tittle', 'Detail')
@section('content')


    <td> </td>
    <td> </td>
    <td> </td>
    <div class="container">
        <section style="color: white; width 100%;">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div>
                        <a class="btn btn-secondary" onclick="history.back(-1)"><i class="far fa fa-arrow-left"></i>
                            Kembali</a>
                    </div><br>
                    <div class="float-left">
                        <h2> Detail Parkir</h2>
                    </div>

                </div>
            </div>


            <div class="container">


                <form method="POST" action="{{ route('page.update', $tparkiran->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="_method" value="PUT">
                    <div class="row justify-content-md-center">
                        <div class="col-5">

                            <div class="form-group">
                                <label style="color: white;">Plat Nomor</label>
                                <input type="text" class="form-control" value="{{ $tparkiran->plat_no }}" name="plat_no"
                                    required>
                            </div>
                            <div class="form-group">
                                <label style="color: white;">Jenis Kendaraan</label>
                                <select class="form-control" name="j_k">
                                    <option>Motor</option>
                                    <option>Mobil</option>
                                </select>
                            </div>
                            <div style="float: right; ">
                                <button type="submit" class="btn btn-success btn-md text-light"><i class="fas fa-check"></i>
                                    Simpan</button><br><br>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </section>

    </div>











@endsection
