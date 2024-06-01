<x-body>
    <x-slot name="content">

        <x-secondary-navigation-edit-delete>
            <x-slot name="back_link">/category</x-slot>
            <x-slot name="edit_link">{{'/category/' . $category->id . '/edit'}}</x-slot>
            <x-slot name="delete_link">{{'/category/' . $category->id}}</x-slot>
        </x-secondary-navigation-edit-delete>

        <div class="category-grid">
            <div class="timeline-empty">
            </div>
                <div class="category-card" style="justify-content: center">
                    <a href={{"/category/" . $category->id}}>
                        <div class="timeline-component timeline-content">
                            {{$category->name}} <br> <br>
                            <span class="dot" style="background-color:#{{$category->color}}"></span>
                        </div>
                    </a>
                </div>
            <div class="timeline-empty">
            </div>
        </div>
    </x-slot>
</x-body>
