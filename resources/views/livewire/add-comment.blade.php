<div>
    <form wire:submit.prevent="store({{ $postId }})" class="grid gap-3">
        <input type="text" wire:model="body" class="border rounded-md p-6 focus:outline-none px-4 w-full"
            placeholder="Message" id="">
        @error('body')
            <span class="text-red-500">
                {{ $message }}
            </span>
        @enderror
        <div>
            <button class="px-6 py-4 rounded-md bg-purple-500 text-white">Comment</button>
        </div>
    </form>
</div>
