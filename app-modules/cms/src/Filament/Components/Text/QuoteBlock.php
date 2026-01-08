<?php

namespace Kaster\Cms\Filament\Components\Text;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Kaster\Cms\Filament\Components\AbstractCustomComponent;

class QuoteBlock extends AbstractCustomComponent
{
    protected static string $view = 'cms::components.text.quote-block';

    public static function blockSchema(): array
    {
        return [
            Textarea::make('quote')
                ->required()
                ->rows(3),
            TextInput::make('author')
                ->label('Author'),
        ];
    }

    public static function fieldName(): string
    {
        return 'quote-block';
    }

    public static function getGroup(): string
    {
        return 'Text';
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'quote' => $data['quote'],
            'author' => $data['author'],
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return $data['quote'] . ' ' . ($data['author'] ?? '');
    }

    public static function featuredColor(): string
    {
        return 'gray';
    }
}
