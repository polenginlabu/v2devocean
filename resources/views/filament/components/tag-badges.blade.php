<div class="badang py-4">
    <div class="flex flex-wrap gap-1 wawawi">
    @forelse ($getState() as $tag)
        <a href="{{ url()->current() . '?tableFilters[tags][value]=' . urlencode($tag) }}">


            <x-filament::badge color="info">
                {{ $tag }}
            </x-filament::badge>

        </a>
    @empty
        <span class="text-sm text-gray-500">-</span>
    @endforelse
</div>

</div>


<style>
    .hahahahha {
        display: none !important;
    }
/* .flex:has(.badang) > a[href$="/edit"] {
  display: none !important;
} */
 /* .disabled:pointer-events-none .ps-4.pe-4.block.w-full{
  display: none !important;
 } */
</style>
