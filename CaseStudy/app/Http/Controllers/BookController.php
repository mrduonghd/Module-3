<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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

        
        return view('books.list', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(! Gate::allows('crud-product')){
        //     abort(403);
        // }
        $categories = Category::all();
        $authors = Author::all();
        return view('books.create', compact('categories','authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->authorID = $request->author_id;
        $book->publicationYear = $request->pYear;
        $book->price = $request->price;
        $book->categoryID = $request->category_id;
        $book->description = $request->desc;
        

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $book->image = $path;
        }
        $book->save();

        return redirect()->route('books.index');
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
        $categories = Category::all();
        $authors = Author::all();
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book', 'categories','authors'));
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
        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->authorID = $request->author_id;
        $book->publicationYear = $request->pYear;
        $book->price = $request->price;
        $book->categoryID = $request->category_id;
        $book->description = $request->desc;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $book->image = $path;
        }
        $book->save();

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.index');
    }

    public function showAll(){
        $books = Book::all();
        return view('books.showAll', compact('books'));
    }

    public function detail($id){
        $book = Book::findOrFail($id);
        return view('books.showDetail',compact('book'));
    }
}
