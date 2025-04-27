<?php

namespace App\Http\Controllers\Admin;

use App\BookList;
use App\BooksCategory;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = BookList::leftJoin('books_category', 'book_list.category_id', '=', 'books_category.id')
            ->select('book_list.*', 'books_category.name as book_cat')
            ->get();
        return view('admin.books.books_list.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book_cats = BooksCategory::where('status', 1)->get();
        return view('admin.books.books_list.create', compact('book_cats'));
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
            'book_img'        => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096', // max 4MB
            'name'            => 'required|string|max:255|unique:book_list,name',
            'category_id'     => 'required|integer', 
            'price'           => 'required|numeric|min:0',
            'hard_cover'      => 'required|numeric|min:0',
            'paper_book'      => 'required|numeric|min:0',
            'online_isbn'     => 'required|string|max:255',
            'first_isbn'      => 'required|string|max:255',
            'doi'             => 'required|string|max:255',
            'type'            => 'nullable|string|max:255',
            'items_weight'    => 'required|string|max:255',
            'dimention'       => 'required|string|max:255',
            'copyright'       => 'required|string|max:255',
            'status'          => 'required|in:0,1',
            'published_date'  => 'required|date',
            'authors'         => 'required|string|max:255',
            'description'     => 'required|min:10',
        ]);

        DB::beginTransaction();
        try {  
            $bookList                  = new BookList();

            $bookList->name            = $request->name;
            $bookList->category_id     = $request->category_id;
            $bookList->price           = $request->price;
            $bookList->hard_cover      = $request->hard_cover;
            $bookList->paper_book      = $request->paper_book;
            $bookList->online_isbn     = $request->online_isbn;
            $bookList->first_isbn      = $request->first_isbn;
            $bookList->doi             = $request->doi;
            $bookList->type            = $request->type;
            $bookList->items_weight    = $request->items_weight;
            $bookList->dimention       = $request->dimention;
            $bookList->copyright       = $request->copyright;
            $bookList->status          = $request->status;
            $bookList->published_date  = $request->published_date;
            $bookList->authors         = $request->authors;
            $bookList->description     = $request->description;
            
            // Handle file upload (book image)
            if ($request->hasFile('book_img')) {
                $image       = $request->file('book_img');
                $imageName   = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $imagePath    = 'public/backend/books/';
                $image->move($imagePath, $imageName);
                $bookList->book_img = $imagePath . $imageName;
            }
            
            $bookList->created_at = now();
            $bookList->updated_at = now();
            
            // dd($bookList);
            $bookList->save();
    
            DB::commit();
    
            Toastr::success('Books created successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('book.list.index');
    
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
        $book_cats = BooksCategory::where('status', 1)->get();
        $bookList = BookList::findOrFail($id);
        // dd($bookList);
        return view('admin.books.books_list.edit', compact('book_cats', 'bookList'));
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
        //  dd($request->all());
         
        $request->validate([
            'book_img'        => 'nullable|image|mimes:jpeg,png,jpg,webp|max:4096', // max 4MB
            'name'            => 'required|string|max:255|unique:book_list,name,' . $id,
            'category_id'     => 'required|integer', 
            'price'           => 'required|numeric|min:0',
            'hard_cover'      => 'required|numeric|min:0',
            'paper_book'      => 'required|numeric|min:0',
            'online_isbn'     => 'required|string|max:255',
            'first_isbn'      => 'required|string|max:255',
            'doi'             => 'required|string|max:255',
            'type'            => 'nullable|string|max:255',
            'items_weight'    => 'required|string|max:255',
            'dimention'       => 'required|string|max:255',
            'copyright'       => 'required|string|max:255',
            'status'          => 'required|in:0,1',
            'published_date'  => 'required|date',
            'authors'         => 'required|string|max:255',
            'description'     => 'required|min:10',
        ]);

        DB::beginTransaction();
        try {  
            $bookList                  = BookList::findOrFail($id);

            $bookList->name            = $request->name;
            $bookList->category_id     = $request->category_id;
            $bookList->price           = $request->price;
            $bookList->hard_cover      = $request->hard_cover;
            $bookList->paper_book      = $request->paper_book;
            $bookList->online_isbn     = $request->online_isbn;
            $bookList->first_isbn      = $request->first_isbn;
            $bookList->doi             = $request->doi;
            $bookList->type            = $request->type;
            $bookList->items_weight    = $request->items_weight;
            $bookList->dimention       = $request->dimention;
            $bookList->copyright       = $request->copyright;
            $bookList->status          = $request->status;
            $bookList->published_date  = $request->published_date;
            $bookList->authors         = $request->authors;
            $bookList->description     = $request->description;
            
            // Handle file upload (book image)
            if ($request->hasFile('book_img')) {
                $image       = $request->file('book_img');

                if ( !empty($bookList->book_img) && file_exists($bookList->book_img))  {
                    @unlink($bookList->book_img); 
                }

                $imageName   = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $imagePath    = 'public/backend/books/';
                $image->move($imagePath, $imageName);
                $bookList->book_img = $imagePath . $imageName;
            }
            
            $bookList->created_at = now();
            $bookList->updated_at = now();
            
            // dd($bookList);
            $bookList->save();
    
            DB::commit();
    
            Toastr::success('Books Updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('book.list.index');
    
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
            $bookList = BookList::findOrFail($id);

            if ( !empty($bookList->book_img) && file_exists($bookList->book_img))  {
                @unlink($bookList->book_img); 
            }

            $bookList->delete();
    
            Toastr::success('Book deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        } catch (\Exception $e) {
            Toastr::error('Something went wrong. Please try again.', 'Error', ["positionClass" => "toast-top-right"]);
        }
    
        return redirect()->back();

    }
}
