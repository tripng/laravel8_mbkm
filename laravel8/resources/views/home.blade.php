@extends('layouts.main')

@section('content')
<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pendidikan</h5>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tingkat</th>
                                <th scope="col">Pendidikan</th>
                                <th scope="col">Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Sekolah Dasar</td>
                                <td>Madrasah Ibtidaiya Kota Utara</td>
                                <td>2007-2013</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Sekolah Menengah Pertama</td>
                                <td>Madrasah Tsanawiyah Negeri Gorontalo</td>
                                <td>2013-2016</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Sekolah Menengah Atas</td>
                                <td>Madrasah Aliyah Negeri Model Gorontalo</td>
                                <td>2016-2019</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Kuliah</td>
                                <td>Universitas Negeri Malang</td>
                                <td>2019-Sekarang</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Row-->
@endsection