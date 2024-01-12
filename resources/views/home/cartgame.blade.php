<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary CSS and scripts here -->

    <!-- Add your styles or include external CSS files -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: peachpuff;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #343a40;
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }

        .quantity-section {
            text-align: center;
            padding: 30px;
            background-color: lightgoldenrodyellow;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        .player_deg {
            max-width: 300px;
            margin: 0 auto;
        }

        .img_deg {
            width: 100%;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .title_deg {
            font-size: 1.5em;
            margin-bottom: 5px;
        }

        .des_deg {
            color: #6c757d;
        }

        h2 {
            color: #007bff;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 60px;
            padding: 5px;
            margin-bottom: 10px;
        }

        button {
            background-color: #28a745;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        .total-section {
            text-align: center;
            padding: 30px;
            background-color:lightgoldenrodyellow;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        #totalAmount {
            font-size: 1.2em;
            color: #dc3545;
        }
    </style>

    <!-- Include SweetAlert2 for displaying messages -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <!-- Add your header or navigation if needed -->
    <header>
        <h1>Match Cart</h1>
    </header>

    <div class="quantity-section">
        <div class="player_deg">
            <img class="img_deg" src="/gameimage/{{ $game->image }}" alt="Game Image">
            <h4 class="title_deg">{{ $game->title }}</h4>
            <p class="des_deg">{{ $game->game }}</p>
            <p class="des_deg">RM {{ $game->total }}</p>
        </div>

        <h2>Choose Quantity</h2>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" min="1" value="1">
        <br><br>
        <button class="btn btn-success" onclick="calculateTotal()">Calculate Total</button>
    </div>

    <div class="total-section">
        <h2>Total</h2>
        <p id="totalAmount">Total: RM {{ $game->total }} </p>
        <button class="btn btn-primary" onclick="confirmOrder()">Confirm Order</button>
    </div>

    <!-- Pass game price and title from PHP to JavaScript -->
    <script>
        var gamePrice = {{ $game->total }};
        var gameTitle = "{{ $game->title }}";

        function calculateTotal() {
            // Get the quantity from the input field
            var quantity = document.getElementById('quantity').value;

            // Calculate the total based on the quantity and game price
            var total = quantity * gamePrice;

            // Display the total amount
            document.getElementById('totalAmount').innerText = 'Total: RM ' + total;
        }

        function confirmOrder() {
            // Get the quantity from the input field
            var quantity = document.getElementById('quantity').value;

            // Display a confirmation message using SweetAlert2
            Swal.fire({
                icon: 'success',
                title: 'Order Confirmed!',
                text: `You have successfully ordered ${quantity} shirt(s) of "${gameTitle}" for a total of RM ${quantity * gamePrice}.`,
                confirmButtonText: 'OK'
            }).then((result) => {
                // Redirect to the previous page after clicking OK
                window.history.back();
            });
        }
    </script>
</body>
</html>
