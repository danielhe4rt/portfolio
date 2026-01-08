<?php

namespace Kaster\Cms\Filament\Components\Images;

use Filament\Forms\Components\FileUpload;
use Kaster\Cms\Filament\Components\AbstractCustomComponent;

class ImageBlock extends AbstractCustomComponent
{
    protected static string $view = 'cms::components.images.image-block';

    public static function blockSchema(): array
    {
        return [
            FileUpload::make('image')
                ->label('Image')
                ->image()
                ->required(),
        ];
    }

    public static function fieldName(): string
    {
        return 'image-block';
    }

    public static function getGroup(): string
    {
        return 'Media';
    }

    public static function setupRenderPayload(array $data): array
    {
        return [
            'image' => $data['image'],
        ];
    }

    public static function toSearchableContent(array $data): string
    {
        return '';
    }

    public static function featuredColor(): string
    {
        return 'blue';
    }
}
