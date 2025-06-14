@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="text-white">
    <h2 class="text-2xl font-bold mb-6">Hello Acc45, Ram</h2>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-[#1f1f1f] p-4 rounded">
            <div class="text-sm text-gray-400">Energy Usage</div>
            <div class="text-2xl font-bold">120 KWH</div>
        </div>
        <div class="bg-[#1f1f1f] p-4 rounded">
            <div class="text-sm text-gray-400">Savings</div>
            <div class="text-2xl font-bold text-green-400">15%</div>
        </div>
        <div class="bg-[#1f1f1f] p-4 rounded">
            <div class="text-sm text-gray-400">Cost Saving</div>
            <div class="text-2xl font-bold text-white">500$</div>
        </div>
        <div class="bg-[#1f1f1f] p-4 rounded">
            <div class="text-sm text-gray-400">Zones</div>
            <div class="text-2xl font-bold">10</div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <!-- Graphiques -->
        <div class="bg-[#1f1f1f] p-4 rounded">
            <h3 class="text-lg mb-2">Energy Saving Chart</h3>
            <canvas id="energyChart"></canvas>
        </div>
        <div class="bg-[#1f1f1f] p-4 rounded">
            <h3 class="text-lg mb-2">Cost Saving</h3>
            <canvas id="costChart"></canvas>
        </div>
    </div>

    <!-- Alerts -->
    <div class="bg-[#1f1f1f] p-4 rounded mb-4">
        <h3 class="text-lg font-semibold mb-2">Live Alerts</h3>
        <ul class="list-disc ml-5 text-sm text-red-400">
            <li>Zone B HVAC inefficiency detected – 15% Energy Loss</li>
            <li>Lighting system in Zone A offline</li>
        </ul>
    </div>

    <!-- Quick Actions -->
    <div class="bg-[#1f1f1f] p-4 rounded">
        <h3 class="text-lg font-semibold mb-2">Quick Actions</h3>
        <button class="bg-green-400 text-black px-4 py-1 rounded mr-2">Scan Network</button>
        <button class="bg-green-700 text-white px-4 py-1 rounded">Control Devices</button>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const energyCtx = document.getElementById('energyChart').getContext('2d');
    new Chart(energyCtx, {
        type: 'line',
        data: {
            labels: ['01 Aug', '02', '03', '04', '05', '06', '07'],
            datasets: [{
                label: 'Energy Saving',
                data: [60, 65, 70, 91, 75, 80, 85],
                borderColor: 'lime',
                backgroundColor: 'rgba(0,255,0,0.1)',
                fill: true,
                tension: 0.4
            }]
        }
    });

    const costCtx = document.getElementById('costChart').getContext('2d');
    new Chart(costCtx, {
        type: 'bar',
        data: {
            labels: ['Zone A', 'Zone B', 'Zone C'],
            datasets: [{
                label: 'Cost ($)',
                data: [50000, 86000, 40000],
                backgroundColor: ['#10b981', '#22c55e', '#4ade80']
            }]
        }
    });
</script>
@endpush
