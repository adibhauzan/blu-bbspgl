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
                                Mulai
                            </th>
                            <th style="width: 10%">
                                Selesai
                            </th>
                            <th style="width: 10%">
                                Alamat
                            </th>
                            <th style="width: 10%;">
                                Bukti Pembayaran
                            </th>
                            <th style="width: 10%">
                                Status
                            </th>
                            <th style="width: 10%">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ordersList as $listOrder)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $listOrder->user->name }}</td>
                                <td>{{ $listOrder->started_at }}</td>
                                <td>{{ $listOrder->ended_at }}</td>
                                <td>{{ $listOrder->alamat }}</td>
                                <td><img src="{{ asset('storage/images/' . $listOrder->bukti_pembayaran) }}" alt=""
                                        style="max-width: 100px;"></td>
                                <td>{{ $listOrder->status->name }}</td>
                                <td class="project-actions">

                                    <a class="btn btn-info btn-sm" href="{{route('showeditorder', ['id' => $listOrder->id])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.orders.destroy', ['id' => $listOrder->id]) }}"
                                        method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                  
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
