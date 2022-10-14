<div wire:poll>
    <div class="">
        @foreach ($messages as $message)
            <div class="pt-6">
                <div
                    class="rounded-md p-2 w-[200px] text-white @if ($message->user_id == Auth::id()) bg-purple-500 @else bg-purple-300 @endif ">
                    {{ $message->message }}
                </div>
            </div>
        @endforeach
    </div>
</div>
