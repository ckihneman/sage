<article class="ArchiveItem">
  <header class="ArchiveItem-header">
    <h2 class="ArchiveItem-title">
      <a href="{{ $link }}" class="ArchiveItem-titleLink">
        {{ $title }}
      </a>
    </h2>
    @if ($type === 'post')
      <div class="ArchiveItem-meta">
        <a href="{{ $author->link }}" rel="author" class="ArchiveItem-author">
          {{ $author->name }}
        </a>
        <time datetime="{{ $timestamp }}" class="ArchiveItem-date">
          {{ $date }}
        </time>
      </div>
    @endif
  </header>

  @if ($image->link)
    <a href="{{ $link }}">
      <img src="{{ $image->link }}" alt="{{ $image->alt }}" class="ArchiveItem-image">
    </a>
  @endif

  @if ($excerpt)
    <p class="ArchiveItem-excerpt">
      {!! $excerpt !!}
    </p>
  @endif

</article>
