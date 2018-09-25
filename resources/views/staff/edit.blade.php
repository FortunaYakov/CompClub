@foreach($staff as $st)
    <div class="fixed-overlay">
        <div class="modal fade" id="edit-departure{{$st['id']}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editForm{{$st['id']}}"
                          class="form-horizontal form-label-left"
                          method="POST"
                            action="{{route('staff.update', ['staff' => $st['id']])}}">
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
                                    <label class="control-label" for="price_per_tonne-departure{{$st['id']}}">Name</label>
                                    <input value="{{ $st->name }}" class="form-control form-control-line" id="price_per_tonne-departure{{$st['id']}}" name="name" required>
                                    <span class="text-danger">
                                        <strong id="price_per_tonne-error-departure{{$st['id']}}"></strong>
                                    </span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning" id="submit-edit-departure{{$st['id']}}">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--@include('staff.editscript')--}}
@endforeach
