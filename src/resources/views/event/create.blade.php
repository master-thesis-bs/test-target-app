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
                        <label for="name">Event name</label><br>
                        <input type="text" id="name" name="name" class="input-white"><br><br>

                        <label for="description">Event description</label><br>
                        <input type="text" id="description" name="description" class="input-white"><br><br>

                        <label for="start_date">Start date</label><br>
                        <input type="date" id="start_date" name="start_date" class="date-input"
                               value="{{Carbon\Carbon::now()->toDateString()}}"><br><br>

                        <label for="end_date">End date</label><br>
                        <input type="date" id="end_date" name="end_date" class="date-input"
                               value="{{Carbon\Carbon::now()->toDateString()}}"><br><br>

                        <label for="image_link">Image link</label><br>
                        <input type="text" id="image_link" name="image_link" class="input-white"><br><br>

                        <label for="category">Category</label><br>
                        <select id="category_id" name="category_id" class="dropdown-input">
                            @foreach($categories as $category)
                                <option value={{$category->id}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <br>

                        <input type="submit" value="Submit" class="white-border-button">
                    </form>
                </div>
            </div>
            <div class="timeline-empty">
            </div>
        </div>
    </x-slot>
</x-body>
