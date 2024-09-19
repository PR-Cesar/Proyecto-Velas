<html></html>
 <head>
  <title>
   Estado de Facturas
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #ffffff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ccc;
        }
        .header img {
            height: 50px;
        }
        .header .nav {
            display: flex;
            gap: 10px;
        }
        .header .nav button {
            background-color: #a39268;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
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
        .content h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .content .filter {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .content .filter button {
            background-color: #a39268;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
        }
        .table-container {
            background-color: #d3c7af;
            border-radius: 10px;
            padding: 20px;
        }
        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }
        .table-container th, .table-container td {
            padding: 10px;
            text-align: left;
        }
        .table-container th {
            background-color: #a39268;
            color: white;
        }
        .table-container td {
            background-color: #e0e0e0;
            border-bottom: 1px solid #ccc;
        }
        .table-container .status {
            background-color: #8bc34a;
            color: white;
            padding: 5px 10px;
            border-radius: 10px;
            text-align: center;
        }
        .table-container .actions i {
            margin: 0 5px;
            cursor: pointer;
        }
        .table-container .date {
            background-color: #c1b299;
            padding: 10px;
            font-weight: bold;
        }
  </style>
 </head>
 <body>
  <div class="header">
   <img alt="Grand Velas Logo" src="https://placehold.co/100x50"/>
   <div class="nav">
    <button>
     Back-up
    </button>
    <button>
     Proveedores
    </button>
    <button>
     Agenda
    </button>
    <button>
     Solicitud
    </button>
    <button>
     Usuarios
    </button>
   </div>
   <div class="user-info">
    <i class="fas fa-user-circle">
    </i>
    <span>
     Guest 1
    </span>
   </div>
  </div>
  <div class="content">
   <h2>
    Estado de facturas
   </h2>
   <div class="filter">
    <button>
     Fechas
     <i class="fas fa-caret-down">
     </i>
    </button>
   </div>
   <div class="table-container">
    <table>
     <thead>
      <tr>
       <th>
        Codigo de Proveedor
       </th>
       <th>
        Nombre Proveedor
       </th>
       <th>
        Total $$$$
       </th>
       <th>
        Estado
       </th>
       <th>
        Historico
       </th>
      </tr>
     </thead>
     <tbody>
      <tr>
       <td>
        PDV0001
       </td>
       <td>
        MAXICARNE
       </td>
       <td>
        $30,000.00
       </td>
       <td>
        <span class="status">
         Completado
        </span>
       </td>
       <td class="actions">
        <i class="fas fa-save">
        </i>
        <i class="fas fa-eye">
        </i>
        <i class="fas fa-check">
        </i>
        <i class="fas fa-pen">
        </i>
        <i class="fas fa-trash">
        </i>
       </td>
      </tr>
      <tr>
       <td>
        PDV0001
       </td>
       <td>
        MAXICARNE
       </td>
       <td>
        $30,000.00
       </td>
       <td>
        <span class="status">
         Completado
        </span>
       </td>
       <td class="actions">
        <i class="fas fa-save">
        </i>
        <i class="fas fa-eye">
        </i>
        <i class="fas fa-check">
        </i>
        <i class="fas fa-pen">
        </i>
        <i class="fas fa-trash">
        </i>
       </td>
      </tr>
      <tr>
       <td>
        PDV0001
       </td>
       <td>
        MAXICARNE
       </td>
       <td>
        $30,000.00
       </td>
       <td>
        <span class="status">
         Completado
        </span>
       </td>
       <td class="actions">
        <i class="fas fa-save">
        </i>
        <i class="fas fa-eye">
        </i>
        <i class="fas fa-check">
        </i>
        <i class="fas fa-pen">
        </i>
        <i class="fas fa-trash">
        </i>
       </td>
      </tr>
      <tr>
       <td>
        PDV0001
       </td>
       <td>
        MAXICARNE
       </td>
       <td>
        $30,000.00
       </td>
       <td>
        <span class="status">
         Completado
        </span>
       </td>
       <td class="actions">
        <i class="fas fa-save">
        </i>
        <i class="fas fa-eye">
        </i>
        <i class="fas fa-check">
        </i>
        <i class="fas fa-pen">
        </i>
        <i class="fas fa-trash">
        </i>
       </td>
      </tr>
      <tr>
       <td>
        PDV0001
       </td>
       <td>
        MAXICARNE
       </td>
       <td>
        $30,000.00
       </td>
       <td>
        <span class="status">
         Completado
        </span>
       </td>
       <td class="actions">
        <i class="fas fa-save">
        </i>
        <i class="fas fa-eye">
        </i>
        <i class="fas fa-check">
        </i>
        <i class="fas fa-pen">
        </i>
        <i class="fas fa-trash">
        </i>
       </td>
      </tr>
      <tr>
       <td>
        PDV0001
       </td>
       <td>
        MAXICARNE
       </td>
       <td>
        $30,000.00
       </td>
       <td>
        <span class="status">
         Completado
        </span>
       </td>
       <td class="actions">
        <i class="fas fa-save">
        </i>
        <i class="fas fa-eye">
        </i>
        <i class="fas fa-check">
        </i>
        <i class="fas fa-pen">
        </i>
        <i class="fas fa-trash">
        </i>
       </td>
      </tr>
     </tbody>
    </table>
    <div class="date">
     Miercoles, 11 de Septiembre 2024
    </div>
    <table>
     <tbody>
      <tr>
       <td>
        PDV0001
       </td>
       <td>
        MAXICARNE
       </td>
       <td>
        $30,000.00
       </td>
       <td>
        <span class="status">
         Completado
        </span>
       </td>
       <td class="actions">
        <i class="fas fa-save">
        </i>
        <i class="fas fa-eye">
        </i>
        <i class="fas fa-check">
        </i>
        <i class="fas fa-pen">
        </i>
        <i class="fas fa-trash">
        </i>
       </td>
      </tr>
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>