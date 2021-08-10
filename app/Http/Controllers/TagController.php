<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Tag;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $tag;

     public function __construct(Tag $tag)
     {
         $this->tag = $tag;
     }
    public function index()
    {
        //
        $tags = Tag::latest()->paginate(10);
        return view('admin.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.tags.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        //
        Tag::create([
            'name' => $request->name,
            'tag_content' => $request->tag_content
        ]);

        return redirect()->route('tags.index');
        
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
        //
        $tag = Tag::find($id);
        return view('admin.tags.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        //
        $tag = Tag::find($id);
        $tag->update([
            'name' => $request->name,
            'tag_content' => $request->tag_content
        ]);

        return redirect()->route('tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     use DeleteModelTrait;
    public function destroy($id)
    {
        // 
        $postTags = $this->tag->find($id)->post_tags();

        $postTags->delete();

        return $this->deleteModelTrait($id,$this->tag);
    }
}
