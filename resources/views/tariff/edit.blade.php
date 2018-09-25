@foreach($tariff as $t)
    <div class="fixed-overlay">
        <div class="modal fade" id="myModal{{$t['id']}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editForm{{$t['id']}}"
                          class="form-horizontal form-label-left"
                          method="POST"
                          action="{{route('tariff.update', ['tariff' => $t['id']])}}">
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
                                    <input type="text" value="{{ $t->name }}" class="form-control form-control-line" id="name{{$t['id']}}" name="name" required>
                                    <span class="text-danger">
                                        <strong id="name-error{{$t['id']}}"></strong>
                                    </span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="credit{{$t['id']}}">Price, $</label>
                                    <input type="number" step="0.01" min="0" value="{{ $t->price }}" class="form-control form-control-line" id="credit{{$t['id']}}" name="price" required>
                                    <span class="text-danger">
                                        <strong id="credit-error{{$t['id']}}"></strong>
                                    </span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="prepayment{{$t['id']}}">Start date</label>
                                    <input type="number" step="0.01" min="0" value="{{ $t->start_period }}" class="form-control form-control-line" id="prepayment{{$t['id']}}" name="start_period" required>
                                    <span class="text-danger">
                                        <strong id="prepayment-error{{$t['id']}}"></strong>
                                    </span>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="email{{$t['id']}}">End date</label>
                                    <input type="number" value="{{ $t->end_period }}" class="form-control form-control-line" id="email{{$t['id']}}" name="end_period" required>
                                    <span class="text-danger">
                                        <strong id="email-error{{$t['id']}}"></strong>
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



