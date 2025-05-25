<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.46.0/dist/apexcharts.min.js"></script>

<x-layout>
    <div class="bg-gray-900 min-h-screen">
        <div class="container mx-auto p-4 md:p-8">
            <!-- Header -->
            <header class="mb-6">
                <h1 class="text-3xl font-bold text-white text-center mb-2">Pendapatan Tutor/Admin</h1>
                <p class="text-center text-gray-400">Melihat pendapatan bulanan dan tahunan berdasarkan transaksi kursus</p>
            </header>

            <!-- Filter Tahun -->
            <div class="text-center mb-8">
                <select id="yearFilter" class="bg-gray-800 text-white border border-gray-600 rounded-lg py-2 px-4">
                    <option value="2025" selected>Tahun 2025</option>
                    <option value="2024">Tahun 2024</option>
                    <option value="2023">Tahun 2023</option>
                    <!-- Tambahkan tahun lainnya jika diperlukan -->
                </select>
            </div>

            <!-- Grafik Pendapatan -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Pendapatan Bulanan -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
                    <h2 class="text-2xl text-white mb-4 text-center">Pendapatan Bulanan - <span id="yearDisplay">{{ now()->year }}</span></h2>
                    <div id="monthlyChart"></div>
                </div>

                <!-- Pendapatan Tahunan -->
                <div class="bg-gray-800 rounded-lg p-6 shadow-lg">
                    <h2 class="text-2xl text-white mb-4 text-center">Pendapatan Tahunan</h2>
                    <div id="yearlyChart"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ambil grafik dengan menggunakan AJAX berdasarkan tahun yang dipilih
        const yearFilter = document.getElementById('yearFilter');
        yearFilter.addEventListener('change', function() {
            const selectedYear = this.value;
            document.getElementById('yearDisplay').textContent = selectedYear;
            updateCharts(selectedYear);
        });

        function updateCharts(year) {
            // Kirim request AJAX ke server untuk mendapatkan data berdasarkan tahun yang dipilih
            fetch(`/earnings-data/${year}`)
                .then(response => response.json())
                .then(data => {
                    // Update grafik bulanan
                    monthlyChart.updateOptions({
                        series: [{
                            name: 'Pendapatan (Rp)',
                            data: data.monthlyEarnings
                        }]
                    });

                    // Update grafik tahunan
                    yearlyChart.updateOptions({
                        series: [{
                            name: 'Pendapatan (Rp)',
                            data: data.yearlyEarnings
                        }]
                    });
                })
                .catch(error => console.error('Error:', error));
        }

        // Grafik Pendapatan Bulanan
        var monthlyOptions = {
            chart: {
                type: 'bar',
                height: 350,
                background: 'transparent',
            },
            series: [{
                name: 'Pendapatan (Rp)',
                data: [] // Data akan diupdate dengan AJAX
            }],
            xaxis: {
                categories: [@foreach(range(1,12) as $m)"{{ DateTime::createFromFormat('!m', $m)->format('F') }}",@endforeach],
                labels: {
                    style: {
                        colors: '#fff'
                    }
                }
            },
            title: {
                text: 'Pendapatan Bulanan',
                align: 'center',
                style: {
                    color: '#fff',
                    fontSize: '22px'
                }
            },
            plotOptions: {
                bar: {
                    borderRadius: 8,
                    horizontal: false,
                }
            },
            colors: ['#4CAF50']
        };

        // Grafik Pendapatan Tahunan
        var yearlyOptions = {
            chart: {
                type: 'bar',
                height: 350,
                background: 'transparent',
            },
            series: [{
                name: 'Pendapatan (Rp)',
                data: [] // Data akan diupdate dengan AJAX
            }],
            xaxis: {
                categories: [],
                labels: {
                    style: {
                        colors: '#fff'
                    }
                }
            },
            title: {
                text: 'Pendapatan Tahunan',
                align: 'center',
                style: {
                    color: '#fff',
                    fontSize: '22px'
                }
            },
            plotOptions: {
                bar: {
                    borderRadius: 8,
                    horizontal: false,
                }
            },
            colors: ['#FF9800']
        };

        var monthlyChart = new ApexCharts(document.querySelector("#monthlyChart"), monthlyOptions);
        monthlyChart.render();

        var yearlyChart = new ApexCharts(document.querySelector("#yearlyChart"), yearlyOptions);
        yearlyChart.render();

        // Initial data load
        updateCharts('{{ now()->year }}');
    </script>
</x-layout>
