@extends('layouts.app')

@section('content')

<section id="news-section">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <h2>Latest</h2>
            <article class="news-main">

            </article>
            <?php foreach($articles as $article): ?>
              <article class="news-item">
                <img src="<?= $article->image_path; ?>" alt="<?= $article->title; ?>" class="news-item--image">
                <div class="news-item--details">
                  <h3><a href="<?= route('news.show', ['id' => $article->id, 'slug' => $article->slug]); ?>"><?= $article->title; ?></a></h3>
                  <span>By <a href="<?= route('authors.profile', ['id' => $article->user->name]); ?>"><?= $article->user->name; ?></a></span>
                </div>
              </article>
            <?php endforeach; ?>
            <?= $articles->links() ?>
          </div>
          <div class="col-md-4">
            <h2>Hot News</h2>
            <ul class="popular-news-list">
              <li>
                <h4><a href="#">Title</a></h4>
                <span>By <a href="#">Author Name</a></span>
                <span>34 Views 12 Comments</span>
              </li>
              <li>
                <h4><a href="#">Title</a></h4>
                <span>By <a href="#">Author Name</a></span>
                <span>34 Views 12 Comments</span>
              </li>
            </ul>
          </div>
      </div>
  </div>
</section>

@endsection
