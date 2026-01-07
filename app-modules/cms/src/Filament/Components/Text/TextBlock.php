<?php

namespace Kaster\Cms\Filament\Components\Text;

use Filament\Forms\Components\TextInput;
use Kaster\Cms\Enums\CustomComponent;
use Kaster\Cms\Filament\Components\AbstractCustomComponent;

class TextBlock extends AbstractCustomComponent
{
    protected static string $view = 'cms::components.text.text-block';

    public static function blockSchema(): array
    {
        return [
            TextInput::make('text'),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::TEXT->value;
    }

    public static function getGroup(): string
    {
        return 'Text';
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'text' => $data['text'],
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function featuredColor(): string
    {
        return 'orange';
    }
}
