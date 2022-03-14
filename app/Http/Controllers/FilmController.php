<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();
        return view('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Film $film)
    {
        $request->validate([
            "title"=>"required|string|max:80|unique:films",
            "description"=>"required|string",
            "image"=>"nullable|url",
            "price"=>"numeric",
            "series"=>"required|string|max:80",
            "sale_date"=>"required|date",

            "type"=>[
                "required",
                Rule::in(['comic book','graphic novel'])
            ], 
        ]);
        // numeric|between:0,99.99 FLOAT
        $data = $request->all();

        $film = new Film();
        $film->title = $data["title"];
        $film->description = $data["description"];
        if(!empty($data["thumb"])){
            $film->thumb = $data["thumb"];
        }
        $film->price = $data["price"];
        $film->series = $data["series"];
        $film->sale_date = $data["sale_date"];
        $film->type = $data["type"];
        $film->save();

        //othersolutions: (check model)
        //(1)
        // $newProduct = new Product();
        // $newProduct->fill($data);
        // $newProduct->save();


        //(2)
        //$newProduct = Product::create($data);


        return redirect()->route('films.show', $film->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
       
        return view('films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        return view('films.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        $request->validate([
            "title"=>"required|string|max:80|unique:films,title,{$film->id}",
            "description"=>"required|string",
            "image"=>"nullable|url",
            "price"=>"numeric",
            "series"=>"required|string|max:80",
            "sale_date"=>"required|date",

            "type"=>[
                "required",
                Rule::in(['comic book','graphic novel'])
            ], 
        ]);
        $data = $request->all();

        $film = new Film();
        $film->title = $data["title"];
        $film->description = $data["description"];
        if(!empty($data["thumb"])){
            $film->thumb = $data["thumb"];
        }
        $film->price = $data["price"];
        $film->series = $data["series"];
        $film->sale_date = $data["sale_date"];
        $film->type = $data["type"];
        $film->save();

        return redirect()->route('films.show', $film->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();

        return redirect()->route('films.index');


    }
}
