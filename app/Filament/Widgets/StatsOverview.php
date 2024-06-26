<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pemasukan', '192.1k')
                
                ->color('success'),
            Stat::make('Total Pengeluaran', '21%'),
            Stat::make('Selisih', '3:12'),
        ];
    }
}
