@foreach($lease as $l)
    <div class="fixed-overlay">
        <div class="modal fade" id="myModal{{$l['id']}}" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="editForm{{$l['id']}}"
                          class="form-horizontal form-label-left"
                          method="POST"
                            action="{{route('lease.update', ['lease' => $l['id']])}}">
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
                                    <label class="control-label" for="user{{$l['id']}}">Select user</label>
                                    <select class="form-control form-control-line" id="user{{$l['id']}}" name="user">
                                        @foreach($user as $u)
                                            @if($u == $l->$user)
                                                <option value="{{$u->id}}" selected>{{ $u->name }}</option>
                                            @else
                                                <option value="{{$u->id}}"> {{ $u->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="user{{$l['id']}}">Select tariff</label>
                                    <select class="form-control form-control-line" id="tariff{{$l['id']}}" name="tariff">
                                        @foreach($tariff as $u)
                                            @if($u == $l->$tariff)
                                                <option value="{{$u->id}}" selected>{{ $u->name }}</option>
                                            @else
                                                <option value="{{$u->id}}"> {{ $u->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="user{{$l['id']}}">Select computer</label>
                                    <select class="form-control form-control-line" id="computer{{$l['id']}}" name="computer">
                                        @foreach($computer as $u)
                                            @if($u == $l->$computer)
                                                <option value="{{$u->id}}" selected>{{ $u->id }}</option>
                                            @else
                                                <option value="{{$u->id}}"> {{ $u->id }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label" for="price_per_tonne-arrival{{$l['id']}}">Hours</label>
                                    <input type="number" min="0" step="0.01" value="{{ $l->hours }}" class="form-control form-control-line" id="price_per_tonne-arrival{{$l['id']}}" name="hours" required>
                                    <span class="text-danger">
                                        <strong id="price_per_tonne-error-arrival{{$l['id']}}"></strong>
                                    </span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success"  id="submit{{$l['id']}}" >Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{{--    @include('lease.editscript')--}}
@endforeach



