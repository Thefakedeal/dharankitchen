@extends('admin.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 md-2 mt-2">
            <div class="card shadow ">
                <div class="card-body">
                    <form action="" method="get">
                        <div class="row justify-content-center">
                            <div class="form-group m-2">
                                <select name="venue_id" id="venue_id"  class="form-control" >
                                    <option value="0"> All </option>
                                    @foreach ($venues as $venue)
                                        <option value="{{ $venue->id }}"> {{ $venue->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group m-2">
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fas fa-search"></i>
                                    Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow">
                <div class="card-header">Menu Items</div>
                <div class="card-body">
                    <table class="table table-sm ">
                        <thead>
                            <th>
                                S.N
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Category
                            </th>
                            <th>
                                Venue
                            </th>
                            <th>
                                Actions
                            </th>
                        </thead>
                        @foreach ($menues as $index => $menu)
                            <tr>
                                <td>
                                    {{ ++$index }}
                                </td>
                                <td>
                                    {{ $menu->name }}
                                </td>
                                <td>
                                    {{ $menu->price }}
                                </td>
                                <td>
                                    {{ $menu->category->name??" " }}
                                </td>
                                <td>
                                    {{ $menu->venue->name??" " }}
                                </td>
                                <td>
                                    <form action="{{ route('menu.destroy', $menu->id) }}" method="post"
                                        onsubmit="return confirm('Are You Sure You Want To Delete {{ $menu->name }} ?')">
                                        <a href="{{ route('menu.edit', $menu->id) }}"
                                            title="Edit {{ $menu->name }}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger ml-2" title="Delete {{ $menu->name }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{-- {{ $menues->render('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
