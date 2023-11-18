<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

        .product {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
        }

        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        #cart {
            border: 1px solid #ddd;
            padding: 10px;
        }

        #cart-items li {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #cart-items img {
            max-width: 50px;
            max-height: 50px;
            margin-right: 10px;
        }

        .remove-btn {
            background-color: #ff6666;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <header>
        <h1>Trang Giỏ Hàng</h1>
    </header>

    <main>
        <?php
        function addToCart($productId, $productName, $productPrice) {
            $cart = json_decode($_SESSION['cart'], true) ?? [];
            $existingItem = array_filter($cart, function ($item) use ($productId) {
                return $item['id'] === $productId;
            });

            if ($existingItem) {
                $existingItemId = key($existingItem);
                $cart[$existingItemId]['quantity'] += 1;
            } else {
                $cart[] = ['id' => $productId, 'name' => $productName, 'price' => $productPrice, 'quantity' => 1];
            }

            $_SESSION['cart'] = json_encode($cart);
            displayCart();
        }

        function displayCart() {
            $cartItems = json_decode($_SESSION['cart'], true) ?? [];
            $cartList = '<ul id="cart-items">';
            $total = 0;

            foreach ($cartItems as $item) {
                $cartList .= '<li>';
                $cartList .= '<img src="path/to/' . $item['id'] . '.jpg" alt="' . $item['name'] . '">';
                $cartList .= '<div>';
                $cartList .= '<span>' . $item['name'] . ' - $' . number_format($item['price'], 2) . ' x' . $item['quantity'] . '</span>';
                $cartList .= '<button class="remove-btn" onclick="removeFromCart(\'' . $item['id'] . '\')">Xóa</button>';
                $cartList .= '</div>';
                $cartList .= '</li>';
                $total += $item['price'] * $item['quantity'];
            }

            $cartList .= '</ul>';

            echo $cartList;
            echo '<p id="total">Tổng cộng: $' . number_format($total, 2) . '</p>';
        }

        function removeFromCart($productId) {
            $cart = json_decode($_SESSION['cart'], true) ?? [];
            $updatedCart = array_filter($cart, function ($item) use ($productId) {
                return $item['id'] !== $productId;
            });

            $_SESSION['cart'] = json_encode(array_values($updatedCart));
            displayCart();
        }

        function clearCart() {
            unset($_SESSION['cart']);
            displayCart();
        }

        session_start();

        // Hiển thị giỏ hàng khi trang được tải
        displayCart();
        ?>

        <div class="product" id="product1">
            <img src="path/to/product1.jpg" alt="Sách Học JavaScript">
            <h2>Sách Học JavaScript</h2>
            <p>Giá: $19.99</p>
            <button onclick="addToCart('product1', 'Sách Học JavaScript', 19.99)">Thêm vào giỏ hàng</button>
        </div>

        <div class="product" id="product2">
            <img src="path/to/product2.jpg" alt="Sách Thiết Kế Web">
            <h2>Sách Thiết Kế Web</h2>
            <p>Giá: $29.99</p>
            <button onclick="addToCart('product2', 'Sách Thiết Kế Web', 29.99)">Thêm vào giỏ hàng</button>
        </div>

        <div id="cart">
            <h2>Giỏ Hàng</h2>
            <?php displayCart(); ?>
            <button onclick="clearCart()">Xóa giỏ hàng</button>
        </div>
    </main>

    </body>
</html>
