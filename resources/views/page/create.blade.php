@extends('layout.dashboard')
@section('tittle', 'Data Baru')
@section('content')


    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1 style="color: white; text-decoration: underline; ">Add Parking</h1><br>
            </div>
            <form method="POST" action="{{ url('page') }}" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-md-center" >
                    <div class="col-5">
                        <div class="form-group">
                            <label style="color: white;" >Plat Nomor</label>
                            <input type="text" class="form-control" placeholder="Masukan plat nomor kendaraan"
                                name="plat_no" required>
                        </div>
                        <div class="form-group">
                            <label style="color: white;">Jenis Kendaraan</label>
                            <select class="form-control" name="j_k">
                                <option value="1">Motor</option>
                                <option value="2">Mobil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="color: white;">Masukan Gambar</label>
                            <div class="form-group custom-file">
                                <input type="file" class="form-control" id="inputGroupFile02" name="foto" required>
                            </div>
                        </div>
                        <div style="float: right;">
                            <button type="button" class="btn btn-primary btn-md text-light"
                                onclick="history.back(-1)">Back</button>
                            <button type="submit" class="btn btn-success btn-md text-light"><i class="fas fa-check"></i>
                                Simpan</button><br><br>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>

@endsection
