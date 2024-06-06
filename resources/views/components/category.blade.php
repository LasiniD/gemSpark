@props([
    'category'=>null
])
@if($category)

        <div class="post-media post-thumb">
            <div class="hover-with">
                <span class="badge-main">{{ $category->name }}</span>
                {{--<h1 class="font-serif">{{ $category->name }}</h1>--}}
            </div>
        </div>

@endif
