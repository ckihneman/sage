@if ($items)
  <div class="Widget">
    <h3 class="Widget-title">
      {{ $title }}
    </h3>
    <ul class="Widget-list">
      @foreach ($items as $item)
        <li class="Widget-item">
          <a href="{{ $item->link }}" class="Widget-link">
            {!! $item->text !!}
          </a>
        </li>
      @endforeach
    </ul>
  </div>
@endif
