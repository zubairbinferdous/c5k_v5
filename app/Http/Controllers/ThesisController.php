<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ThesisController extends Controller
{
 

    // Show all books
    public function index()
    {
        $thesis = DB::table('thesis_list')->get();

        return view('thisis.thisisList', [
            'thesis' => $thesis,
        ]);
    }

    // Show books by category
    public function category($id)
    {
        $thesis = DB::table('thesis_list')->where('category_id', $id)->get();

        return view('thisis.thisisList', [
            'thesis' => $thesis,
        ]);
    }
  public function details($id)
{
    $thesis = DB::table('thesis_list')
        ->join('thesis_category', 'thesis_list.category_id', '=', 'thesis_category.id')
        ->select('thesis_list.*', 'thesis_category.name as category_name') 
        ->where('thesis_list.id', $id)
        ->first();
        
         $chapters = DB::table('thesis_chpater')
        ->where('thesis_id', $id)
        ->get();
        $forntMatter = DB::table('thesis_front_matter')
        ->where('thesis_id', $id)
        ->get();

    if (!$thesis) {
        abort(404, 'Thesis not found');
    }

    return view('thisis.thesis-details', [
        'thesis' => $thesis,
        'chapters'=>$chapters,
        'forntMatter'=>$forntMatter

    ]);
}

}
?>
