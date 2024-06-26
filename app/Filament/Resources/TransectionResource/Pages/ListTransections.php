<?php

namespace App\Filament\Resources\TransectionResource\Pages;

use App\Filament\Resources\TransectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTransections extends ListRecords
{
    protected static string $resource = TransectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
