<aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <a href="{{ url('/') }}" class="text-white text-5xl font-semibold uppercase hover:text-gray-300">SILAD</a>
        <h1 class="text-3xl text-white pb-6">Admin</h1>
    </div>
    <nav class="text-white text-base font-semibold pt-0">
        <a href="{{ url('/admin') }}"
            class="{{ Request::is('admin') ? 'active-nav-link' : '' }} flex items-center text-white py-4 pl-6 nav-item">
            <i class="fas fa-tachometer-alt mr-3"></i>
            Dashboard
        </a>
        <div class="nav-item {{ Request::is('admin/surat/*') ? 'active-nav-link' : '' }}" x-data="{ open: true }">
            <button type="button" @click="open = !open"
                class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6">
                <i class="fas fa-sticky-note mr-3"></i>
                Surat
                <svg class="h-5 w-5 flex-none text-gray-700 dark:text-gray-100" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <div x-show="open" class="pl-12">
                <a href="{{ url('/admin/surat/ajuan') }}"
                    class="block py-2 text-white opacity-75 hover:opacity-100">Permintaan Surat</a>
                <a href="{{ url('/admin/surat/arsip') }}"
                    class="block py-2 text-white opacity-75 hover:opacity-100">Surat Selesai</a>
            </div>
        </div>
        <a href="{{ url('admin/dokdesa') }}"
            class="{{ Request::is('admin/dokdesa') ? 'active-nav-link' : '' }} flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-table mr-3"></i>
            Dokumen Desa
        </a>
        <a href="{{ url('admin/faq') }}"
            class="{{ Request::is('admin/faq') ? 'active-nav-link' : '' }} flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-tablet-alt mr-3"></i>
            FAQ
        </a>
        <a href="{{ url('admin/users') }}"
            class="{{ Request::is('admin/users') ? 'active-nav-link' : '' }} flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            <i class="fas fa-calendar mr-3"></i>
            Kelola User
        </a>
    </nav>
</aside>
