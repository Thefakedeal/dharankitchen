@extends('admin.admin')

@section('content')
    <div class="row py-2">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong> Dining Hall </strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead class="bg-dark">
                            <th>#</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($dinings as $index=>$dining)
                                <tr>
                                    <td>
                                        {{ ++$index }}
                                    </td>
                                    <td>
                                        {{ $dining->name }}
                                    </td>
                                    <td>
                                        <form action="{{ route('dining.destroy',$dining->id) }}" onsubmit="return confirm('Are You Sure You Want To Delete?')" method="post">
                                            <a href="{{ route('dining.edit', $dining->id) }}"
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