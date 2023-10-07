@extends('dashboard.layouts.master')


@section('title')
    <title>CreateUser</title>
@endsection

@section('content')


        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Create User</h1>
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
                            <a class="active" href="#">Create</a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
        <form class="form_create" method="POST" action="{{ route('dashboard.user.store') }}">
            @csrf
            <div class="form-group">
                <label for="username">UserName</label>
                <input type="text" name="username" id="username" class="form-control" required>
                <div class="notification-messenger"></div>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
                <div class="notification-messenger"></div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <div class="notification-messenger"></div>
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" name="role" id="role" class="form-control" required>
                <div class="notification-messenger"></div>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" id="status" class="form-control" required>
                <div class="notification-messenger"></div>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
                <div class="notification-messenger"></div>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="textarea" name="address" id="address" class="form-control" required>
                <div class="notification-messenger"></div>
            </div>

            <button type="submit" class="btn btn-primary">Add User</button>
        </form>
@endsection

