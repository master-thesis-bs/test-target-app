<div class="timeline-empty">
</div>
<div class="timeline-middle">
    <div class="timeline-circle"></div>
</div>
<a href="{{"/event/" . $event->id}}" class="link-no-effect">
    <div class="timeline-component timeline-content">
        <h3>{{$event->start_date}} -> {{$event->end_date}}</h3>
        <h3>{{$event->name}}</h3>
        <p>{{$event->description}}</p>
        <img src="{{$event->image_link}}" width="100px"> <br><br>
        <span class="dot" style="background-color:#{{$event->category->color}}"></span>
        <p>{{$event->category->name}}</p>
    </div>
</a>
