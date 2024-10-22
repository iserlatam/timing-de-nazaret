<?php

namespace App\Filament\Resources\TimeEntrieResource\Pages;

use App\Filament\Resources\TimeEntrieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTimeEntrie extends EditRecord
{
    protected static string $resource = TimeEntrieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
