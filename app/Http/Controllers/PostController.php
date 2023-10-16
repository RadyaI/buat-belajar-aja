<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;
use App\Models\post;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(!Auth::check()){
            return redirect('/');
        }

        $postingan = post::where('active', true)->get();
        $view_data = [
            'postingan' => $postingan,
        ];

        return view('posts.index', $view_data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::check()){
            return redirect('/');
        }

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Auth::check()){
            return redirect('/');
        }

        $title = $request -> input('title');
        $content = $request -> input('blog');
        $date = Carbon::now();

            post::insert([
            'title' => $title,
            'blog' => $content,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]); 

        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!Auth::check()){
            return redirect('login');
        }

       
       $postingan = post::where('id','=',$id)
                    ->first(); //Harus pake first ya klo gk nanti error
                    //First = mendapat data yang paling pertama 

        $comment = $postingan->comment()->get();
        $total_komen = $postingan->totalKomen();

        $view_data = [
            'post' => $postingan,
            'comment' => $comment,
            'total_comment' => $total_komen
            
        ];
        return view('posts.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Auth::check()){
            return redirect('/');
        }

                $postingan = post::where('id','=',$id)
                ->first();
                //First = mendapat data yang paling pertama 

            $view_data = [
            'post' => $postingan
            ];

            return view('posts.edit',$view_data);
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
        if(!Auth::check()){
            return redirect('/');
        }

        $title = $request->input('title');
        $blog = $request->input('blog');

         $update = post::where('id','=',$id)
        ->update([
            'title' => $title,
            'blog' => $blog,
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect("posts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Auth::check()){
            return redirect('/');
        }

       post::where('id','=',$id)
       ->delete();

       return redirect('posts');
    }
}
