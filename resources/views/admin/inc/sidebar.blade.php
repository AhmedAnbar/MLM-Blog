<div class="card">
        <div class="card-header">Menu</div>

        <div class="card-body">
            <a href="{{ route('home') }}">Home</a>
            <hr>
            @if (Auth::user()->admin)
                <a href="{{ route('users') }}">Users</a>
                <hr>
            @endif
            <a href="{{ route('categories') }}">Categories</a>
            <hr>
            <a href="{{ route('tags') }}">Tags</a>
            <hr>
            <a href="{{ route('posts') }}">All Posts</a>
            @if (Auth::user()->admin)
                <hr>
                <a href="{{ route('settings') }}">Settings</a>
                
            @endif
            
            
        </div>
    </div>