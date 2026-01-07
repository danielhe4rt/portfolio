<?php

namespace Kaster\Cms\Filament\Components\Heroes;

use Filament\Forms\Components\TextInput;
use Kaster\Cms\Enums\CustomComponent;
use Kaster\Cms\Filament\Components\AbstractCustomComponent;

class HeroBlock extends AbstractCustomComponent
{
    protected static string $view = 'cms::components.heroes.hero-block';

    public static function blockSchema(): array
    {
        return [
            TextInput::make('title'),
            TextInput::make('subtitle'),
        ];
    }

    public static function fieldName(): string
    {
        return CustomComponent::HERO->value;
    }

    public static function getGroup(): string
    {
        return 'Hero';
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'title' => $data['title'],
            'subtitle' => $data['subtitle'],
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
