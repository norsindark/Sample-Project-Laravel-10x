@extends('dashboard.layouts.master')

@section('title')
<title>Edit User</title>
@endsection

@section('content')
<main>
    <div class="head-title">
        <div class="left">
            <h1>Edit User</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a  href="#">User</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Edit User</a>
                </li>
            </ul>
        </div>
    </div>
        <form class="form-edit" method="POST" action="{{ route('dashboard.user.update', ['id' => $user->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input  class="form-control" type="password" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input  class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input  class="form-control" type="email" id="email" name="email" value="{{ $user->email }}" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select  class="form-control" id="role" name="role">
                    <option value="1" @if($user->role == 1) selected @endif>Admin</option>
                    <option value="2" @if($user->role == 2) selected @endif>User</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select  class="form-control" id="status" name="status">
                    <option value="1" @if($user->status == 1) selected @endif>Activated</option>
                    <option value="2" @if($user->status == 2) selected @endif>Not Activated</option>
                    <option value="3" @if($user->status == 3) selected @endif>Banned</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea  class="form-control" id="address" name="address">{{ $user->address }}</textarea>
            </div>
            <button type="submit" class="Btn_update btn btn-primary">Update</button>
        </form>
</main>
@endsection
