<html></html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
        }
        .header img {
            height: 75px;
        }
        .header .nav {
            display: flex;
            gap: 20px;
        }
        .header .nav button {
            background-color: #B59A6A;
            border: none;
            color: white;
            padding: 10px 50px;
            cursor: pointer;
            border-radius: 15px;
        }
        .header .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .header .user-info i {
            font-size: 24px;
        }
        .header .user-info span {
            font-size: 18px;
        }
        .content {
            padding: 20px;
        }
        .reminders, .documents, .chart {
            background-color: #E0E0E0;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .reminders .reminder-item, .documents .document-item {
            background-color: #D3D3D3;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .documents .document-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .documents .document-item .status {
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }
        .documents .document-item .status.completed {
            background-color: #4CAF50;
        }
        .documents .document-item .status.pending {
            background-color: #FFFF00;
            color: black;
        }
        .chart {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .chart img {
            width: 100%;
            height: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://velasmeetingsmexico.com.mx/app/uploads/2016/09/GV_RM.png" alt="Grand Velas Logo">
        <div class="nav">
            <button>Back-up</button>
            <button>Proveedores</button>
            <button>Agenda</button>
            <button>Solicitud</button>
            <button>Usuarios</button>
        </div>
        <div class="user-info">
            <i class="fas fa-user-circle"></i>
            <span>Guest 1</span>
        </div>
    </div>
    <div class="content">
        <div class="reminders">
            <div class="reminder-item">Proveedor Maxicarne Estatus:Pendiente</div>
            <div class="reminder-item">Proveedor Maxicarne Estatus:Pendiente</div>
            <div class="reminder-item">Proveedor Maxicarne Estatus:Pendiente</div>
            <div class="reminder-item">Proveedor Maxicarne Estatus:Pendiente</div>
        </div>
        <div class="documents">
            <h3>Documentos generados en los ultimos 30 días.</h3>
            <p>Viernes,13 de Septiembre 2024</p>
            <div class="document-item">
                <span>PDV0001</span>
                <span>MAXICARNE</span>
                <span>$30,000.00</span>
                <span class="status completed">Completada</span>
            </div>
            <div class="document-item">
                <span>PDV0001</span>
                <span>MAXICARNE</span>
                <span>$30,000.00</span>
                <span class="status pending">Pendiente</span>
            </div>
            <p>Miercoles, 11 de Septiembre 2024</p>
            <div class="document-item">
                <span>FAC0001</span>
                <span>NOSE</span>
                <span>$15,000.00</span>
                <span class="status completed">Completada</span>
            </div>
            <div class="document-item">
                <span>FAC0001</span>
                <span>NOSE</span>
                <span>$15,000.00</span>
                <span class="status pending">Pendiente</span>
            </div>
        </div>
        <div class="chart">
            <h3>Total $$$ Meses seleccionados</h3>
            <img src="https://placehold.co/400x300" alt="Bar chart showing total $$$ for selected months for Europe, U.S., and Japan">
        </div>
    </div>
</body>
</html>