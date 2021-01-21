@extends('admin.admin')

@section('content')
    <div class="row pt-4">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <strong>Queries</strong>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <th>
                                #
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Mobile
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($queries as $index => $query)
                                <tr>
                                    <td>
                                        {{ ++$index }}
                                    </td>
                                    <td>
                                        {{ $query->name }}
                                    </td>
                                    <td>
                                        {{ $query->email }}
                                    </td>
                                    <td>
                                        {{ $query->mobile }}
                                    </td>
                                    <td>
                                        <a href="{{ route('query.show', $query->id) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $queries->render('pagination::bootstrap-4') }}
                </div>

            </div>
        </div>
    </div>
@endsection
