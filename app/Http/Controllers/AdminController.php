<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::all();
        return view('adminBook', compact('data'));
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request , Book $book)
    {
        $book = Book::findOrFail($request->id);
        return view('update' , compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {

        $book = Book::findOrFail($request->id);
        $book->name = $request->name;
        $book->describe = $request->describe;
        $file = $request->file('book')->store('/public/books');
        $book->book_bath = $file;
        $book->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
            Book::findOrFail($book->id)->delete();
            return redirect()->back();
    }
}
