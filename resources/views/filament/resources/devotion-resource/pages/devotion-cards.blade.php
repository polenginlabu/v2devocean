<x-filament-panels::page>
    <div class="space-y-4">
        <!-- Header with Actions -->
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-white">Devotions</h1>
            <a href="{{ route('filament.admin.resources.devotions.create') }}" class="btn-primary">New Devotion</a>
        </div>

        <!-- Filters Section -->
        <div class="mb-4 flex gap-4 items-center">
            <form method="GET" class="flex gap-4">
                <select name="tag" class="px-4 py-2 border rounded-md text-black">
                    <option value="">All Tags</option>
                    @foreach ($filters as $key => $value)
                        <option value="{{ $key }}" {{ request('tag') == $key ? 'selected' : '' }}>
                            {{ $value }}
                        </option>
                    @endforeach
                </select>
                <button type="submit" class="btn-primary">Apply Filter</button>
            </form>
        </div>

        <!-- Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($records->items() as $record)
                <div class="bg-gray-800 text-white rounded-lg shadow-md p-4">
                    <p class="text-sm text-gray-400">{{ $record->created_at->format('F j, Y') }}</p>
                    <h2 class="text-lg font-bold">{{ $record->title }}</h2>
                    <p class="text-sm text-gray-300 mt-1">{{ $record->bible_verse }}</p>
                    <p class="text-xs mt-1">{{ $record->full_reference }}</p>

                    <div class="mt-2 flex flex-wrap gap-1">
                        @foreach ($record->tagged()->pluck('tag_name') as $tag)
                            <span class="inline-block bg-blue-200 text-blue-800 text-xs px-2 py-1 rounded-md">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $records->appends(request()->query())->links() }}
        </div>
    </div>
</x-filament-panels::page>
