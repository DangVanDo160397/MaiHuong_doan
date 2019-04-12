
<!-- Mixins--><!DOCTYPE html>
<html lang="en">
  <head>
    @include('homepage.partials.head')
  </head>
  <body>
    <div id="wrapper">
        @include('homepage.partials.header')

      <section class="section" id="section">
          @include('homepage.partials.banner')

          @yield('content')
          


      </section>
      @include('homepage.partials.footer')
      <!--#footer-->
    </div>
    <!--#wrapper-->
    <!--JS-->
      @include('homepage.partials.scripts')
  </body>
</html>