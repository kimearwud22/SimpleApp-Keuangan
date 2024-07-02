<?php

namespace App\Filament\Resources\PortoResource\Pages;

use App\Filament\Resources\PortoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPorto extends EditRecord
{
    protected static string $resource = PortoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
