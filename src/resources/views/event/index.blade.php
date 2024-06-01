<x-body>
    <x-slot name="content">
        <div class="secondary-navigation">
            <a href="/event">
                <div class="purple-button">Back</div>
            </a>

            <div class="spacing"></div>

            <a href="/event/create">
                <div class="white-border-button">Create</div>
            </a>

            <div class="spacing"></div>

            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Choose category</button>
                <div id="myDropdown" class="dropdown-content">
                    @foreach($categories as $category)
                        <a href="{{'/event?category_id=' . $category->id}}">{{$category->name}}</a>
                    @endforeach
                    <a href="/event">All</a>
                </div>
            </div>
        </div>

        <script>
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            window.onclick = function(event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
        </script>

        <section class="design-section">
            <div class="timeline">
                @foreach($events as $event)
                    @if($loop->index % 2 == 0)
                        <x-event-card-left :event="$event"/>
                    @else
                        <x-event-card-right :event="$event"/>
                    @endif
                @endforeach
            </div>
        </section>
    </x-slot>
</x-body>
