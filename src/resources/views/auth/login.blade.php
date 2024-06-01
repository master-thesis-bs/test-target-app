<x-body>
    <x-slot name="content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="category-grid">
                <div class="timeline-empty">
                </div>
                <div class="category-card" style="justify-content: center">
                    <div class="timeline-component timeline-content">
                        <label for="email">Email</label><br>
                        <input type="text" id="email" name="email" class="input-white"><br><br>

                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" class="input-white"><br><br>
                        <button class="white-border-button"> Login</button>
                        <br><br>
                        <br>
                    </div>
                </div>
                <div class="timeline-empty">
                </div>
            </div>
        </form>
    </x-slot>
</x-body>
