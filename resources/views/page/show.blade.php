@extends('layout.dashboard')
@section('tittle', 'Detail')
@section('content')

    <div class="container justify-content">
        <section style="color: white" ;>


                    <div>
                        <a class="btn btn-secondary" href="{{ route('page.index') }}"><i class="far fa fa-arrow-left"></i>
                            Kembali</a>
                        <a style="margin: 10px;" type="button" class="btn btn-success btn-md text-light"
                            href="{{ route('page.edit', $tparkiran->id) }}"><i class="far fa fa-pen"></i> Edit</a>
                            
                    </div><br>
                    <div class="justify-content">
                        <div class="float-left">
                            <h2> Detail Parkir: {{ $tparkiran->plat_no }}</h2>
                        </div>

                    </div>
                </div>




                
                <div class="row text-white">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>ID Parkir:</strong>
                            {{ $tparkiran->id }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Plat Nomor:</strong>
                            {{ $tparkiran->plat_no }}
                        </div>
                    </div>
                    @if ($tparkiran->j_k == 1)
                    <?php $tparkiran->j_k = 'Motor'; ?>
                    @elseif ($tparkiran->j_k == 2)
                        <?php $tparkiran->j_k = 'Mobil'; ?>
                    @else
                        <?= ' ' ?>
                @endif
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jenis Kendaraan:</strong>
                            {{ $tparkiran->j_k }}

                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">

                            <label for="foto" class="text-light">
                                <h4> <strong>Gambar</strong></h4>
                            </label><br>
                            <img src="{{ asset('assets/images/parking/' . $tparkiran->foto) }}" width="200px">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Jam Masuk</strong>
                            {{ $tparkiran->created_at }}

                        </div>
                    </div>



                </div>
        </section>
    </div>
    </div>
@endsection
