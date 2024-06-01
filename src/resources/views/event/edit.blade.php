<x-body>
    <x-slot name="content">

        <x-secondary-navigation-back>
            <x-slot name="back_link">/event</x-slot>
        </x-secondary-navigation-back>

        <div class="category-grid">
            <div class="timeline-empty">
            </div>
            <div class="category-card" style="justify-content: center">
                <div class="timeline-component timeline-content">
                    <form action='/event' method='post'>
                        @csrf
                        <label for="name">name</label><br>
                        <input type="text" id="name" name="name" class="input-white" value={{$event->name}}><br><br>

                        <label for="description">description</label><br>
                        <input type="text" id="description" name="description" class="input-white" value={{$event->description}}><br><br>

                        <label for="start_date">start_date</label><br>
                        <input type="date" id="start_date" name="start_date" class="date-input" value={{$event->start_date}}><br><br>

                        <label for="end_date">end_date</label><br>
                        <input type="date" id="end_date" name="end_date" class="date-input" value={{$event->end_date}}><br><br>

                        <label for="image_link">image_link</label><br>
                        <input type="text" id="image_link" name="image_link" class="input-white" value={{$event->image_link}}><br><br>

                        <label for="category">category</label><br>
                        <select id="category_id" name="category_id" class="dropdown-input">
                            @foreach($categories as $category)
                                <option value={{$category->id}} @selected($category->id == $event->category_id)>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>

                        <input type="submit" value="Submit" class="white-border-button">
                    </form>
                </div>
            </div>
            <div class="timeline-empty">
            </div>
        </div>
    </x-slot>
</x-body>
