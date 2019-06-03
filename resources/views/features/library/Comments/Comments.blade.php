@php
if (post_password_required()) {
  return;
}
@endphp

<section class="Comments">
  @if (have_comments())
    <h2 class="Comments-title">
      {!! sprintf(_nx('One response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
    </h2>

    <ol class="Comments-list">
      {!! wp_list_comments(['style' => 'ol', 'short_ping' => true]) !!}
    </ol>

    @if (get_comment_pages_count() > 1 && get_option('page_comments'))
      <nav class="Comments-nav">
        <ul class="Comments-navList">
          @if (get_previous_comments_link())
            <li class="Comments-prev">@php previous_comments_link(__('&larr; Older comments', 'sage')) @endphp</li>
          @endif
          @if (get_next_comments_link())
            <li class="Comments-next">@php next_comments_link(__('Newer comments &rarr;', 'sage')) @endphp</li>
          @endif
        </ul>
      </nav>
    @endif
  @endif

  @if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
    <div class="Comments-warning">
      {{ __('Comments are closed.', 'sage') }}
    </div>
  @endif

  @php comment_form() @endphp
</section>
