<?php

namespace App\Http\Controllers\Admin\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CategoryService;

class CategoryController extends Controller
{

    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());
        $categories = $this->categoryService->getList($request->all(), 20);
        return view('admin.ecommerce.category.list', ['categories' => $categories]);
    }

    public function detail($id)
    {
        $category = $this->categoryService->detail($id);
        $parents = $this->categoryService->getParent($id);
        
        return view('admin.ecommerce.category.detail', ['category' => $category, 'parents' => $parents]);
    }

    function filter(Request $request)
    {
        $categories = $this->categoryService->search($request->all());
        return response()->json($categories);
    }

    function parent_id(Request $request)
    {
        $parents = $this->categoryService->getParent($request->all());
        return response()->json($parents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = $this->categoryService->getList('', 1000);
        return view('admin.ecommerce.category.create', ['parents' => $parents]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->categoryService->store($request->all());
        return redirect()->action([CategoryController::class, 'index'])->with('success', 'Thêm thành công');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = $this->categoryService->detail($id);
        $parents = $this->categoryService->getParent($id);
        
        return view('admin.ecommerce.category.detail', ['category' => $category, 'parents' => $parents]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->categoryService->update($request->all(), $id);
        return redirect()->action([CategoryController::class, 'index'])->with('success', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->categoryService->destroy($id);
        return redirect()->action([CategoryController::class, 'index'])->with('success', 'Xóa thành công');
    }
}
