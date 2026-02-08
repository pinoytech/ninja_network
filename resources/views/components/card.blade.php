@props(['highlight' => false])

<div @class([ 'card' , 'highlight'=> $highlight,])>
  {{ $slot }}
  <a {{ $attributes }} class="btn btn-primary">Read More</a>
</div>
