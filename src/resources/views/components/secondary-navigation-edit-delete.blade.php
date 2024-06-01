<div class="secondary-navigation">
    <a href="{{$back_link}}">
        <div class="purple-button">Back</div>
    </a>

    <div class="spacing"></div>

    <a href="{{$edit_link}}">
        <div class="white-border-button">Edit</div>
    </a>

    <div class="spacing"></div>

    <form method="post" action="{{$delete_link}}" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="white-border-button">Delete</button>
    </form>
</div>
