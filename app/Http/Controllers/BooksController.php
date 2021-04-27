<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Intervention\Image\ImageManagerStatic as Image;

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

        $image = $request->file('book_image');

        //dd($request);
        $book = new Book;
        $faker = Faker::create();

        $r_title = Str::title($request->book_name);
        $new_title = Str::replaceArray('I', ['İ'], $r_title);

        $book->book_name = $new_title;
        $book->author_name = Str::title($request->author_name);
        $book->author_name_slug = Str::slug($request->author_name);
        $book->description = $request->book_description;
        $book->publisher = Str::title($request->publisher);
        $book->category_id = $request->category_id;
        $book->isbn = $request->isbn_number;
        $book->pages = $request->page_number;
        $book->slug = Str::slug($request->book_name);
        $book->first_edition_year = $request->first_edition_year;
        $book->user_id = Auth::user()->id;

        if ($request->file('book_image')) {
            $imageName = Str::slug($request->book_name) . '-' . $faker->biasedNumberBetween('1', '9999999999999', 'sqrt') . '.' . $image->extension();
            $book->book_image = 'uploads/book_image/' . $imageName;

            $filePath = public_path('/uploads/book_image/');

            $img = Image::make($image->path());

            $img->resize(400, 600, function ($const) {
                $const->aspectRatio();
            })->save($filePath.'/'.$imageName);

            //dd($img->filesize());

            //dd($book);
            $book->save();

            return redirect('/books/' . Str::slug($request->book_name))->with('success','teşekkürler! kitap başarıyla sisteme eklendi.');;

        } else
            return 'lütfen kitap kapak fotoğrafını yükleyiniz';
        die();

    }

    public function like(Request $request){
        $checkRating = DB::table("reviews")->where('book_id', $request->book_id)->where("author_id",Auth::user()->id)->count();

        if ($checkRating>=1){
            return back()->with('error','daha önce bu kitap için tercihte bulundunuz!');
        }

        else{
            $user = Auth::user();
            $post = Book::where('id', $request->book_id)->first();

            $rating = $post->rating([
                'book_id' => $post->id,
                'book_name' => $post->book_name,
                'rating' => 5,
                'recommend' => 'Yes',
                'approved' => true, // This is optional and defaults to false
            ], $user);

            return back()->with('success','teşekkürler! bu kitap için bir tavsiyede bulundunuz.');
        }
    }

    public function dislike(Request $request){
        $checkRating = DB::table("reviews")->where('book_id', $request->book_id)->where("author_id",Auth::user()->id)->count();

        if ($checkRating>=1){
            return back()->with('error','daha önce bu kitap için tercihte bulundunuz!');
        }

        $user = Auth::user();
        $post = Book::where('id', $request->book_id)->first();

        $rating = $post->rating([
            'book_id' => $post->id,
            'book_name' => $post->book_name,
            'rating' => 1,
            'recommend' => 'Yes',
            'approved' => true, // This is optional and defaults to false
        ], $user);

        return back()->with('success','teşekkürler! bu kitap için bir tavsiyede bulundunuz.');
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

            $like = DB::table("reviews")->where('book_id', $check->id)->where("rating",'=',5)->count();
            $dislike = DB::table("reviews")->where('book_id', $check->id)->where("rating",'=',1)->count();

            //dd($base_book);
            $page_title = $base_book->book_name;
            $page_description = 'ISBN: ' . $base_book->isbn;


            return view("pages.books.detail",compact("page_title","page_description","base_book","check","like","dislike"));
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
