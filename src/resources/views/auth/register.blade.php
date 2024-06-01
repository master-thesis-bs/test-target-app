<x-body>
    <x-slot name="content">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="category-grid">
                <div class="timeline-empty">
                </div>
                <div class="category-card" style="justify-content: center">
                    <div class="timeline-component timeline-content">
                            @csrf
                            <label for="name">Name</label><br>
                            <input type="text" id="name" name="name" class="input-white"><br><br>

                            <label for="email">Email</label><br>
                            <input type="text" id="email" name="email" class="input-white"><br><br>

                            <label for="password">Password</label><br>
                            <input type="password" id="password" name="password" class="input-white"><br><br>

                            <label for="password_confirmation">Password Confirmation</label><br>
                            <input type="password" id="password_confirmation" name="password_confirmation" class="input-white"><br><br>

                            <button class="white-border-button"> Register</button><br><br>
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            @endif
                            <br>
                    </div>
                </div>
                <div class="timeline-empty">
                </div>
            </div>
        </form>
    </x-slot>
</x-body>
