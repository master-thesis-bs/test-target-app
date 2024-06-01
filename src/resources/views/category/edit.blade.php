<x-body>
    <x-slot name="content">

        <x-secondary-navigation-back>
            <x-slot name="back_link">/category</x-slot>
        </x-secondary-navigation-back>

        <div class="category-grid">
            <div class="timeline-empty">
            </div>
            <div class="category-card" style="justify-content: center">
                <div class="timeline-component timeline-content">
                    <form action="{{'/category/' . $category->id}}" method=post>
                        @csrf
                        @method('PATCH')
                        <label for="name">Category name:</label><br><br>
                        <input type="text" id="name" name="name" value="{{$category->name}}" class="input-white"><br><br>

                        <label for="color">Category color:</label><br><br>
                        <input type="color" id="color" name="color" class="color-input" value={{'#'.$category->color}}><br><br>

                        <input type="submit" value="Submit" class="white-border-button">
                    </form>
                </div>
            </div>
            <div class="timeline-empty">
            </div>
        </div>
    </x-slot>
</x-body>
