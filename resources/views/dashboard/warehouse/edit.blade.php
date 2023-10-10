@extends('dashboard.layouts.master')


@section('title')
<title>Update Warehouse</title>
@endsection

@section('content')
<!-- Modal -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Warehouse</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a  href="#">Warehouse</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">edit</a>
                </li>
            </ul>
        </div>
    </div>

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
        <button style="border-radius: 20px; width: 24px; height: 24px; margin-left: 10px; border: none; background-color: var(--bs-danger); color: #fff;" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span sty aria-hidden="true">X</span>
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
            <button style="margin-top: 20px" type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>
@endsection
