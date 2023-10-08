@extends('dashboard.layouts.master')


@section('title')
<title>Update Warehouse</title>
@endsection

@section('content')
<!-- Modal -->

<div class="table-data">
    <div class="modal-header">
        <h5 class="modal-title" id="editQuantityModal{{ $warehouse->id }}Label">Edit Quantity</h5>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <form action="{{ route('dashboard.warehouse.update', $warehouse->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $warehouse->quantity }}">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>
@endsection