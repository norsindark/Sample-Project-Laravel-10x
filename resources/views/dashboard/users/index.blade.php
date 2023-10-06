@extends('dashboard.layouts.master')


@section('title')
<title>DashboardUser</title>
@endsection

@section('content')
<main>
    <div class="head-title">
        <div class="left">
            <h1>User</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">User</a>
                </li>
            </ul>
        </div>

    </div>



    <div class="Wrap-create">
        <a class="status process" href="{{ route('dashboard.user.create')}}"><button class="Btn_create">Add User</button></i></a>

    </div>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>List of Users</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>

            <div class="nocation">
                <h4>{{ session('success')}}</h2>
            </div>

            <table>
                <thead>
                    <tr>
                        <th style="padding-right: 12px;">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($users))
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->status == 1)
                        <td><span class="status completed">Activated</span></td>
                        @elseif ($user->status == 2)
                        <td><span class="status completed">Not Activated</span></td>
                        @elseif ($user->status == 3)
                        <td><span class="status completed">Banned</span></td>
                        @endif

                        <td>
                            <a class="status process" href="{{ route('dashboard.user.edit', ['id' => $user->id]) }}">Edit</a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('dashboard.user.destroy', ['id' => $user->id]) }}">
                                @csrf
                                @method('DELETE')
                        <td>
                            <button class="status dagger" style="background-color: red; border:none;" type="submit" class="btn btn-danger">Xóa</button>
                            <!-- <form method="POST" action="{{ route('dashboard.user.destroy', ['id' => $user->id]) }}">
                                @csrf
                                @method('DELETE')
                                 <button class="status dagger" style="background-color: red; border:none;" type="submit" class="btn btn-danger" onclick="confirmDelete('{{ route('dashboard.user.destroy', ['id' => $user->id]) }}')">Xóa</button>
                            </form> -->
                        </td>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    @else {
                    <td>{{ $nocation }}</td>
                    }
                    @endif
                </tbody>
            </table>
        </div>

    </div>
</main>
@endsection