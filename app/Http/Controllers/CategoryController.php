<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Alert, Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required'
        ],
        [
            'name.required' => 'Nama Kategori Harus Di Isi',
            'description.required' => 'Deskripsi Kategori Harus Di Isi'

        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->name)
        ]);

        Alert::success('Data Kategori Berhasil Ditambahkan');
        return redirect()->route('category.index');
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required'
        ],
        [
            'name.required' => 'Nama Kategori Harus Di Isi',
            'description.required' => 'Deskripsi Kategori Harus Di Isi'
        ]);

        $category->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        Alert::success('Data Kategori Berhasil Diubah');
        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
