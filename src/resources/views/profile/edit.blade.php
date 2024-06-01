<x-body>
    <x-slot name="content">

        <form method="post" action="{{ route('profile.update') }}">
            @csrf
            @method('patch')
            <div class="category-grid">
                <div class="timeline-empty">
                </div>
                <div class="category-card" style="justify-content: center">
                    <div class="timeline-component timeline-content">
                        <h3>Profile Information</h3>
                        <a>Update your account's profile information and email address.</a> <br><br><br>

                        <label for="name">Name</label><br>
                        <input type="text" id="name" name="name" class="input-white" value="{{$user->name}}"><br><br>

                        <label for="email">Email</label><br>
                        <input type="text" id="email" name="email" class="input-white" value="{{$user->email}}"><br><br>
                        <button class="white-border-button"> Save</button>
                        <br><br>
                        <br>
                    </div>
                </div>
                <div class="timeline-empty">
                </div>
            </div>
        </form>

        <form method="post" action="{{ route('password.update')}}">
            @csrf
            @method('put')
            <div class="category-grid">
                <div class="timeline-empty">
                </div>
                <div class="category-card" style="justify-content: center">
                    <div class="timeline-component timeline-content">
                        <h3>Update Password</h3>
                        <a>Ensure your account is using a long, random password to stay secure.</a> <br><br><br>

                        <label for="current_password"> Current Password</label><br>
                        <input type="password" id="password" name="password" class="input-white"><br><br>

                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" class="input-white"><br><br>

                        <label for="password_confirmation">Password Confirmation</label><br>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                               class="input-white"><br><br>

                        <button class="white-border-button"> Save</button>
                    </div>
                </div>
                <div class="timeline-empty">
                </div>
            </div>
        </form>


        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')
            <div class="category-grid">
                <div class="timeline-empty">
                </div>
                <div class="category-card" style="justify-content: center">
                    <div class="timeline-component timeline-content">
                        <h3>Delete Account</h3>
                        <p>Once your account is deleted, all of its resources and data will be permanently deleted.</p>
                        <br><br>

                        <label for="password">Password</label><br>
                        <input type="password" id="password" name="password" class="input-white"><br><br>

                        <button class="white-border-button">Delete</button>
                    </div>
                </div>
                <div class="timeline-empty">
                </div>
            </div>
        </form>
    </x-slot>
</x-body>
