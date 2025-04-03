<div class="flex flex-col sm:flex-row items-center h-full max-w-4xl mx-auto">
    <div class="sm:w-1/2 h-full mt-auto p-4 sm:pt-18">
        <div class="w-full h-full bg-blue-600 rounded-4xl text-white p-12">
            <div class="font-medium">OBERON</div>
            <div class="sm:mt-20 text-4xl mb-4">
                Kelola koperasi dengan mudah, transparan, dan efisien.
            </div>
            <div class="sm:mb-12">
                Oberon menyediakan fitur lengkap untuk pengelolaan anggota, transaksi, simpanan, pinjaman, dan laporan keuangan.
            </div>
        </div>
    </div>
    <form wire:submit.prevent="login" class="flex flex-col gap-1 pt-0 sm:pt-8 p-8 w-full sm:w-2/3 me-auto">
        <div class="font-medium text-2xl">Masuk Untuk Melanjutkan</div>
        <label class="text-sm">Email</label>
        <input class="form-input" wire:model="email" autocomplete="off" type="text">
        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        <label class="text-sm">Password</label>
        <input class="form-input" wire:model="password" type="password">
        @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        <label class="inline-flex items-center gap-2">
            <input type="checkbox" wire:model="remember" class="form-checkbox">
            <span class="text-sm">Remember Me</span>
        </label>
        <button type="submit" class="btn me-auto flex mt-3">
            <svg  xmlns="http://www.w3.org/2000/svg"  width="18"  height="18"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-send"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14l11 -11" /><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
            <div>Masuk</div>
        </button>
    </form>
</div>