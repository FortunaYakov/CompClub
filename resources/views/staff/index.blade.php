@extends('layouts.master')

@section('content')
    @include("staff.create")
    @include("staff.edit")
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between">
                <h4 class="card-title">Staff Table</h4>
                <button type="button" class="btn btn-warning add-new" data-toggle="modal" data-target="#myModal" title="Create"><i class="fa fa-plus" ></i> Add New</button>
            </div>
            <div class="table-responsive m-t-40">
                <table id="example23" class="table table-bordered display table-hover" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Name</th>
                        {{--<th>Date</th>--}}
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>№</th>
                        <th>Name</th>
                        {{--<th>Date</th>--}}
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($staff as $index => $st)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $st->name }}</td>
                            {{--<td>{{ $st->created_at->toDateString() }}</td>--}}
                            <td>
                                <div class="row sweetalert justify-content-center">
                                    <div>
                                        <button class="edit-departure" data-toggle="modal" data-target="#edit-departure{{$st['id']}}" title="Edit" style="border: 0; background:0">
                                            <span class="material-icons">&#xE254;</span>
                                        </button>
                                    </div>
                                    <div>
                                        <button class="delete-departure" onclick = "deleteDeparture({{ $st->id }})" title="Delete" data-toggle="tooltip" type="button" style="border: 0; background:0">
                                            <span class="material-icons">&#xE872;</span>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function deleteDeparture(departureId) {
            swal({
                title: "Are you sure to delete ?",
                text: "You will not be able to recover this imaginary file !!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it !!",
                closeOnConfirm: false
            }, function () {
                $.ajax({
                    url: "/staff/" + departureId + "/delete",
                    method: "POST",
                    data: {
                        id: departureId,
                        _token: '{{csrf_token()}}'
                    },
                    success: function(response) {
                        swal({
                            title: "Hey!",
                            text: response.success,
                            type: "success"
                        }, function () {
                            location.reload();
                        });
                    }, error: function(response){
                        swal("Oops", "We couldn't connect to the server!", response);
                    }
                })
            })
        }
    </script>

@endsection('content')