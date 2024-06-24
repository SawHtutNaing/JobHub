<?php

namespace App\Filament\Resources\ShowJobStaticResource\Pages;

use App\Filament\Resources\ShowJobStaticResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShowJobStatic extends EditRecord
{
    protected static string $resource = ShowJobStaticResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
