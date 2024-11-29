<?php

namespace App\Filament\Resources\ChequesResource\Pages;

use App\Filament\Resources\ChequesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCheques extends EditRecord
{
    protected static string $resource = ChequesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
