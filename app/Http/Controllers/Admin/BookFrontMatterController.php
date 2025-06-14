<?php

namespace App\Http\Controllers\Admin;

use App\BookList;
use App\BookFrontMatter;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookFrontMatterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = BookFrontMatter::leftJoin('book_list', 'book_list.id', '=', 'books_front_matter.book_id')
        ->select('books_front_matter.*', 'book_list.name as book_name')
        ->get();
        return view('admin.books.books_front_matter.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookLists = BookList::get();
        return view('admin.books.books_front_matter.create', compact('bookLists'));
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
            'pdf_url' => 'required|file|mimes:pdf|max:51200', // 51200 KB = 50 MB
            'book_id' => 'required|numeric', 
            'front_matter' => 'required|max:120', 
            'pages_range' => 'required|max:120', 
        ]);

        DB::beginTransaction();
        try {  
            $bookFrontMatter                  = new BookFrontMatter();
            $bookFrontMatter->book_id         = $request->book_id;
            $bookFrontMatter->front_matter    = $request->front_matter;
            $bookFrontMatter->pages_range     = $request->pages_range;

            if ($request->hasFile('pdf_url')) {
                $pdf = $request->file('pdf_url');
            
                if ($pdf->isValid()) {
                    $pdfName = time() . '_' . uniqid() . '.' . $pdf->getClientOriginalExtension();
                    $pdfPath = 'public/admin/books/';
            
                    // Log for debugging
                    logger("Saving to: " . $pdfPath . $pdfName);
            
                    $pdf->move($pdfPath, $pdfName); 
                    $bookFrontMatter->pdf_url = $pdfName;
                } else {
                    logger("Invalid PDF file.");
                    throw new \Exception("Uploaded file is not valid.");
                }
            } else {
                logger("No file found in request.");
                throw new \Exception("No file uploaded.");
            }
            
            $bookFrontMatter->created_at = now();
            $bookFrontMatter->updated_at = now();
            
            // dd($bookFrontMatter);
            $bookFrontMatter->save();
    
            DB::commit();
    
            Toastr::success('Book Front Matter created successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('book.front-matter.index');
    
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
        // dd("Kaj korwe", $id);
        $bookLists = BookList::get();
        $bookFrontMatter = BookFrontMatter::findOrFail($id);
        // dd($bookFrontMatter);
        return view('admin.books.books_front_matter.edit', compact('bookFrontMatter', 'bookLists'));
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
            'pdf_url' => 'mimes:pdf|max:51200', // 51200 KB = 50 MB
            'book_id' => 'required|numeric', 
            'front_matter' => 'required|max:120|unique:books_front_matter,front_matter,' . $id, 
            'pages_range' => 'required|max:120|unique:books_front_matter,pages_range,' . $id, 
        ]);

        DB::beginTransaction();
        try {  
            $bookFrontMatter                  = BookFrontMatter::findOrFail($id);
            $bookFrontMatter->book_id         = $request->book_id;
            $bookFrontMatter->front_matter    = $request->front_matter;
            $bookFrontMatter->pages_range     = $request->pages_range;

            if ($request->hasFile('pdf_url')) {
                $pdf = $request->file('pdf_url');
            
                if ($pdf->isValid()) {
                    $pdfName = time() . '_' . uniqid() . '.' . $pdf->getClientOriginalExtension();

                    if( !empty($bookFrontMatter->pdf_url) && file_exists($bookFrontMatter->pdf_url)) {
                        @unlink($bookFrontMatter->pdf_url); 
                    }

                    $pdfPath = 'public/admin/books/';
            
                    // Log for debugging
                    logger("Saving to: " . $pdfPath . $pdfName);
            
                    $pdf->move($pdfPath, $pdfName); 
                    $bookFrontMatter->pdf_url = $pdfName;
                } else {
                    logger("Invalid PDF file.");
                    throw new \Exception("Uploaded file is not valid.");
                }
            }
            
            $bookFrontMatter->updated_at = now();
            
            // dd($bookFrontMatter);
            $bookFrontMatter->update();
    
            DB::commit();
    
            Toastr::success('Book Front Matter updated successfully!', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('book.front-matter.index');
    
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
            $bookFrontMatter = BookFrontMatter::findOrFail($id);

            if ( !empty($bookFrontMatter->pdf_url) && file_exists($bookFrontMatter->pdf_url))  {
                @unlink($bookFrontMatter->pdf_url); 
            }

            $bookFrontMatter->delete();
    
            Toastr::success('Book Front Matter deleted successfully!', 'Success', ["positionClass" => "toast-top-right"]);
        } catch (\Exception $e) {
            Toastr::error('Something went wrong. Please try again.', 'Error', ["positionClass" => "toast-top-right"]);
        }
    
        return redirect()->back();

    }
}
