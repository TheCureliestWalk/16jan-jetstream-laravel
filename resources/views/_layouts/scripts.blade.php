@livewireScripts

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="//code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}" defer></script>

<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.js') }}" defer></script>

<!-- Datatable JS -->



<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    // Pie Chart Example
    var ctx = document.getElementById("donutChart");
    var donutChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Data One", "Data Two", "Data Three"],
            datasets: [{
                data: [57, 48 , 20],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });


</script>





