<?php

namespace App\Filament\Resources\PageElementResource\Pages;

use App\Filament\Resources\PageElementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageElement extends EditRecord
{
    protected static string $resource = PageElementResource::class;
    use EditRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
