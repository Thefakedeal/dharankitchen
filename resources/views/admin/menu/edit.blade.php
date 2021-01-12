@extends('admin.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 ">
            <div class="card shadow">
                <div class="card-header">
                    Update Item
                </div>
                <div class="card-body">
                    @if ($menu->image)
                       {{-- Image Modal --}}
                    <img src="{{ $menu->image }}" class="img-fluid mb-2" data-toggle="modal" data-target="#exampleModalCenter" style="max-height: 20rem; width:100%; object-fit: cover" alt="">  
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Display Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body text-center">
                              <img src="{{ $menu->image }}" class="img-fluid" style="max-height: 80vh; width: auto;" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                    {{-- End Image Modal --}} 
                    @endif
                    
                    <form action="{{ route('menu.update',$menu->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $menu->name }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">{{ __('Price (Rs.)') }}</label>
                                    <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                                        name="price" value="{{ $menu->price }}" required autocomplete="price" autofocus min="0">
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="venue">Venue</label>
                                    <select id="venue" name="venue_id" class="form-control @error('venue_id') is-invalid @enderror"
                                        required>
                                        @foreach ($venues as $venue)
                                            <option value="{{ $venue->id }}" {{ $menu->venue_id==$venue->id?'selected':'' }}>
                                                {{ $venue->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('venue_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select id="category" name="category_id"
                                        class="form-control @error('category_id') is-invalid @enderror" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $menu->category_id==$category->id?'selected':'' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        

                        

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image" type="file" name="image" class="form-control" accept="image/*">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" rows="5">  {{ $menu->description }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary float-right">
                            Update
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
