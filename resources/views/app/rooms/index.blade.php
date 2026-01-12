@extends('layouts.app')

@section('content')


<x-lodgr.headers.top-header title="Manage Rooms">

    <button type="button" class="btn btn-primary btn-sm px-14 py-6 radius-6 text-sm" data-bs-toggle="modal"
        data-bs-target="#newRoomModal">
        <i class="fi fi-sr-plus fs-9px"></i>
        Add Room</button>
</x-lodgr.headers.top-header>


<div class="card">
    <div class="card-body">

        <h6 class="fw-500 cal-sans mb-4">Rooms List</h6>

        <div class="table-responsive">
            <table class="table table-hover basic-table align-middle mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Room Name</th>
                        <th>Room Type</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Table rows would go here -->
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="newRoomModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">
                    Add Room
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="room_category_id" class="form-label">Room Category</label>
                            <select
                                class="form-select"
                                name="room_category_id"
                                id="room_category_id"
                            >
                                <option selected>Select one</option>
                                <option value="">New Delhi</option>
                                <option value="">Istanbul</option>
                                <option value="">Jakarta</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Room Number</label>
                            <input
                                type="text"
                                class="form-control"
                                name=""
                                id=""
                                placeholder="eg. GF001"
                            />
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="floor_number" class="form-label">Floor</label>
                            <select
                                class="form-select"
                                name="floor_number"
                                id="floor_number"
                            >
                                <option selected>Select one</option>
                                <option value="">New Delhi</option>
                                <option value="">Istanbul</option>
                                <option value="">Jakarta</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="room_status" class="form-label">Room Status</label>
                            <select
                                class="form-select"
                                name="room_status"
                                id="room_status"
                            >
                                <option selected>Select one</option>
                                <option value="">New Delhi</option>
                                <option value="">Istanbul</option>
                                <option value="">Jakarta</option>
                            </select>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">
                    <i class="fi fi-rr-check me-2"></i>
                    Add Room
                </button>
            </div>
        </div>
    </div>
</div>





@endsection
