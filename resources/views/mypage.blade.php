<x-app-layout>
    <!-- slotに $title を渡す -->
    <x-slot name="title">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('マイページ') }}
        </h2>
    </x-slot>

    <div class='flex items-center justify-center'>
        <div class="flex py-12 items-center justify-center">
            <a href="{{ route('form') }}">
                <div class="flex items-center justify-center rounded-full bg-white shadow" style="width: 12rem;height:12rem;">
                    開始
                </div>
            </a>
        </div>
    </div>

</x-app-layout>