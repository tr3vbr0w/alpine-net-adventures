<header class="banner flex justify-between text-primary px-4 py-8">
  <a class="brand my-auto" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex gap-4 text-primary', 'echo' => false, 'link_class' => 'm-auto no-underline', 'list_item_class'=>'flex']) !!}
    </nav>
  @endif
</header>
