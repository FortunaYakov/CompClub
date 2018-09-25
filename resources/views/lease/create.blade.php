<div class="fixed-overlay">
    <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal form-label-left"
                      method="POST"
                        action="{{route('lease.store')}}">
                    @csrf
                    <div class="form-group col-md-12">
                        <div class="modal-header row justified align-items-center">
                            <div><h3>Add Info</h3></div>
                            <div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" style="font-family:'Georgia'; font-size:26px; font-weight:bold;"  >&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="form-group col-md-12">
                                <label class="control-label">Select user</label>
                                <select class="form-control form-control-line" name="user">
                                    @foreach($user as $u)
                                            <option value="{{$u->id}}"> {{ $u->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" >Select tariff</label>
                                <select class="form-control form-control-line" name="tariff">
                                    @foreach($tariff as $u)
                                        <option value="{{$u->id}}">{{ $u->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label" >Select computer</label>
                                <select class="form-control form-control-line" name="computer">
                                    @foreach($computer as $u)
                                        <option value="{{$u->id}}"> {{ $u->id }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Hours</label>
                                <input type="number" class="form-control form-control-line" name="hours" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning" id="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--@include('lease.createscript')--}}