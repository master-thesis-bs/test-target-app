<x-body>
    <x-slot name="content">

        <x-secondary-navigation>
            <x-slot name="back_link">/</x-slot>
            <x-slot name="create_link">category/create</x-slot>
        </x-secondary-navigation>

        <div class="category-grid">
            @foreach($categories as $category)
                <div class="category-card">
                    <a href={{"/category/" . $category->id}}>
                        <div class="timeline-component timeline-content">
                            {{$category->name}} <br> <br>
                            <span class="dot" style="background-color:#{{$category->color}}"></span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </x-slot>
</x-body>
