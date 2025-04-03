<nav class="fixed w-full top-0 h-12 flex border-b border-black/10 z-10 shadow-lg shadow-black/5 bg-gradient-to-r from-blue-200/70 to-25% to-white/70 backdrop-blur-sm">
    <div class="max-w-6xl w-full px-4 mx-auto flex justify-between items-center">
        <a href="/" class="text-lg font-medium">Oberon</a>
        <ul class="flex space-x-4">
            @auth
            <li><a href="/admin" class="nav-item">Admin</a></li>
            @else
            <li><a href="/" class="nav-item">Home</a></li>
            @endauth
            <li><a href="/counter" class="nav-item">Counter</a></li>
            @auth
                <li>
                    <button wire:click="logout" class="nav-item cursor-pointer">Logout</button>
                </li>
            @else
                <li><a href="/login" class="nav-item">Login</a></li>
            @endauth
        </ul>
    </div>
</nav>
