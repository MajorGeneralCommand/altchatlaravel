<x-app-layout>
    <section class="flex flex-col items-center justify-between relative">
        <div class="public__scroller min-w-[64rem] max-w-5xl h-[75vh] overflow-scroll bg-slate-800 mx-auto rounded-2xl mt-10">
            <div class="public__scroller-inner grid grid-cols-1 px-8 py-8 gap-8">
                @foreach ($chats as $chat)
                    <x-chat class="public__chat w-max max-w-[50%] {{ auth()->user()->name != $chat->user->name ? 'justify-self-end' : '' }}" :data="$chat" />
                @endforeach
            </div>
        </div>
        <form method="POST" action="/chat/store" class="flex min-w-5xl w-full max-w-5xl justify-between fixed bottom-0 mb-5 h-[10%]">
            @csrf
            <textarea name="contents" id="contents" class="bg-slate-700 border-transparent focus:border-transparent focus:ring-0 rounded-lg text-white w-[85%] flex flex-col-reverse"></textarea>
            <input type="hidden" name="channel" id="channel" value="{{ $channel }}">
            <input type="hidden" name="user" id="user" value={{ auth()->user()->id }}>
            <button type="submit" name="submit" id="submit" class="text-white bg-slate-700 rounded-2xl p-8 hover:bg-slate-700/50 transition-colors duration-300"><x-arrow-icon class="w-8 h-6" /></button>
        </form>
    </section>
</x-app-layout>
