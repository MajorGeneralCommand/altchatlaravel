<x-app-layout>
    <section>
        <div class="min-w-48 max-w-5xl min-h-40 bg-slate-800 mx-auto rounded-2xl mt-20">
            <div class="grid grid-cols-1 px-12 py-8 gap-8">
                @foreach ($chats as $chat)
                    <x-chat class="max-w-[50%] {{ auth()->user()->name != $chat->user->name ? 'justify-self-end' : '' }}" :data="$chat" />
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
