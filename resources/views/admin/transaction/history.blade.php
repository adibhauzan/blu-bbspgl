@extends('admin.layouts.main')

@section('main-content')
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Projects</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>

                </div>
            </div>
            <div class="card-body p-0" style="display: block;">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                No
                            </th>
                            <th style="width: 10%">
                                Penyewa
                            </th>
                            <th style="width: 10%">
                                Alamat
                            </th>
                            <th style="width: 10%">
                                Mulai
                            </th>
                            <th style="width: 10%">
                                Selesai
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($historyList as $listHistroy)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $listHistroy->user->name }}</td>
                                <td>{{ $listHistroy->alamat }}</td>
                                <td>{{ $listHistroy->started_at }}</td>
                                <td>{{ $listHistroy->ended_at }}</td>
                          
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
