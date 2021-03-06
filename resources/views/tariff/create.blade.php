<div class="fixed-overlay">
    <div class="modal" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal form-label-left"
                      method="POST"
                      action="{{route('tariff.store')}}">
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
                                <label class="control-label">Name</label>
                                <input type="text"  class="form-control form-control-line"  name="name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Price, $</label>
                                <input type="number" class="form-control form-control-line" name="price" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">Start date</label>
                                <input type="number" class="form-control form-control-line" name="start_period" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="control-label">End date</label>
                                <input type="number" class="form-control form-control-line"  name="end_period" required>
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
{{--@include('tariff.createscript')--}}