<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PedidoRelatorio extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.pedido-relatorio';

    protected static ?string $navigationGroup = 'Pedidos';
}
