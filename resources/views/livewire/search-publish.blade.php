@php
    $lang=session('locale')
@endphp
<div class="search_engine">
    <input wire:model="search" type="text" placeholder="{{ __('lang.search by title name') }}"/>

    <ul class="child">
        @if(count($posts)>=1)
         @foreach($posts as $post)
            <li><a href="/details/{{ $post->id }}">{{ $post->{$lang.'_title'} }}</a></li>
        @endforeach
        @else
        No name found
        @endif
    </ul>
</div>

