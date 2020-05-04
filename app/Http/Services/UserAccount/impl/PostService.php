<?php


namespace App\Http\Services\UserAccount\impl;
use App\Http\Repository\UserAccount\eloquent\PostRepo;
use App\Http\Services\UserAccount\PostServiceInterface;
use App\Model\user\post;
use App\Model\user\tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostService implements PostServiceInterface
{

    protected $postRepo;


    public function __construct(PostRepo $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function getAll()
    {
        return $this->postRepo->getAll();
    }

    public function create($request)
    {

     $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $imageName = $request->image->store('public');
        }

        $post = new Post;
        $post->title = $request->title;
        $post->image = $imageName;
        $post->subtitle = $request->subtitle;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->status = $request->status;
        $post->user_id = Auth::user()->id;
        $this->postRepo->storeOrUpdate($post);
        $post->categories()->sync($request->categories);

        if ($post) {
            $tagNames = explode(',', $request->get('tags'));
            $tagIds = [];
            foreach ($tagNames as $tagName) {

                $tagInPost = tag::where('name', '=', $tagName);

                if ($tagInPost) {
                    $tag = new tag();
                    $tag->name = $tagName;
                    $tag->slug = Str::slug($tagName);
                    $tag->save();
                }

                $tagIds[] = $tag->id;

            }
            $post->tags()->sync($tagIds);
        }
    }

    public function update($request, $id)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
        ]);

        $post = post::with('tags', 'categories')->where('id', $id)->first();

        $image = $post->image;

        if ($request->hasFile('image')) {
            $image = $request->image->store('public');
        }

        $post = post::find($id);
        $post->title = $request->title;
        $post->image = $image;
        $post->subtitle = $request->subtitle;
        $post->slug = Str::slug($request->title);
        $post->body = $request->body;
        $post->status = $request->status;

        $post->categories()->sync($request->categories);
        $post->save();

        if ($post) {
            $tagNames = explode(',', $request->get('tags'));
            $tagIds = [];
            foreach ($tagNames as $tagName) {

                $tagInPost = tag::where('name', '=', $tagName);

                if ($tagInPost) {
                    $tag = new tag();
                    $tag->name = $tagName;
                    $tag->slug = Str::slug($tagName);
                    $tag->save();
                }

                $tagIds[] = $tag->id;

            }


            $post->tags()->sync($tagIds);


        }
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }
}


