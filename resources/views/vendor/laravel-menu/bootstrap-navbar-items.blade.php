@foreach($items as $item)
  <li@lm-attrs($item) @if($item->hasChildren())class ="dropdown"@endif @lm-endattrs>
    @if($item->link) <a@lm-attrs($item->link) @if($item->hasChildren())   @endif @lm-endattrs href="{!! $item->url() !!}">
      {!! $item->title !!}
      @if($item->hasChildren()) <span class="fa fa-chevron-down"></span> @endif
    </a>
    @else
      {!! $item->title !!}
    @endif
    @if($item->hasChildren())
      <ul class="nav child_menu" style="display: none">
        @include(config('laravel-menu.views.bootstrap-items'), 
array('items' => $item->children()))
      </ul> 
    @endif
  </li>
  @if($item->divider)
  	<li{{!! Lavary\Menu\Builder::attributes($item->divider) !!}}></li>
  @endif
@endforeach
