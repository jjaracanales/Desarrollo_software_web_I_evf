<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $usersCount = User::count();
        $productsCount = Product::count();
        $clientsCount = Client::count();

        $days = collect(range(6, 0))->map(function ($i) {
            return Carbon::today()->subDays($i);
        });
        $labels = $days->map->format('d/m');
        $periodStart = $days->first()->copy()->startOfDay();
        $now = Carbon::now();

        $usersDaily = User::select(DB::raw('DATE(created_at) as d'), DB::raw('COUNT(*) as c'))
            ->whereBetween('created_at', [$periodStart, $now])
            ->groupBy('d')
            ->pluck('c', 'd');
        $productsDaily = Product::select(DB::raw('DATE(created_at) as d'), DB::raw('COUNT(*) as c'))
            ->whereBetween('created_at', [$periodStart, $now])
            ->groupBy('d')
            ->pluck('c', 'd');
        $clientsDaily = Client::select(DB::raw('DATE(created_at) as d'), DB::raw('COUNT(*) as c'))
            ->whereBetween('created_at', [$periodStart, $now])
            ->groupBy('d')
            ->pluck('c', 'd');

        $seriesUsers = [];
        $seriesProducts = [];
        $seriesClients = [];
        foreach ($days as $day) {
            $key = $day->toDateString();
            $seriesUsers[] = (int) ($usersDaily[$key] ?? 0);
            $seriesProducts[] = (int) ($productsDaily[$key] ?? 0);
            $seriesClients[] = (int) ($clientsDaily[$key] ?? 0);
        }

        $rubros = Client::select('rubro', DB::raw('COUNT(*) as c'))
            ->groupBy('rubro')
            ->orderByDesc('c')
            ->limit(6)
            ->get();
        $rubrosLabels = $rubros->pluck('rubro');
        $rubrosValues = $rubros->pluck('c');

        return view('dashboard', compact(
            'usersCount', 'productsCount', 'clientsCount',
            'labels', 'seriesUsers', 'seriesProducts', 'seriesClients',
            'rubrosLabels', 'rubrosValues'
        ));
    }
}
