@extends('dashboard.layouts.master')


@section('title')
<title>DashboardCategory</title>
@endsection

@section('content')
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Categories</h1>
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
        <a class="status process" href="{{ route('dashboard.category.create')}}"><button class="Btn_create">Add Category</button></i></a>
    </div>
    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>List of Category</h3>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <div class="nocation">
                <h4>{{session('success')}}</h4>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($categories))
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a class="status completed" href="#">Show Product</a>
                            <a class="status process" href="{{ route('dashboard.category.edit', ['id' => $category->id]) }}">Edit</a>
                            <form method="POST" action="{{ route('dashboard.category.destroy', ['id' => $category->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="status process" style="background-color: red; border:none; margin-top:9px">Del</button>
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
<!-- MAIN -->
@endsection