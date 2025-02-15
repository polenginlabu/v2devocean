<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DevotionResource\Pages;
use App\Filament\Resources\DevotionResource\RelationManagers;
use App\Models\Devotion;
use Conner\Tagging\Model\Tag;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;

class DevotionResource extends Resource
{
    protected static ?string $model = Devotion::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canAccess(): bool
    {
        $user = Auth::user();

        // Check if the user is logged in and their email matches
        return $user && $user->email === 'johnpaul.dj21@gmail.com';
    }

    public static function form(Form $form): Form
    {

        return $form
        ->schema([
            Card::make('General Information')
            ->schema([
            DatePicker::make('created_at')
                ->label('Date')
                ->required()
                ->displayFormat('F j, Y')
                ->default(now())
                ->native(false),
            TextInput::make('title')
                ->label('Title')
                ->required(),

            Select::make('book')
                ->label('Book')
                ->searchable()
                ->required()
                ->options(Config::get('books'))
                ->saveRelationshipsUsing(function ($record, $state) {
                    $record->book = $state;
                }),

            TextInput::make('chapter')
                ->label('Chapter')
                ->required(),

            TextInput::make('verses')
                ->label('Verse/s')
                ->required(),

            Textarea::make('rhema')
                ->label('Rhema')
                ->rows(10),


            Textarea::make('reflection')
                ->label('Reflection')
                ->rows(7),

            Textarea::make('motivation')
                ->label('Motivation')
                ->rows(7),

            Textarea::make('application')
                ->label('Application')
                ->rows(7),
            TagsInput::make('tagged')
                ->label('Tags')
                ->placeholder('Add tags here')
                // ->suggestions(\Conner\Tagging\Model\Tag::pluck('name')->toArray())
                ->saveRelationshipsUsing(function ($record, $state) {
                    $record->retag($state);
                })
                ->required(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->defaultSort('created_at', 'desc')
        ->contentGrid([
            'md' => 2, // 2 cards per row on medium screens
            'lg' => 3, // 3 cards per row on large screens
            'xl' => 4, // 4 cards per row on extra-large screens
        ])
        ->recordClasses('rounded-lg shadow-md bg-gray-800 p-6 border border-gray-700 space-y-2')
        ->columns([
            TextColumn::make('created_at')
                ->label('Date')
                ->date('F j, Y')
                ->weight('bold')
                ->alignment('start')
                ->extraAttributes(['class' => 'text-sm text-gray-400']),

            TextColumn::make('title')
                ->label('Title')
                ->weight('bold')
                ->extraAttributes(['class' => 'text-xl text-white']),

            TextColumn::make('full_reference')
                ->label('Rhema')
                ->getStateUsing(fn ($record) => "{$record->book} {$record->chapter}:{$record->verses}")
                ->alignment('start')
                ->extraAttributes(['class' => 'text-gray-300']),

            TextColumn::make('bible_verse')
                ->label('Verse')
                ->limit(200)
                ->extraAttributes(['class' => 'text-sm text-gray-400']),

            TextColumn::make('tagged')
                ->label('Tags')
                ->getStateUsing(fn ($record) => $record->tagged()->pluck('tag_name')->toArray())
                ->formatStateUsing(function ($state) {
                    if (!$state || empty($state)) {
                        return '-';
                    }
                    return collect($state)->map(fn ($tag) => "<span class='inline-block bg-blue-200 text-blue-800 text-xs font-medium mr-1 mb-1 px-2.5 py-0.5 rounded-full'>{$tag}</span>")
                        ->implode('');
                })
                ->html()
                ->extraAttributes(['class' => 'space-x-1']),

        ])
        ->filters([
            SelectFilter::make('tags')
                ->label('Filter by Tag')
                ->options(Tag::pluck('name', 'name')->toArray())
                ->query(function ($query, $data) {
                    if (empty($data['value'])) {
                        return $query;
                    }
                    return $query->withAnyTag([$data]);
                }),
        ]);

    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDevotions::route('/'),
            'create' => Pages\CreateDevotion::route('/create'),
            'edit' => Pages\EditDevotion::route('/{record}/edit'),
            'cards' => Pages\DevotionCards::route('/cards'),
        ];
    }
}
