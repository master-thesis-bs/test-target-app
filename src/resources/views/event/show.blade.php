<x-body>
    <x-slot name="content">

        <x-secondary-navigation-edit-delete>
            <x-slot name="back_link">/event</x-slot>
            <x-slot name="edit_link">{{'/event/' . $event->id . '/edit'}}</x-slot>
            <x-slot name="delete_link">{{'/event/' . $event->id}}</x-slot>
        </x-secondary-navigation-edit-delete>

        <div class="category-grid">
            <div class="timeline-empty">
            </div>
            <div class="category-card" style="justify-content: center">
                <a href={{"/event/" . $event->id}}>
                    <div class="timeline-component timeline-content">
                        <h3>{{$event->start_date}} -> {{$event->end_date}}</h3>
                        <h3>{{$event->name}}</h3>
                        <p>{{$event->description}}</p>
                        <img src="{{$event->image_link}}" width="300px"> <br><br>
                        <p>{{$event->category->name}}</p>
                        <span class="dot" style="background-color:#{{$event->category->color}}"></span>
                    </div>
                </a>
            </div>
            <div class="timeline-empty">
            </div>
        </div>
    </x-slot>
</x-body>
