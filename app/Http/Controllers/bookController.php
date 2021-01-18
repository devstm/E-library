<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::all();
//        return $data;
        return view('index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.createBook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Book $book
     * @return array
     */
    public function store(Request $request, Book $book)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->describe = $request->describe;
        $file = $request->file('book')->store('/public/books');
        $book->book_bath = $file;
        $book->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Book $boook)
    {
        $book = Book::findOrFail($request->id);
        $fileName = $book->book_bath;
        return Storage::download($fileName);
//        return response()->download(public_path().'\books\9IjbXZNGrzaIFB7muGeg7LCG5ye54SRwXYZCNxlD.pptx');
    }

    public function info(Request $request, Book $boook)
    {
        $book = Book::findOrFail($request->id);
        return view('book.bookInfo', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }

    public function search(){
       $book = $_GET['search'];
       $data =  Book::where('name' ,'LIKE','%'.$book.'%')->get();
       return view('index',compact('data'));
    }

}
