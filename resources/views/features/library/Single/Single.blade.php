<div class="Container Container--lg  Library">
  <div class="Library-content">
    <article class="Single">
      <header class="Single-header">
        <h1 class="Single-title">
          {{ $title }}
        </h1>
        <div class="Single-meta">
          <p class="Single-byLine">
            By <a href="{{ $author->link }}" rel="author" class="Single-author">{{ $author->name }}</a>
          </p>
          <time class="Single-date" datetime="{{ $timestamp }}">
            {{ $date }}
          </time>
        </div>
      </header>

      @if ($image->link)
        <div class="Single-imageWrap">
          <img src="{{ $image->link }}" alt="{{ $image->alt }}" class="Single-image">
        </div>
      @endif

      @include('features.library.Content.Content')
    </article>

    @include('features.library.Comments.Comments')
  </div>

  <div class="Library-sidebar">
    @include('features.library.BlogSidebar.BlogSidebar')
  </div>
</div>
