<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <h1>Servi_Farma</h1>

    <p></p>

    <p><strong>Hola :</strong>{{$contacto['name']}}</p>
    <p><strong>Correo :</strong>{{$contacto['email']}}</p>
    <p><strong>Factura De parte De servi_farma:</strong>{{$contacto['description']}}</p>
    <p><strong>Producto:</strong>{{$contacto['products']}}</p>
    <p><strong>Cantidad :</strong>{{$contacto['quantity']}}</p>
    <p><strong>Precio Por Cantidad :</strong>{{$contacto['price_quantity']}}</p>
    <p><strong>Total :</strong>{{$contacto['total']}}</p>
    
    

</body>
      
</html>