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
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                aria-label="CSS grade: activate to sort column ascending">Name</th>
                            <th style="width: 30%">
                                Image
                            </th>
                            <th style="width: 30%">
                                Description
                            </th>
                            <th style="width: 20%">
                                Action
                                <a href="{{ 'addservicedetails' }}"> <button type="button"
                                        class="btn btn-block btn-primary">Add</button>
                                </a>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($serviceDetailsList as $serviceDetails)
                            <tr>
                                <td>{{ $loop->iteration }} </td>
                                <td>{{ $serviceDetails->name }} </td>
                                <td>
                                    <img src="{{ asset('storage/images/' . $serviceDetails->image) }}"
                                        alt="{{ $serviceDetails->name }}" style="max-width: 100px;">
                                </td>
                                <td>{{ $serviceDetails->description }} </td>

                                <td class="project-actions">

                                    <a class="btn btn-info btn-sm" href="{{route('showeditservicedetail', ['id' => $serviceDetails->id])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form
                                        action="{{ route('admin.servicedetails.destroy', ['id' => $serviceDetails->id]) }}"
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
