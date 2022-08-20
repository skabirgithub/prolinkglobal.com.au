@php
    $current = ["Program", "Event",];
    $new   = ["Service", "Skill"];
@endphp
@extends('layouts.frontend')
@section('title') {{str_replace($current, $new, $category)}} @endsection
@section('content')
@include('includes.banner',['programName'=>str_replace($current, $new, $category)])
<div id="content">

    <!-- WHO WE ARE -->
    <section class="team team-wrap padding-top-70 padding-bottom-20">
        <div class="container">

            <div class="text-center">
                <h4 class="primary-color">{{str_replace($current, $new, $category)}}</h4>
                <hr>
                <ul class="row items">
                    @foreach ($programs as $program)
                    <li class="col-md-4 item market">
                        <a href="{{$program->programUrl()}}" title="View Details">
                            <article class="text-left"> <img class="img-responsive"
                                    src="{{asset('program_images/'.$program->image)}}" alt="">
                                <h5>{{$program->title}}</h5>
                                <p>{!!Str::limit($program->details,100)!!}</p>
                            </article>
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>

            {{$programs->links()}}
        </div>
    </section>
</div>
@endsection
