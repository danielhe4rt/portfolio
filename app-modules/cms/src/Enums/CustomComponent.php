<?php

namespace Kaster\Cms\Enums;

use Kaster\Cms\Filament\Components\AbstractCustomComponent;

enum CustomComponent: string
{
    public function getComponentClass(): string
    {
        return match ($this) {
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
