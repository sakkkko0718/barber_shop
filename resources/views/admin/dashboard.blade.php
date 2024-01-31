<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            管理者専用ページ
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- ログイン中の管理者名が参照できる --}}
                    <div>こんにちは、{{ Auth::User()->name }}さん</div>
                    <div style="margin-top: 10px;">
                        <a href="/reservations" style="color: blue;">予約者一覧</a>へ行く
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
