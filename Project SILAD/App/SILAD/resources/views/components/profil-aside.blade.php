<?php
use App\Livewire\Actions\Logout;

$logout = function (Logout $logout) {
    $logout();

    $this->redirect('/', navigate: true);
};
$user_id = auth()->user()->id;
?>
<aside class="space-y-1">
    <a href="{{ url('/dashboard') }}"
        class="{{ Request::is('/dashboard')
            ? 'bg-blue-50 border-blue-500 text-blue-700 hover:bg-blue-50 hover:text-blue-700 group border-l-4 px-3 py-2 flex items-center text-sm font-medium'
            : 'border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium' }}">Profil
    </a>

    <a href="/dashboard/document/"
        class="{{ Request::is('/dashboard/document')
            ? 'bg-blue-50 border-blue-500 text-blue-700 hover:bg-blue-50 hover:text-blue-700 group border-l-4 px-3 py-2 flex items-center text-sm font-medium'
            : 'border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium' }}">Dokumen
    </a>

    <a
        href="{{ url('/dashboard/gantisandi') }}"class="{{ Request::is('/dashboard/gantisandi')
            ? 'bg-blue-50 border-blue-500 text-blue-700 hover:bg-blue-50 hover:text-blue-700 group border-l-4 px-3 py-2 flex items-center text-sm font-medium'
            : 'border-transparent text-gray-900 hover:bg-gray-50 hover:text-gray-900 group border-l-4 px-3 py-2 flex items-center text-sm font-medium' }}">Ganti
        Kata Sandi
    </a>
</aside>
