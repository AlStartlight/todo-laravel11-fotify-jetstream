<div class="bg-white shadow-md rounded-xl p-4 w-5/6 max-h-[313px] mx-10 mt-5">

    <!-- Chart Canvas -->
    <div class="flex justify-center items-center mt-4">
        <canvas id="taskStatusChart" class="w-48"></canvas>
    </div>

    <!-- Legend -->
    <div class="flex justify-around mt-4">
        @foreach ($data as $item)
            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-800">{{ $item['value'] }}%</span>
                <span class="font-semibold text-gray-800">{{ $item['total'] }} task</span>
                <div class="flex items-center space-x-1 mt-1">
                    <span class="w-2 h-2 rounded-full" style="background-color: {{ $item['color'] }}"></span>
                    <span class="text-sm text-gray-600">{{ $item['name'] }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Chart.js Script -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById("taskStatusChart").getContext("2d");

        new Chart(ctx, {
            type: "doughnut",
            data: {
                labels: @json(array_column($data, 'name')),
                datasets: [{
                    data: @json(array_column($data, 'value')),
                    backgroundColor: @json(array_column($data, 'color')),
                    borderWidth: 1,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: "50%",
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var index = tooltipItem.index;
                            var total = @json(array_column($data, 'total'))[index];
                            var percentage = @json(array_column($data, 'percentage'))[index];
                            return data.labels[index] + ': ' + total + ' (' + percentage + '%)';
                        }
                    }
                }
            }
        });
    });
</script>
