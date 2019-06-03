<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('features.header.Head.Head')
  <body @php body_class() @endphp data-target="navToggle">
    @php do_action('get_header') @endphp
    <div class="Document Document--pushNav">
      @include('features.header.Header.Header')
      @yield('content')
      @include('features.footer.FooterBoard.FooterBoard')
      @include('features.footer.Footer.Footer')
    </div>
    @include('features.footer.Foot.Foot')
  </body>
</html>
