<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ProdutoRelatorio extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.produto-relatorio';

    protected static ?string $navigationGroup = 'Produtos';
}
