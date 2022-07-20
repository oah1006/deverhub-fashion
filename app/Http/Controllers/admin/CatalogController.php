<?php

namespace App\Http\Controllers\admin;

use App\Models\Catalog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CatalogRequest;
use App\Http\Requests\Admin\UpdateCatalogRequest;



class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Catalog';

        $catalogOptions = Catalog::where('parent_id', null)->get();
        $catalogs = Catalog::query();

        if ($request->filled('keywords')) {
            $q = $request->keywords;
            $catalogs->where(function ($query) use ($q) {
                $query->where('title', 'like', '%'. $q . '%')
                    ->orWhere('parent_id', 'like', '%'. $q . '%');
            });
        }

        if ($request->filled('parent_id')) {
            $parent_id = $request->parent_id;
            $catalogs->where('parent_id', $parent_id);
        }

        $catalogs = $catalogs->paginate(6)->withQueryString();
        
        return view('admin.catalog.index', compact('title', 'catalogs', 'catalogOptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create catalog';
        $catalogOptions = Catalog::where('parent_id', null)->get();


        return view('admin.catalog.create', compact('title', 'catalogOptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatalogRequest $request)
    {
        $catalog = Catalog::create([
            'title' => $request->title,
            'parent_id' => $request->parent_id
        ]);

        $catalog->save();

        return redirect()->route('admin.catalogs.index')->with('msg', 'Add catalog successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $title = 'Detail Catalog';
        $catalog = Catalog::find($id);


        return view('admin.catalog.detail', compact('title', 'catalog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Update catalog";
        $catalog = Catalog::find($id);
        $catalogOptions = Catalog::where('parent_id', null)->get();


        return view('admin.catalog.edit', compact('title', 'catalog', 'catalogOptions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatalogRequest $request, $id)
    {
        $catalog = Catalog::find($id)->update([
            'title' => $request->title,
            'parent_id' => $request->parent_id
        ]);

        return back()->with('msg', 'Update catalog successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalog = Catalog::find($id);

        $catalog->delete();

        return redirect()->route('admin.catalogs.index')->with('msg', 'Delete catalog successfully!');
    }
}
