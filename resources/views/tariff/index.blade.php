@extends('layouts.master')

@section('content')
    @include("tariff.create")
    @include("tariff.edit")

    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between">
                <h4 class="card-title">Tariff Table</h4>
                <button type="button" class="btn btn-warning add-new" data-toggle="modal" data-target="#myModal" title="Create"><i class="fa fa-plus" ></i> Add New</button>
            </div>
            <div class="table-responsive m-t-40">
                <table id="example23" class="table table-bordered display table-hover" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Name</th>
                        <th>Price, $</th>
                        <th>Start time</th>
                        <th>End time</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>№</th>
                        <th>Name</th>
                        <th>Price, $</th>
                        <th>Start time</th>
                        <th>End time</th>
                        <th>Actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($tariff as $index => $t)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $t->name }}</td>
                            <td>{{ $t->price }}</td>
                            <td>{{ $t->start_period }}</td>
                            <td>{{ $t->end_period }}</td>
                            <td>
                                <div class="row sweetalert justify-content-center">
                                    <div>
                                        <button id="edit-supplier{{$t['id']}}" data-toggle="modal" data-target="#myModal{{$t->id}}" title="Edit" type="button" style="border: 0; background:0">
                                            <span class="material-icons">&#xe8ff;</span>
                                        </button>
                                    </div>
                                    <div>
                                        <button id="delete-supplier" onclick = "deleteSupplier({{ $t->id }})" title="Delete" data-toggle="tooltip" type="button" style="border: 0; background:0">
                                            <span class="material-icons">&#xe92b;</span>
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
        function deleteSupplier(supplierId) {
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
                    url: "/tariff/" + supplierId + "/delete",
                    method: "POST",
                    data: {
                        id: supplierId,
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