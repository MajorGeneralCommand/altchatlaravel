@props(['data'])

<div {{ $attributes->merge(['class' => 'bg-slate-700 rounded-3xl text-white px-8 py-4']) }}>
    <div class="flex items-center gap-4">
        <img src="{{ asset('storage/' . $data->user->profile_url) }}" alt="" class="w-16 h-16 object-cover rounded-full">
        <p class="font-bold text-xl">{{ $data->user->name }}</p>
    </div>
    <div class="pt-4 font-medium">
        <p>{{ $data->contents }}</p>
    </div>
</div>
