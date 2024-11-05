<?php

namespace App\Filament\Resources\ClockinRegisterResource\Pages;

use App\Filament\Resources\ClockinRegisterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClockinRegister extends EditRecord
{
    protected static string $resource = ClockinRegisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
