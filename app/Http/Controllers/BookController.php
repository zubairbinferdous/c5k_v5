<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class bookController extends Controller
{
 

    // Show all books
    public function index()
    {
        $books = DB::table('book_list')->get();

        return view('books.bookList', [
            'books' => $books,
        ]);
    }

    // Show books by category
    public function category($id)
    {
        $books = DB::table('book_list')->where('category_id', $id)->get();

        return view('books.bookList', [
            'books' => $books,
        ]);
    }
  public function details($id)
{
    // Join 'book_list' with 'books_category' to get the category name based on the book's category_id
    $book = DB::table('book_list')
        ->join('books_category', 'book_list.category_id', '=', 'books_category.id')
        ->select('book_list.*', 'books_category.name as category_name') // select all book details and category name
        ->where('book_list.id', $id)
        ->first();

     $chapters = DB::table('chapters')
        ->where('book_id', $id)
        ->get();

        $forntMatter = DB::table('books_front_matter')
        ->where('book_id', $id)
        ->get();

    if (!$book) {
        abort(404, 'Book not found');
    }

    return view('books.bookDetails', [
        'book' => $book,
        'chapters' => $chapters,
        'forntMatter'=>$forntMatter
    ]);
}

}
?>