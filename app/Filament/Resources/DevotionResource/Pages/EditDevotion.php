<?php

namespace App\Filament\Resources\DevotionResource\Pages;

use App\Filament\Resources\DevotionResource;
use DOMDocument;
use DOMXPath;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Container\Attributes\Log;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class EditDevotion extends EditRecord
{
    protected static string $resource = DevotionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public static function extractFirstSectionText($htmlContent): string
    {
        // Suppress parsing errors
        libxml_use_internal_errors(true);

        // Load HTML
        $dom = new DOMDocument();
        $dom->loadHTML($htmlContent, LIBXML_NOERROR | LIBXML_NOWARNING);

        // Clear errors
        libxml_clear_errors();

        // Use XPath to select the first <section> inside #bibletext
        $xpath = new DOMXPath($dom);
        $sectionNode = $xpath->query('//*[@id="bibletext"]/section')->item(0);

        if (!$sectionNode) {
            return 'No section found.';
        }

        // Remove unwanted elements inside the first section
        $unwantedClasses = [
            'vn', 'tn-ref', 'a-tn', 'tn', 'bk_ch_vs_header', 'verse_export'
        ];

        foreach ($unwantedClasses as $class) {
            $unwantedElements = $xpath->query(".//*[contains(@class, '$class')]", $sectionNode);
            foreach ($unwantedElements as $element) {
                $element->parentNode->removeChild($element);
            }
        }

        // Extract and clean text from the section
        $text = trim($sectionNode->textContent);

        // Normalize whitespace
        return preg_replace('/\s+/', ' ', $text);
    }

    public static function fetchBibleTextFromApi($book, $chapter, $verses)
    {
        $response = Http::get('https://api.nlt.to/api/passages', [
            'ref' => "{$book}.{$chapter}:{$verses},6",
            'version' => 'NLT',
            'key' => '3453e12a-20ee-4959-ba7b-e50f084666f2'
        ]);

        if (!$response->successful()) {
            return 'Failed to fetch Bible text from API.';
        }

        return self::extractFirstSectionText($response->body());
    }
    protected function mutateFormDataBeforeFill(array $data): array
    {
        $data['tagged'] = $this->record?->tags->pluck('name')->toArray();
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['book'] = Config::get('books')[$data['book']];
        $data['bible_verse'] = self::fetchBibleTextFromApi($data['book'], $data['chapter'], $data['verses']);

        return $data;
    }


}
