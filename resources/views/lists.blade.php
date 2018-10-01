@extends('layout')
@section('content')

    <div class="page-title mt-4">
        <h1>{{$header_title}}</h1>
    </div>

    @foreach ($result as $row)

    <?php
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $row->content, $image);
        $image = $image['src'];
    ?>

    <!-- Title -->
    <h1 class="mt-4"><a href="{{url("article/$row->slug")}}" title="{{$row->title}}">{{$row->title}}</a></h1>

    <!-- Author -->
    <p class="lead">
        by {{$row->name_author}}
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Posted on {{date('M,d Y', strtotime($row->created_at))}} </p>

    <hr>

    <!-- Image -->
    @if ($image)
        <p><img src="{{$image}}" style="max-width: 100%" alt=""></p>
    @endif

    <!-- Post Content -->
    {{str_limit(strip_tags($row->content),200)}}

    <p><a href="{{url("article/$row->slug")}}" title="{{$row->title}}">Read More &raquo;</a></p>

    <hr>
    @endforeach

    @if (count($result)==0)
        <div class="alert alert-info">Sorry the article is not found!</div>
    @endif

    {!! $result->links() !!}

@endsection