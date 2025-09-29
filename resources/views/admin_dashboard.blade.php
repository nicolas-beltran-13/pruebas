<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Panel de Administrador - SkaterLife</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            margin-bottom: 30px;
        }
        .card {
            margin-bottom: 20px;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }
        .chart-container {
            position: relative;
            height: 400px; /* Ajusta la altura de las gráficas */
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Navbar con enlaces -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin SkaterLife</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="../modelo/categorias.php">Categorías</a></li>
      <li class="nav-item"><a class="nav-link" href="../modelo/clientes.php">Clientes</a></li>
      <li class="nav-item"><a class="nav-link" href="../modelo/inventario.php">Inventario</a></li>
      <li class="nav-item"><a class="nav-link" href="../modelo/pedidos.php">Pedidos</a></li>
      <li class="nav-item"><a class="nav-link" href="../modelo/productos.php">Productos</a></li>
      <li class="nav-item"><a class="nav-link" href="../modelo/usuarios.php">Usuarios</a></li>
      <li class="nav-item"><a class="nav-link" href="../modelo/envios.php">Envíos</a></li>
      <li class="nav-item"><a class="nav-link text-danger" href="../login.php">Cerrar sesión</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid py-4">
    <h2 class="mb-4 text-center">Dashboard Administrativo</h2>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Vistas de Productos (Últimos 7 días)</h5>
                    <button class="btn btn-light btn-sm" id="downloadViews">
                        <i class="fas fa-download mr-1"></i> Descargar Vistas
                    </button>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="viewsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Ventas Realizadas (Últimos 7 días)</h5>
                    <button class="btn btn-light btn-sm" id="downloadSales">
                        <i class="fas fa-download mr-1"></i> Descargar Ventas
                    </button>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="salesChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Resumen rápido -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5 class="card-title mb-0">Resumen Rápido</h5>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <h3><span class="badge badge-primary">1500</span></h3>
                            <p>Total de Vistas (Mes)</p>
                        </div>
                        <div class="col-md-4">
                            <h3><span class="badge badge-success">35</span></h3>
                            <p>Total de Ventas (Mes)</p>
                        </div>
                        <div class="col-md-4">
                            <h3><span class="badge badge-info">$2'500.000</span></h3>
                            <p>Ingresos Netos (Mes)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

<script>
// Datos de ejemplo
const viewsData = {
    labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'],
    data: [300, 450, 280, 500, 350, 600, 480]
};
const salesData = {
    labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'],
    data: [5, 8, 4, 10, 6, 12, 9]
};

document.addEventListener('DOMContentLoaded', function() {
    // Gráfica de Vistas
    const viewsCtx = document.getElementById('viewsChart').getContext('2d');
    new Chart(viewsCtx, {
        type: 'bar',
        data: {
            labels: viewsData.labels,
            datasets: [{
                label: 'Vistas de Página',
                data: viewsData.data,
                backgroundColor: 'rgba(0, 123, 255, 0.5)',
                borderColor: 'rgba(0, 123, 255, 1)',
                borderWidth: 1
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    });

    // Gráfica de Ventas
    const salesCtx = document.getElementById('salesChart').getContext('2d');
    new Chart(salesCtx, {
        type: 'line',
        data: {
            labels: salesData.labels,
            datasets: [{
                label: 'Número de Ventas',
                data: salesData.data,
                backgroundColor: 'rgba(40, 167, 69, 0.5)',
                borderColor: 'rgba(40, 167, 69, 1)',
                borderWidth: 1
            }]
        },
        options: { responsive: true, maintainAspectRatio: false }
    });

    // Función para exportar Excel
    function exportToExcel(data, fileName, sheetName) {
        const ws = XLSX.utils.aoa_to_sheet([
            ["Día", "Valor"],
            ...data.labels.map((label, index) => [label, data.data[index]])
        ]);
        const wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, sheetName);
        XLSX.writeFile(wb, fileName + '.xlsx');
    }

    document.getElementById('downloadViews').addEventListener('click', () => {
        exportToExcel(viewsData, 'Vistas_SkaterLife', 'Vistas');
    });
    document.getElementById('downloadSales').addEventListener('click', () => {
        exportToExcel(salesData, 'Ventas_SkaterLife', 'Ventas');
    });
});
</script>

</body>
</html>
