@extends('admin.admin')

@section('content')
    <div class="row pt-2">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>Notice List</strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead class="bg-dark">
                            <th>#</th>
                            <th>Title</th>
                            <th>Message</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($notices as $index=>$notice)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $notice->title }}</td>
                                    <td>{!! Str::limit($notice->message,50,$end='...') !!}</td>
                                    <td>
                                        <form action="{{ route('notice.destroy',$notice->id) }}" onsubmit="return confirm('Are You Sure You Want To Delete?')" method="post">
                                            <a href="{{ route('notice.edit', $notice->id) }}"
                                                class="btn btn-outline-primary btn-sm">
                                                <i class="fas fa-pen"></i> Edit
                                            </a>
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger btn-sm ml-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection