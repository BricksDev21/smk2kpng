@extends('layouts.app')

@section('content')
  <canvas id="myChart" height="100px"></canvas>
  {!! $visit !!}
  @push('js') 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
      
      var labels =  {!! json_encode($labe->toArray()) !!};
      var users =  {!! json_encode($dat->toArray()) !!};
  
      const data = {
        labels: labels,
        datasets: [{
          label: 'My First dataset',
          backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                        ],
          data: users,
        }]
      };
  
      const config = {
        type: 'line',
        data: data,
        options: {
        plugins: {
            legend: {
                display: false
            },
        }
    }
      };
  
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
  
</script>
@endpush
@endsection