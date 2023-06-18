@extends('admin.index')

@section('content')
<section class="section">
    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card mb-0">
            <div class="card-body">
            <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.index') }}">Semua <span class="badge badge-primary">{{ $semua }}</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.terjawab') }}">Terjawab <span class="badge badge-primary">{{ $terjawab }}</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.belum') }}">Belum Terjawab <span class="badge badge-white">{{ $belum_terjawab }}</span></a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </div>

    <div class="row mt-4">

        <div class="col-12">
        <div class="card">
            <div class="card-body">

            <div class="clearfix mb-3"></div>

            <div class="table-responsive">
                <table class="table table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Pertanyaan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach($datas as $data)
                @if($data->status ==  0)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>
                    <a href="{{ route('admin.detail', $data->id) }}">{{ $data->pertanyaan }}</a>
                    </td>
                    <td><div class="badge badge-warning">Belum dijawab</div></td>
                    <td></td>

                </tr>
                @endif
                @endforeach
                </table>
            </div>
            <div class="float-right">
                <nav>
                <ul class="pagination">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                    </li>
                    <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                    </li>
                </ul>
                </nav>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection