<?php

namespace App\Filament\Resources\ClokinTimeResource\Pages;

use App\Filament\Resources\ClokinTimeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClokinTimes extends ListRecords
{
    protected static string $resource = ClokinTimeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
