@extends('admin.index')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">IMAGE</th>
            <th scope="col">RESUME</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">ACTIONS</th>
        </tr>
        </thead>
        <tbody>
        @foreach($myimgs as $myimg)
            <tr>
                <th scope="row">{{$myimg->id}}</th>
                <td>{{$myimg->image}}</td>
                <td>{{$myimg->resume}}</td>
                <td>{{$myimg->description}}</td>
                <td>
                    <form method="post" action="/imuzaffariadmin/action/myimg">
                        @csrf
                        <input type="hidden" name="myimg_id" value="{{$myimg->id}}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Project image</th>
            <th scope="col">Project link</th>
            <th scope="col">Project name</th>
            <th scope="col">ACTIONS</th>
        </tr>
        </thead>
        <tbody>
        @foreach($portfolios as $portfolio)
            <tr>
                <th scope="row">{{$portfolio->id}}</th>
                <td>{{$portfolio->project_image}}</td>
                <td>{{$portfolio->project_link}}</td>
                <td>{{$portfolio->project_name}}</td>
                <td>
                    <form method="post" action="/imuzaffariadmin/action/portfolio">
                        @csrf
                        <input type="hidden" name="project_id" value="{{$portfolio->id}}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Blog image</th>
            <th scope="col">Blog header</th>
            <th scope="col">Blog description</th>
            <th scope="col">Blog link</th>
            <th scope="col">ACTIONS</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <th scope="row">{{$blog->id}}</th>
                <td>{{$blog->image}}</td>
                <td>{{$blog->header}}</td>
                <td>{{$blog->description}}</td>
                <td>{{$blog->link}}</td>
                <td>
                    <form method="post" action="/imuzaffariadmin/action/blog">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{$blog->id}}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Timeline duration</th>
            <th scope="col">Timeline positon</th>
            <th scope="col">Timeline company</th>
            <th scope="col">Timeline description</th>
            <th scope="col">ACTIONS</th>
        </tr>
        </thead>
        <tbody>
        @foreach($timelines as $timeline)
            <tr>
                <th scope="row">{{$timeline->id}}</th>
                <td>{{$timeline->duration}}</td>
                <td>{{$timeline->position}}</td>
                <td>{{$timeline->company}}</td>
                <td>{{$timeline->description}}</td>
                <td>
                    <form method="post" action="/imuzaffariadmin/action/timeline">
                        @csrf
                        <input type="hidden" name="timeline_id" value="{{$timeline->id}}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
