@extends('admin.admin')

@section('content')
    <div class="row py-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Events</strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-bordered table-striped" id="datatable">
                        <thead class="bg-dark">
                            <th>#</th>
                            <th>Title</th>
                            <th>Event Date</th>
                            <th>Entry Date</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach ($events as $index=>$event)
                                <tr>
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->date }}</td>
                                    <td>{{ $event->created_at->toDateString() }}</td>
                                    <td>
                                        <form action="{{ route('events.destroy',$event->id) }}" onsubmit="return confirm('Are You Sure You Want To Delete?')" method="post">
                                            <a href="{{ route('events.edit', $event->id) }}"
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
                    {{ $events->render('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>   
@endsection