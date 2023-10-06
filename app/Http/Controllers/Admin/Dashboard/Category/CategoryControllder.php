<?php

namespace App\Http\Controllers\Admin\Dashboard\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryControllder extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $categories = Categories::all();

    //     return view('dashboard.category.index', compact('categories'));
    // }

    public function index()
    {
        $categories = Categories::orderBy('id', 'asc')->get(); // Sắp xếp theo trường 'id' tăng dần
        return view('dashboard.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.category.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories',
        ]);

        try {
            Categories::create([
                'name' => $request->input('name'),
            ]);

            return redirect()->route('dashboard.category.index')->with('success', 'Category created successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            // Trường hợp lỗi khi thêm bản ghi có trường "name" đã tồn tại
            $errorCode = $e->errorInfo[1];

            if ($errorCode === 1062) {
                // mã 1062 xuất hiện khi name trùng lặp
                return redirect()->back()->withErrors(['name' => 'Category name already exists.'])->withInput();
            }

            // Xử lý các trường hợp lỗi khác nếu cần
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while creating the category.']);
        }
    }


    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Categories::findOrFail($id);
        return view('dashboard.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|unique:categories,name,' . $id,
        ]);

        try {
            // Lấy category cần cập nhật dựa trên $id
            $category = Categories::findOrFail($id);

            // Cập nhật thông tin category từ dữ liệu form
            $category->update([
                'name' => $request->input('name'),
            ]);

            return redirect()->route('dashboard.category.index')->with('success', 'Category updated successfully.');
        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode === 1062) {
                return redirect()->back()->withErrors(['name' => 'Category name already exists.'])->withInput();
            }
            return redirect()->back()->withInput()->withErrors(['error' => 'An error occurred while updating the category.']);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
