@props([
    'category'=>null
])
@if($category)

        <div class="post-media post-thumb">
            <div class="hover-with">
                <span class="badge-main">{{ $category->name }}</span>
                @if(!empty($category->description))
                    <p></p>
                    <p class="description">{{ $category->description }}</p>
                    <p></p>
                @endif
            </div>
        </div>

@endif
