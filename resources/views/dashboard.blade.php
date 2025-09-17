@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <span class="d-block mb-2">Usuarios</span>
                        <h4 class="card-title mb-0">{{ $usersCount }}</h4>
                    </div>
                    <div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-primary"><i class="ti ti-user"></i></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <span class="d-block mb-2">Productos</span>
                        <h4 class="card-title mb-0">{{ $productsCount }}</h4>
                    </div>
                    <div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-success"><i class="ti ti-package"></i></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div>
                        <span class="d-block mb-2">Clientes</span>
                        <h4 class="card-title mb-0">{{ $clientsCount }}</h4>
                    </div>
                    <div class="avatar flex-shrink-0"><span class="avatar-initial rounded bg-label-warning"><i class="ti ti-users"></i></span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Resumen de Entidades (barras)</h5>
            </div>
            <div class="card-body">
                <div id="chart-dashboard-counts"></div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Clientes por Rubro</h5>
            </div>
            <div class="card-body">
                <div id="chart-clientes-rubro"></div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Actividad últimos 7 días</h5>
            </div>
            <div class="card-body">
                <div id="chart-7days"></div>
            </div>
        </div>
    </div>
    
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const el = document.querySelector('#chart-dashboard-counts');
        if (!el || typeof ApexCharts === 'undefined') return;
        const options = {
            chart: { type: 'bar', height: 300, toolbar: { show: false } },
            series: [{ name: 'Cantidad', data: [{{ $usersCount }}, {{ $productsCount }}, {{ $clientsCount }}] }],
            xaxis: { categories: ['Usuarios', 'Productos', 'Clientes'] },
            colors: ['#7367F0'],
            plotOptions: { bar: { borderRadius: 6, columnWidth: '40%' } },
            dataLabels: { enabled: false },
            grid: { strokeDashArray: 4 }
        };
        const chart = new ApexCharts(el, options);
        chart.render();
    });
</script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const el = document.querySelector('#chart-clientes-rubro');
            if (!el || typeof ApexCharts === 'undefined') return;
            const options = {
                chart: { type: 'donut', height: 300 },
                labels: @json($rubrosLabels ?? []),
                series: @json($rubrosValues ?? []),
                legend: { position: 'bottom' },
                dataLabels: { enabled: true }
            };
            const chart = new ApexCharts(el, options);
            chart.render();
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const el = document.querySelector('#chart-7days');
            if (!el || typeof ApexCharts === 'undefined') return;
            const options = {
                chart: { type: 'line', height: 320, toolbar: { show: false } },
                series: [
                    { name: 'Usuarios', data: @json($seriesUsers ?? []) },
                    { name: 'Productos', data: @json($seriesProducts ?? []) },
                    { name: 'Clientes', data: @json($seriesClients ?? []) }
                ],
                xaxis: { categories: @json($labels ?? []) },
                colors: ['#7367F0', '#28C76F', '#FF9F43'],
                dataLabels: { enabled: false },
                stroke: { curve: 'smooth', width: 3 },
                grid: { strokeDashArray: 4 },
                legend: { position: 'top' }
            };
            const chart = new ApexCharts(el, options);
            chart.render();
        });
    </script>
@endpush
