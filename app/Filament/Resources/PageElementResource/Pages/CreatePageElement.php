<?php

namespace App\Filament\Resources\PageElementResource\Pages;

use App\Filament\Resources\PageElementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePageElement extends CreateRecord
{
    protected static string $resource = PageElementResource::class;
    use CreateRecord\Concerns\Translatable;


    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
