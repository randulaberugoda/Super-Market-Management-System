<!DOCTYPE html>
<html>

<head>
    <title>Supermarket Billing System</title>

    <style>
        * {
            margin: 0;
            padding: 0;

        }


        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #333;
            padding: 10px 20px;
            color: #fff;
        }

        .header-left {
            display: flex;
        }

        .header-left h1 {
            color: aqua;
            text-shadow: 2px 2px 5px crimson;

        }

        .header-left img {
            max-width: 80px;
            margin-right: 20px;

        }

        .header-right p {
            margin-left: 20px;

        }

        table {
            margin-bottom: 20px;
            border: 1px solid black;
            background-color: aliceblue;
            border-radius: 15px;
            padding: 10px;
            margin-left: 100%;


        }

        input {
            border-radius: 15px;
            font-size: large;
        }

        td {
            padding: 5px;
        }

        button {

            display: inline-block;
            padding: 15px 30px;
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            border: 2px solid #3498db;
            border-radius: 30px;
            transition: all 0.3s ease;
            margin-top: 10px;
        }


        button:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            color: #fff;
            transition: all 0.3s ease;
            border: solid;
            border-color: #fff;
        }

        .btn {
            align-content: end;
            display: flex;
        }

        label {
            color: black;
            font-size: large;
        }

        h1 {

            color: black;

        }

        h2 {
            color: black;
            font-size: 30px;


        }

        h3,
        th,
        tbody {

            padding: 10px;
            margin-left: 70%;

        }

        h4 {
            margin-left: 85%;
            font-size: 40px;
            margin-bottom: 10px;
        }

        h5 {
            font-size: 20px;
        }

        .containerbig {
            display: flex;


        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .content {

            display: flex;
            justify-content: center;
            align-items: center;

        }

        .menu {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .menu a {

            padding: 15px 20px;
            color: #333;
            text-decoration: none;
        }



        .customer-count {
            display: flex;
            position: relative;
            color: #333;
            font-weight: bold;
            font-size: larger;
            padding: 10px;


        }

        .sidebar {

            min-height: 250px;
            min-width: 300px;

            display: flex;
            flex-direction: column;
            justify-content: space-between;
            top: 0;
            left: 0;
            padding: 2%;
            background: #333;
            color: #fff;
            margin-bottom: auto;
            border: solid;
            border-color: #fff;

        }

        .sidebar-menus {
            display: flex;
            flex-direction: column;
            position: relative;

        }

        .sidebar-menus a {
            padding: 5% 8%;
            margin: 0.5rem 0;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 1rem;
            text-decoration: none;
            color: var(--whiteColor);
            border: solid;
            border-color: #fff;
        }

        .sidebar-menus a:hover {

            border-radius: 50px;
            transition: all 0.3s ease;
            border: solid;
            border-color: aqua;
        }

        .home-button {
            display: inline-block;
            padding: 15px 30px;
            text-decoration: none;
            background-color: #3498db;
            color: #fff;
            border: 2px solid #3498db;
            border-radius: 30px;
            transition: all 0.3s ease;
            width: 30px;
            align-items: center;
        }

        /* Button hover effect */
        .home-button:hover {
            background-color: #2980b9;
            border-color: #2980b9;
            color: #fff;
            transition: all 0.3s ease;
            border: solid;
            border-color: #fff;
        }


        /* Footer Styles */
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 5px;

        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .footer-section {
            flex: 1;
            min-width: 200px;
            margin: 10px;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer-section p {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 5px;
        }

        .footer-section a {
            color: #fff;
            text-decoration: none;
        }

        .footer-bottom {
            text-align: center;
            justify-content: center;
            padding: 20px;
            background-color: #222;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: 100vh;
                position: relative;
            }


        }
    </style>
</head>

<body>
    <header>
        <div class="header-left">
            <img src="SMS1.png" alt="Supermarket Logo">
            <h1>S M S</h1>
        </div>
        <div class="header-center">
            <h2 style="color: aqua;">Supplier Management System</h2>
        </div>
        <div class="header-right">
            <p><img src="user1.png" style="height: 15px; width: 15px;">

            </p>

            <p id="datetime"></p>
        </div>
    </header>

    <div class="containerbig">
        <div class="sidebar">

            <!--list of menus-->
            <div class="sidebar-menus">
                <a href="CustomerManageHome.php">Customer Management System</a>
                <a href="#">Employee Managment System</a>
                <a href="#">Inventory Mnagement System</a>
                <a href="SupplierManageHome.php">Supplier Management System</a>
                <a href="BillingSystem.php">Billing System</a>

                <div class="button-container">


                    <a href="home_admin.php" class="home-button">Home</a>

                </div>
            </div>
        </div>
        <div class="container">

            <h4>Invoice</h4>
            <table>
                <tr>
                    <td>
                        <label for="product">Product:</label>
                    </td>
                    <td>
                        <input type="text" id="product" />
                    </td>

                </tr>
                <tr>
                    <td>
                        <label for="quantity">Quantity</label>
                    </td>
                    <td>
                        <input type="number" id="quantity" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="price">Price</label>
                    </td>
                    <td>
                        <input type="number" id="price" />
                    </td>
                </tr>
                <td colspan="2">
                    <button onclick="addItem()">Add Item</button>
                </td>
            </table>

            <table id="billTable">
                <thead>
                    <tr>
                        <th>Products</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="billBody"></tbody>
            </table>
            <h3>Total bill: RS.<span id="totalAmount">0</span>/=</h3>


        </div>
    </div>








    <script>

        let billItems = [];

        function addItem() {
            const product = document.getElementById('product').value;
            const quantity = parseInt(document.getElementById('quantity').value);
            const price = parseFloat(document.getElementById('price').value);

            if (product && quantity && price) {
                const total = quantity * price;
                const item = {
                    product: product,
                    quantity: quantity,
                    price: price,
                    total: total
                };
                billItems.push(item);

                displayBillItems();
                calculateTotalAmount();

                document.getElementById('product').value = '';
                document.getElementById('quantity').value = '';
                document.getElementById('price').value = '';
            }
        }

        function removeItem(index) {
            billItems.splice(index, 1);
            displayBillItems();
            calculateTotalAmount();
        }

        function displayBillItems() {
            const billBody = document.getElementById('billBody');
            billBody.innerHTML = '';

            for (let i = 0; i < billItems.length; i++) {
                const item = billItems[i];

                const row = document.createElement('tr');

                const productCell = document.createElement('td');
                productCell.textContent = item.product;
                row.appendChild(productCell);

                const quantityCell = document.createElement('td');
                quantityCell.textContent = item.quantity;
                row.appendChild(quantityCell);

                const priceCell = document.createElement('td');
                priceCell.textContent = item.price.toFixed(2);
                row.appendChild(priceCell);

                const totalCell = document.createElement('td');
                totalCell.textContent = item.total.toFixed(2);
                row.appendChild(totalCell);

                const removeCell = document.createElement('td');
                const removeButton = document.createElement('button');
                removeButton.textContent = 'X';
                removeButton.addEventListener('click', () => removeItem(i));
                removeCell.appendChild(removeButton);
                row.appendChild(removeCell);

                billBody.appendChild(row);
            }
        }

        function calculateTotalAmount() {
            let totalAmount = 0;
            for (let i = 0; i < billItems.length; i++) {
                totalAmount += billItems[i].total;
            }
            document.getElementById('totalAmount').textContent = totalAmount.toFixed(2);
        }

    </script>
    <script src="home.js"></script>

</body>
<footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h5>About Us</h5>
            <p> We have been serving our community for many years, providing top-quality products and
                exceptional
                service. At our supermarket, we take pride in offering a wide selection of fresh produce, pantry
                staples, and household essentials. Our dedicated team is committed to ensuring your shopping
                experience is convenient and enjoyable.</p>
        </div>
        <div class="footer-section contact">
            <h5>Contact Information</h5>
            <p>Email: SMS@supermarket.com</p>
            <p>Phone: +94-456-7890</p>
            <p>Address: 123 Main St, City, Country</p>
        </div>
        <div class="footer-section links">
            <h5>Quick Links</h5>
            <ul>

                <li><a href="SupplierManageHome.php">Supplier Management</a></li>
                <li><a href="#">Inventory Management</a></li>
                <li><a href="#">Employee Management</a></li>
                <li><a href="CustomerManageHome.php">Customer Management</a></li>
                <li><a href="BillingSystem.php">Billing System</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        &copy; 2023 Supermarket Management System | Developed by Team Dev Infinity
    </div>
</footer>

</html>