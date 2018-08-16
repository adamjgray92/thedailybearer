@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <?php foreach($articles as $article): ?>
            <a href="<?php echo route('news.show', ['id' => $article->id, 'slug' => $article->slug]); ?>"><?= $article->title; ?></a><br>
          <?php endforeach; ?>
        </div>
    </div>
</div>
@endsection
