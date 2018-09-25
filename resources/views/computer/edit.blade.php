@foreach($computer as $comp)
    <div class="fixed-overlay">
        <div class="modal fade" id="edit-arrival{{$comp['id']}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editForm{{$comp['id']}}"
                          class="form-horizontal form-label-left"
                          method="POST"
                          action="{{route('computer.update', ['computer' => $comp['id']])}}">
                        @csrf
                        <div class="form-group col-md-12">
                            <div class="modal-header row justified align-items-center">
                                <div><h3>Edit Info</h3></div>
                                <div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" style="font-family:'Georgia'; font-size:26px; font-weight:bold;"  >&times;</span>
                                    </button>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="product-arrival{{$comp['id']}}">Staff</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Product" tabindex="1" id="product-arrival{{$comp['id']}}" name="staff">
                                        @foreach($staff as $st)
                                            @if($st == $comp->staff)
                                                <option value="{{$st->id}}" selected>{{ $st->name }}</option>
                                            @else
                                                <option value="{{$st->id}}">{{ $st->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="supplier-arrival{{$comp['id']}}">Type</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Supplier" tabindex="1" id="supplier-arrival{{$comp['id']}}" name="type">
                                        @foreach($typeComputer as $t)
                                            @if($t == $comp->typecomputer)
                                                <option value="{{$t->id}}" selected>{{ $t->type_computer }}</option>
                                            @else <option value="{{$t->id}}">{{ $t->type_computer }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$comp['id']}}">Status</label>
                                    <input type="number" min="0" step="0.01" value="{{ $comp->status }}" class="form-control form-control-line" id="price_per_tonne-arrival{{$comp['id']}}" name="status" required>
                                    <span class="text-danger">
                                        <strong id="price_per_tonne-error-arrival{{$comp['id']}}"></strong>
                                    </span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="submit-edit-arrival{{$comp['id']}}">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--@include('computer.editscript')--}}
@endforeach
