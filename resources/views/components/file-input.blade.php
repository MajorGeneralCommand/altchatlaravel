<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    @props(['disabled' => false])
<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' file:transition-all file:duration-300 text-gray-400 file:text-gray-400 file:bg-slate-600 file:rounded file:p-3 file:border-0 mt-1 file:hover:bg-slate-700 ']) !!}>
</div>
