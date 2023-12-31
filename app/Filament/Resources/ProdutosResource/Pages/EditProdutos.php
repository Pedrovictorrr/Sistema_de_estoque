<?php

namespace App\Filament\Resources\ProdutosResource\Pages;

use App\Filament\Resources\ProdutosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProdutos extends EditRecord
{
    protected static string $resource = ProdutosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
