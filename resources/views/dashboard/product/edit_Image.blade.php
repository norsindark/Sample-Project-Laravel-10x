@extends('dashboard.layouts.master')

@section('title')
<title>Edit Category</title>
@endsection

@section('content')
<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Edit Product</h1>
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

    <!-- <div class="Wrap-create">
            <button class="Btn_create">Add Category</button>
        </div> -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="table-data">
        <div class="Edit-product">
            <h3>Edit Product</h3>

            <div class="form-group">
                <label for="Image">Update Image</label>
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <table>
                    <thead>
                        <tr>
                            <th>
                                @foreach ($product_images as $product_image)
                                @if ($product_image->ProductId == $product->ProductId)
                                <img src="{{ asset('storage/' . $product_image->path) }}" alt="Product Image" width="60">
                                @endif
                                @endforeach
                            </th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td style="    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 22px;">
                                @foreach ($product_images as $product_image)
                                @if ($product_image->ProductId == $product->ProductId)
                                <form method="POST" action="{{ route('dashboard.product.del_Image', ['id' => $product_image->id] )}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="status process" style="    background-color: red;
    border: none;
    border-radius: 20px;
    padding: 5px;
    color: #fff;
    margin-top: 12px;" onclick="return confirm('Are you sure you want to delete this image?')">Del</button>
                                </form>
                                @endif
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <form method="POST" action="{{ route('dashboard.product.update_Image', ['ProductId' => $product->ProductId]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Image">Add More Image</label>
                    <input type="file" id="Image" name="images[]" multiple accept="image/*">
                </div>
                <button type="submit" class="Btn_create">Update Image Product</button>
            </form>

        </div>
</main>
<!-- MAIN -->
<!-- <script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this category?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script> -->
@endsection
