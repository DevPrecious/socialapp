<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid gap-5">
                        <div class="text-sm">
                            {{ $post->body }}
                        </div>
                        <div class="grid place-items-center">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="w-[300px]">
                        </div>
                        <div class="flex justify-between">
                            <span class="text-lg font-bold">{{ $post->user->username }}</span>
                            <span class="text-lg font-thin">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    <div class="pt-6">
                        <livewire:fetch-comments :postId="$post->id" />

                    </div>

                    <div class="pt-6">
                        <hr>
                        <livewire:add-comment :postId="$post->id" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4 mb-4">





    </div>
</x-app-layout>
