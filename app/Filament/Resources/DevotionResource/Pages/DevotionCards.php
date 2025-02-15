<?php

namespace App\Filament\Resources\DevotionResource\Pages;

use App\Filament\Resources\DevotionResource;
use Conner\Tagging\Model\Tag;
use Filament\Resources\Pages\Page;
use Illuminate\Pagination\LengthAwarePaginator;

class DevotionCards extends Page
{
    protected static string $resource = DevotionResource::class;
    protected static string $view = 'filament.resources.devotion-resource.pages.devotion-cards';

    protected LengthAwarePaginator $pagination;
    protected array $filters;

    public function mount()
    {
        // Get paginated records
        $this->pagination = DevotionResource::getEloquentQuery()
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // Get filter options from tags
        $this->filters = Tag::pluck('name', 'name')->toArray();
    }

    public function getViewData(): array
    {
        return [
            'records' => $this->pagination,
            'filters' => $this->filters,
        ];
    }
}
