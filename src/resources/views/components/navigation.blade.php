<div class="navigation">
    <div class="navigation-content">
        <div>
            <a href="/">
                <div class="home navigation-element">Home</div>
            </a>
            <a href="/event">
                <div class="navigation-element">Events</div>
            </a>
            <a href="/category">
                <div class="navigation-element">Categories</div>
            </a>
            <a href="/pdf">
                <div class="navigation-element">Export</div>
            </a>
        </div>
        @auth
            <div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a onclick="event.preventDefault();this.closest('form').submit();" href="">
                        <div class="navigation-element">Logout</div>
                    </a>
                </form>
                <a href="/profile">
                    <div class="navigation-element">Profile</div>
                </a>
            </div>
        @else
            <div>
                <a href="/login">
                    <div class="navigation-element">Login</div>
                </a>
                <a href="/register">
                    <div class="navigation-element">Register</div>
                </a>
            </div>
        @endauth
    </div>
</div>
