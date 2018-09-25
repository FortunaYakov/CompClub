@foreach($typeComputer as $t)
    <div class="fixed-overlay">
        <div class="modal fade" id="myModal{{$t['id']}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editForm{{$t['id']}}"
                          class="form-horizontal form-label-left"
                          method="POST"
                          action="{{route('typeComputer.update', ['typeComputer' => $t['id']])}}">
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
                                    <label class="control-label" for="name{{$t['id']}}">Name</label>
                                    <input type="text" value="{{ $t->type_computer }}" class="form-control form-control-line" id="name{{$t['id']}}" name="type_computer" required>
                                    <span class="text-danger">
                                        <strong id="name-error{{$t['id']}}"></strong>
                                    </span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-warning"  id="submit{{$t['id']}}" >Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--@include('tariff.editscript')--}}
@endforeach



