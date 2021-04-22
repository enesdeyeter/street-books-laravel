<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Kitaplar';
        $allBooks = Book::orderBy('created_at','desc')->paginate(18);

        //dd($allBooks);

        return view("pages.books.index", compact("page_title", "allBooks"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Kitap Ekle';
        $page_description = 'Hızlıca profiline göz at';

        $allCategory = Category::all();

        return view('pages.books.create', compact('page_title', 'page_description', 'allCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page_title = 'Kitaplar';
        $allBooks = Book::all()->sortByDesc("id");

        //dd($allBooks);

        //dd($request);
        $book = new Book;
        $faker = Faker::create();

        $book->book_name = $request->book_name;
        $book->author_name = $request->author_name;
        $book->description = $request->book_description;
        $book->publisher = $request->publisher;
        $book->category_id = $request->category_id;
        $book->isbn = $request->isbn_number;
        $book->pages = $request->page_number;
        $book->slug = Str::slug($request->book_name);

        if ($request->file('book_image')) {
            $imageName = Str::slug($request->book_name) . '-' . $faker->biasedNumberBetween('1', '9999999999999', 'sqrt') . '.' . $request->book_image->getClientOriginalExtension();
            $request->book_image->move(public_path('uploads/book_image'), $imageName);
            $book->book_image = 'uploads/book_image/' . $imageName;
            $book->user_id = Auth::user()->id;

            $book->save();

            return redirect('/books/' . Str::slug($request->book_name));

        } else
            return 'kitap kapak fotoğrafını yüklerken bir sorun oldu';
        die();

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $check = Book::where('slug', $slug)->first();

        if ($check) {

            $base_book = DB::table("books")->where('slug', $slug)->first();

            //dd($base_book);
            $page_title = $base_book->book_name;
            $page_description = 'ISBN: ' . $base_book->isbn;


            return view("pages.books.detail", compact("page_title", "page_description", "base_book", "check"));
        } else {
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
