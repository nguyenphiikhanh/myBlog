<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use stdClass;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        //
        $posts = Post::latest()->paginate(6);
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.add', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    use ImageUpload;
    public function store(PostRequest $request)
    {
        //
        try {
            DB::beginTransaction();
            $dataCreate = [
                'name' => $request->name,
                'user_id' => Auth::id(),
                'category_id' => $request->category_id,
                'content' => $request->content,
                'slug' => Str::slug($request->name),
            ];
            $imageUpload = $this->imageUpload($request, 'thumnail_image_path', "postImage");

            if (!empty($imageUpload)) {
                $dataCreate['thumnail_image_path'] = $imageUpload['file_path'];
            }
            $post = $this->post->create($dataCreate);

            $tags = $request->tags;

            $post->tags()->attach($tags);
            DB::commit();
            return redirect()->route('posts.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("message : ".$exception->getMessage()." Line : ".$exception->getLine());
        }
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
        $categories = Category::all();
        $tags = Tag::all();
        $post = Post::find($id);
        $post_tags = $post->tags;
        $post_category = $post->category;
        // dd($post_category->id);
        return view('admin.posts.edit',compact('categories','tags','post','post_tags','post_category'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
