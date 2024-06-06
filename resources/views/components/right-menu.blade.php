<div class="col-md-3">
    <aside class="sidebar">

        <!-- Widget Category -->
        <div class="widget widget-category">
            <h4 class="widget-title">Categories</h4>
            <ul class="widget-category-list">
                <li><a href="{{ route("colour") }}">Colours</a>
                </li>
                <li><a href="{{ route("shape") }}">Shapes</a>
                </li>
                <li><a href="{{ route("type") }}">Types</a>
                </li>
            </ul>
        </div> <!-- End category  -->

        <!-- Widget tag -->
        <div class="widget widget-tag">
            <h4 class="widget-title">Tag Cloud</h4>
            <ul class="widget-tag-list">
                <li><a href="{{ route('homeColour.show',['blue']) }}">Blue</a>
                </li>
                <li><a href="{{ route('homeType.show','sapphire') }}">Sapphire</a>
                </li>
                <li><a href="{{ route('homeColour.show',['red']) }}">Red</a>
                </li>
                <li><a href="{{ route('homeShape.show',['square']) }}">Square</a>
                </li>
                <li><a href="{{ route('homeShape.show',['oval']) }}">Oval</a>
                </li>
            </ul>
        </div> <!-- End tag  -->







    </aside>
</div>
