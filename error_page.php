<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;

        }


        .error-message {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: crimson;

            margin-bottom: 20px;
        }

        /* OK button styling */
        .ok-button {
            padding: 10px 20px;
            background-color: #2196F3;

            color: #fff;

            font-size: 18px;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }


        .ok-button:hover {
            background-color: #1976D2;

        }

        /* Media query for responsive design */
        @media (max-width: 600px) {
            .error-message {
                font-size: 20px;
            }

            .ok-button {
                font-size: 16px;
                padding: 8px 16px;
            }
        }
    </style>
</head>

<body>
    <div class="error-message">As a User You do not have permission to access this Function.</div>
    <button class="ok-button" onclick="goBack()">OK</button>

    <script>

        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>