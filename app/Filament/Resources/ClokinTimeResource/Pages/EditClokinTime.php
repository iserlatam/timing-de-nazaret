<?php

namespace App\Filament\Resources\ClokinTimeResource\Pages;

use App\Filament\Resources\ClokinTimeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClokinTime extends EditRecord
{
    protected static string $resource = ClokinTimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
