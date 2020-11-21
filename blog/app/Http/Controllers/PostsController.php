<?php

namespace App\Http\Controllers;

use App\Http\Requests\storePostsRequest;
use App\Http\Requests\updatePostsRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index(){
        //$posts = new Post();
        //return $posts->getPosts(); // wvdoma aqvs Post.php modeltan da abrunebs postebs

        //$posts = Post::all();
        //return $posts->first()->title; // daabrunebs pirvel posts //sataurs konkr

        //get Information from database
        $posts = Post::all();
        return view('posts')->with('postebi',$posts);
        //pass the information to view

    }


    public function show($id){
        // get posts with id of requested id

        $post = Post::findorfail($id); // findorfail edzebs posts shesabamisi id nomrit
        //return $post;

        return view('post')->with('posti',$post);
    }



    public function create(){
        return view('create');
    }



    public function save(storePostsRequest $request){  //requestit wvdoma gvaq create pormaze //da requestis magivrad unda cahvwerot storePostsRequest anu sadac gadagvaq

        request()->validate([            //arapers ro ar chavwert da save davachert erroris magivrad gvabrunebs sawyisze anu redirect
           // 'title'=> 'required|min:5|unique:posts', //unique:posts anu The title has already been taken.
            //'body'=>  'required',                    //aseve es shegvidzlia davakopirot da gadavitanot storePostsRequest-shi rulebshi
           // 'likes'=> 'required'
        ]);
        $post = new Post($request->all());

        $post ->save();

        return redirect()->back();

    }

    public function edit($postid){

        $post=Post::findOrFail($postid);
        return view('edit')->with('post',$post);

    }

    public function update(updatePostsRequest $request, $postid){

        $post=Post::findOrFail($postid);
        $post->update($request->all());
        return redirect()->back();

    }

    public function delete($id){

        $post=Post::findOrFail($id);
        $post->delete();
        return redirect()->back();

    }
    public function Uinfo(){
        $user=Auth::user();
        $user->posts;
        return view('user.my_posts')->with('my_info',$user);
    }





}
