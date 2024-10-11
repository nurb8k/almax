<?php

namespace App\Filament\Resources\PageElementResource\Pages;

use App\Filament\Resources\PageElementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPageElements extends ListRecords
{
    protected static string $resource = PageElementResource::class;
    use ListRecords\Concerns\Translatable;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
