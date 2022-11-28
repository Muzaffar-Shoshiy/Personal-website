<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Myimg;
use App\Models\Portfolio;
use App\Models\Timeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function welcome()
    {
        $myimg = DB::select('SELECT * FROM myimg ORDER BY id DESC LIMIT 1');
        $portfolios = DB::select('SELECT * FROM portfolio ORDER BY id DESC');
        $blogs = DB::select('SELECT * FROM blog ORDER BY id DESC');
        $timelines = DB::select('SELECT * FROM timeline');
        return view('welcome', [
            'myimg'=>$myimg,
            'portfolios'=>$portfolios,
            'blogs'=>$blogs,
            'timelines'=>$timelines
        ]);
    }

    public function index()
    {
        return view('admin.index');
    }
    public function action()
    {
        $myimgs = DB::select('SELECT * FROM myimg ORDER BY id DESC');
        $portfolios = DB::select('SELECT * FROM portfolio ORDER BY id DESC');
        $blogs = DB::select('SELECT * FROM blog ORDER BY id DESC');
        $timelines = DB::select('SELECT * FROM timeline');
        return view('admin.action', [
            'myimgs'=>$myimgs,
            'portfolios'=>$portfolios,
            'blogs'=>$blogs,
            'timelines'=>$timelines
        ]);
    }

    public function myimg()
    {
        return view('admin.myimg');
    }

    public function myimgpost(Request $req)
    {
        $reqData = $req->all();
        $fileName = time().$req->file('image')->getClientOriginalName();
        $fileName2 = time().$req->file('resume')->getClientOriginalName();
        $path = $req->file('image')->storeAs('images', $fileName, 'public');
        $path2 = $req->file('resume')->storeAs('images', $fileName2, 'public');
        $reqData['image'] = '/storage/'.$path;
        $reqData['resume'] = '/storage/'.$path2;
        Myimg::create($reqData);
        return redirect('/imuzaffariadmin');
    }

    public function portfolio()
    {
        return view('admin.portfolio');
    }

    public function portfoliopost(Request $req)
    {
        $reqData = $req->all();
        $fileName = time().$req->file('project_image')->getClientOriginalName();
        $path = $req->file('project_image')->storeAs('images', $fileName, 'public');
        $reqData['project_image'] = '/storage/'.$path;
        Portfolio::create($reqData);
        return redirect('/imuzaffariadmin');
    }

    public function blog()
    {
        return view('admin.blog');
    }

    public function blogpost(Request $req)
    {
        $reqData = $req->all();
        $fileName = time().$req->file('image')->getClientOriginalName();
        $path = $req->file('image')->storeAs('images', $fileName, 'public');
        $reqData['image'] = '/storage/'.$path;
        Blog::create($reqData);
        return redirect('/imuzaffariadmin');
    }

    public function timeline()
    {
        return view('admin.timeline');
    }

    public function timelinepost(Request $req)
    {
        $reqData = $req->all();
        Timeline::create($reqData);
        return redirect('/imuzaffariadmin');
    }

    public function deletemyimg(Request $req)
    {
        $id = $req->myimg_id;
        DB::table('myimg')->where('id', $id)->delete();
        return redirect('/imuzaffariadmin/action');
    }

    public function deleteportfolio(Request $req)
    {
        $id = $req->project_id;
        DB::table('portfolio')->where('id', $id)->delete();
        return redirect('/imuzaffariadmin/action');
    }

    public function deleteblog(Request $req)
    {
        $id = $req->blog_id;
        DB::table('blog')->where('id', $id)->delete();
        return redirect('/imuzaffariadmin/action');
    }

    public function deletetimeline(Request $req)
    {
        $id = $req->timeline_id;
        DB::table('timeline')->where('id', $id)->delete();
        return redirect('/imuzaffariadmin/action');
    }
}
