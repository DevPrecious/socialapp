<div wire:poll>
    <div class="pt-4 grid">
        @foreach ($comments as $comment)
            <div class="grid">
                <span class="font-bold">{{ $comment->user->username }}</span>
                <span class="font-thin">{{ $comment->body }}</span>
                <span class="font-thin">{{ $comment->created_at->diffForHumans() }}</span>
            </div>
        @endforeach
    </div>
</div>
