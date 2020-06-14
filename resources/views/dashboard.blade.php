@extends('layouts.master')

@section('content')

<section class = "row new-post">
    <div class="col-md-6 col-md-offset-3">
        <header><h2>Write a new post...</h2></header>
        <form action="">
            <div class="form-group">
                <textarea class="form-control" name="new-post" id="new-post" rows="5" placeholder="Type here"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>
</section>
<section class="row posts">
    <div class="col-md-6 col-md-offset-3">
        <header><h3>Other posts:</h3></header>
        <article class="post">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente minima rerum nesciunt ipsam ex dolor.</p>
        <div class="info">
            Posted by JKJ on 10th Jun 2020
        </div>
        <div class="interaction">
        <a href="">Like</a>
        <a href="">Dislike</a>
        <a href="">Edit</a>
        </div>
        </article>
        <article class="post">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente minima rerum nesciunt ipsam ex dolor.</p>
        <div class="info">
            Posted by JKJ on 10th Jun 2020
        </div>
        <div class="interaction">
        <a href="">Like</a>
        <a href="">Dislike</a>
        <a href="">Edit</a>
        </div>
        </article>
    </div>
    
</section>

@endsection