<?php

namespace App\Observers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryObserver
{
    /**
     * Handle the category "created" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function created(Category $category)
    {
        //
    }

    /**
     * Handle the category "updated" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        //
    }

        /**
     * Handle the category "deleted" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function deleting(Category $category)
    {
        try {
            DB::beginTransaction();
            // Post::delete($category->posts);

            foreach($category->posts as $post){
                $postToDel = new PostObserver();
                $postToDel->deleting($post);
            }
            $category->posts()->delete();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error("Lỗi : ".$exception->getMessage().".Line ".$exception->getLine());
        }
    }

    /**
     * Handle the category "deleted" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    /**
     * Handle the category "restored" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the category "force deleted" event.
     *
     * @param  \App\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }
}
