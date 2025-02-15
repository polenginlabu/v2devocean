

<div class="space-y-4">
    <!-- Filters Section -->
    <div class="flex space-x-4 mb-4">
        @foreach ($filters as $filter)
            <div>
                <label class="block text-sm font-medium">{{ $filter->getLabel() }}</label>
                <select
                    wire:model="tableFilters.{{ $filter->getName() }}"
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                >
                    <option value="">All</option>
                    @foreach ($filter->getOptions() as $key => $label)
                        <option value="{{ $key }}">{{ $label }}</option>
                    @endforeach
                </select>
            </div>
        @endforeach
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($records as $record)
            <a href="{{ route('filament.admin.resources.devotions.edit', $record) }}"
                class="block p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="text-sm text-gray-500 mt-2">{{ $record->created_at->format('F d, Y') }}</p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $record->title }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    <strong>Rhema:</strong> {{ $record->book }} {{ $record->chapter }}:{{ $record->verses }}
                </p>
                <p class="text-sm text-gray-600">
                    <strong>Verse:</strong> {{ $record->rhema }}
                </p>
                <div class="pt-4 pb-2">
                    @if ($record->tagged()->count())
                        @foreach ($record->tagged()->pluck('tag_name') as $tag)
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $tag }}</span>
                        @endforeach
                    @else
                        <span class="text-gray-500 text-sm">No Tags</span>
                    @endif
                </div>
            </a>
        @endforeach
    </div>

    <!-- Pagination Controls -->
    <div class="mt-4">
        {{ $records->links() }}
    </div>
</div>



{{--
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($records as $record)
        <div>
            <a href="{{ route('filament.admin.resources.devotions.edit', $record) }}"
               class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <p class="text-sm text-gray-500 mt-2">{{ $record->created_at->format('F d, Y') }}</p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $record->title }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">
                    <strong>Rhema:</strong> {{ $record->book }} {{ $record->chapter }}:{{ $record->verses }}
                </p>
                <p class="text-sm text-gray-600">
                    <strong>Verse:</strong> {{ $record->rhema }}
                </p>
                <div class="pt-4 pb-2">
                    @if ($record->tagged()->count())
                        @foreach ($record->tagged()->pluck('tag_name') as $tag)
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $tag }}</span>
                        @endforeach
                    @else
                        <span class="text-gray-500 text-sm">No Tags</span>
                    @endif
                </div>
            </a>
        </div>
    @endforeach
</div> --}}
