<?php

namespace Kaster\Cms\Enums;

use Kaster\Cms\Filament\Components\AbstractCustomComponent;
use Kaster\Cms\Filament\Components\Heroes\HeroBlock;
use Kaster\Cms\Filament\Components\Text\TextBlock;

enum CustomComponent: string
{
    case HERO = 'hero-section';
    case TEXT = 'rich-text';

    public function getComponentClass(): string
    {
        return match ($this) {
            self::HERO => HeroBlock::class,
            self::TEXT => TextBlock::class,
            default => ''
        };
    }

    public function getComponent(): AbstractCustomComponent
    {
        return app($this->getComponentClass());
    }

    public static function allComponents(): array
    {
        return array_map(static fn (CustomComponent $component): array => ['class' => $component->getComponent()], self::cases());
    }
}
