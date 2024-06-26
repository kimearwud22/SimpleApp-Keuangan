<?php

namespace App\Filament\Resources\TransectionResource\Pages;

use App\Filament\Resources\TransectionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTransection extends EditRecord
{
    protected static string $resource = TransectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
