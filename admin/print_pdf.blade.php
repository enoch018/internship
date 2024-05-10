<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Invoice</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      color: #333;
      text-align: center;
    }
    .invoice-details {
      margin-bottom: 20px;
    }
    .invoice-details p {
      margin: 5px 0;
    }
    .table {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Order Invoice</h1>

  <div class="invoice-details">
    <p><strong>User ID:</strong> {{ $order->user_id }}</p>
    <p><strong>Product ID:</strong> {{ $order->product_id }}</p>
    <p><strong>Customer Name:</strong> {{ $order->name }}</p>
    <p><strong>Email:</strong> {{ $order->email }}</p>
    <p><strong>Address:</strong> {{ $order->address }}</p>
    <p><strong>Phone:</strong> {{ $order->phone }}</p>
  </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Title</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $order->product_title }}</td>
        <td>{{ $order->quantity }}</td>
        <td>Rs.{{ $order->price }}</td>
      </tr>
    </tbody>
  </table>

  <div class="invoice-details">
    <p><strong>Payment Status:</strong> {{ $order->payment_status }}</p>
    <p><strong>Delivery Status:</strong> {{ $order->delivery_status }}</p>
  </div>
</div>

</body>
</html>
