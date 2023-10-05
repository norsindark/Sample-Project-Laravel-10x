@extends('dashboard.layouts.master')


@section('title')
    <title>DashboardUser</title>
@endsection

@section('content')
    {{--<section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <!-- <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label> -->
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="https://www.pngmart.com/files/22/User-Avatar-Profile-PNG-Isolated-Transparent.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
						<h3>1020</h3>
						<p>New Order</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
                </li>
            </ul>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>User List</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th style="padding-right: 12px;">ID</th>
                            <th>Name</th>
                            <th style="display: flex; justify-content:center;">Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
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
                                    @endif

                                    <td>
                                        <a class="status process" href="{{ route('dashboard.user.edit', ['id' => $user->id]) }}">Edit</a>

                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('dashboard.user.destroy', ['id' => $user->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <form method="POST" action="{{ route('dashboard.user.destroy', ['id' => $user->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="status dagger" style="background-color: red; border:none;" type="submit" class="btn btn-danger" onclick="confirmDelete('{{ route('dashboard.user.destroy', ['id' => $user->id]) }}')">Xóa</button>
                                                </form>
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

                        </tbody>
                    </table>
                </div>
                <div class="user">
                    <div class="head">
                        <h3>Users</h3>
                        <a class="status process" href="{{ route('dashboard.user.create')}}"><i class='bx bx-plus'></i></a>
                        <i class='bx bx-filter'></i>
                    </div>
                    <ul class="user-list">
                        @if(!empty($users))
                            @foreach ($users as $user)
                                <li class="completed">
                                    <p>{{ $user->username }}</p>
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </li>
                            @endforeach
                        @else {
                        <td>{{ $nocation }}</td>
                        }
                        @endif
                    </ul>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>--}}
    <main>
        <div class="head-title">
            <div class="left">
                <h1>User</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right' ></i></li>
                    <li>
                        <a class="active" href="#">User</a>
                    </li>
                </ul>
            </div>

        </div>



        <div class="Wrap-create">
            <button class="Btn_create">Add User</button>
        </div>
        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>List of Users</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Date Order</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>

                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status process">Process</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>
                    <tr>
                        <td>
                            <img src="img/people.png">
                            <p>John Doe</p>
                        </td>
                        <td>01-10-2021</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>
@endsection
<!-- <script>
	function confirmDelete(deleteUrl) {
		if (confirm('Bạn có chắc chắn muốn xóa người dùng này không?')) {

			// Nếu người dùng xác nhận xóa, thực hiện yêu cầu DELETE
			var form = document.createElement('form');
			form.method = 'POST';
			form.action = deleteUrl;

			var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
			var methodInput = document.createElement('input');
			methodInput.name = '_method';
			methodInput.value = 'DELETE';

			var csrfTokenInput = document.createElement('input');
			csrfTokenInput.name = '_token';
			csrfTokenInput.value = csrfToken;

			form.appendChild(methodInput);
			form.appendChild(csrfTokenInput);

			document.body.appendChild(form);
			form.submit();
		} else {
			// Hủy xóa, chuyển hướng đến trang dashboard.index
			window.location.href = "{{--{{ route('dashboard.index') }}--}}";
		}
	}

