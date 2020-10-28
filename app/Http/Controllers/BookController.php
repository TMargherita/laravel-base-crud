<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $storeBook = $request->validate([
            'title' => "required|max:30",
            'author' => "required|max:50",
            'image' => "required",
            'genre' => "required|max:30",
            'pages' => "required|smallInteger",
            'edition' => "required|max:50",
            'year' => "required|date",
            'isbn' => "required|unique:books|max:13",
        ]);

        $book = Book::create($storeBook);

        return redirect()->route('books.show', $book);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id); // SELECT * FROM books WHERE id = $id;
        
        return view("show", compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('edit', compact('books'));
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
        $updateData= $request ->validate([
            'title' => "required|max:30",
            'author' => "required|max:50",
            'image' => "required",
            'genre' => "required|max:30",
            'pages' => "required|smallInteger",
            'edition' => "required|max:50",
            'year' => "required|date",
            'isbn' => "required|unique:books|max:13",
        ]);

        Book::whereId($id)->update($updateData);
        return redirect()->route('books.show', $book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);

        $book->delete();

        return redirect()->route("books.index");
    }
}
