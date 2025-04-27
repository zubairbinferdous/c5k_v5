<?php

namespace App\Http\Controllers\Admin;

use App\BooksCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = BooksCategory::get();
        return view('admin.books.books_category.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255|unique:books_category,name',
            'status' => 'required|in:0,1', // assuming 0=inactive, 1=active
        ]);

        DB::beginTransaction();
        try {  
            $book_cat                 = new BooksCategory();
            $book_cat->name           = $request->name;
            $book_cat->status         = $request->status;
            $book_cat->created_at     = now();
            $book_cat->updated_at     = now();
            // dd($book_cat);
            $book_cat->save();
    
            DB::commit();
    
            Toastr::success('Book Category created successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('books.category.index');
    
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex);
            Toastr::error('Something went wrong. Please try again.', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
         // dd($request->all());
         $request->validate([
            'name' => 'required|string|max:255|unique:books_category,name,' . $id,
            'status' => 'required|in:0,1', // assuming 0=inactive, 1=active
        ]);

        DB::beginTransaction();
        try {  
            $book_cat                 = BooksCategory::findOrFail($id);
            $book_cat->name           = $request->name;
            $book_cat->status         = $request->status;
            $book_cat->updated_at     = now();
            // dd($book_cat);
            $book_cat->update();
    
            DB::commit();
    
            Toastr::success('Book Category Updated Successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('books.category.index');
    
        } catch (\Exception $ex) {
            DB::rollBack();
            dd($ex);
            Toastr::error('Something went wrong. Please try again.', 'Error', ["positionClass" => "toast-top-right"]);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $bookCategory = BooksCategory::findOrFail($id);
            $bookCategory->delete();
    
            Toastr::success('Book category deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        } catch (\Exception $e) {
            Toastr::error('Something went wrong. Please try again.', 'Error', ["positionClass" => "toast-top-right"]);
        }
    
        return redirect()->back();

    }
}
