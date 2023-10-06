@extends('layouts.app')

@section('title', 'Potensi Kelurahan')

@section('content')
    <div class="mt-3 mb-5 bg-white shadow-sm p-4 rounded">
        <div class="row row-cols-1">
            <div class="col col-lg-3 mt-5">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Potensi Jiwa</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Potensi Wilayah</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Sarana dan Prasarana</a>
                </div>
            </div>
            <div class="col col-lg-9">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <h4 class="text-center mt-5" id="list-item-1">Potensi Jiwa</h4>
                    <canvas id="chartJiwa"></canvas>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        <script>
            const ctx1 = document.getElementById('chartJiwa');
            new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: ['Laki-Laki', 'Perempuan', 'Total Jiwa','Jumlah KK'],
                    datasets: [{
                    label: '',
                    data: [17560, 17233, 34793, 11377],
                    borderWidth: 1
                    }]
                },
                
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endsection
@endsection