<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $address = htmlspecialchars($_POST['address']); // Adding address field
    $password = htmlspecialchars($_POST['password']); // In a real app, never expose passwords

    echo "
    <div style='
        display: flex; 
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
        font-family: \"Poppins\", Arial, sans-serif; 
        background-color: #f9f9f9; 
        margin: 0;'>
        <div style='
            background: #f0f0f0; 
            padding: 30px 40px; 
            border-radius: 15px; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            text-align: center; 
            animation: fadeIn 1.2s ease-in-out;'>
            <h2 style='margin-bottom: 20px; font-size: 1.8em; font-weight: 600; color: #333;'>
                🎉 Registration Successful!
            </h2>
            <p style='margin-bottom: 10px; font-size: 1.2em; color: #555;'><strong>Name:</strong> $name</p>
            <p style='margin-bottom: 10px; font-size: 1.2em; color: #555;'><strong>Email:</strong> $email</p>
            <p style='margin-bottom: 10px; font-size: 1.2em; color: #555;'><strong>Address:</strong> $address</p>
            <p style='margin-bottom: 20px; font-size: 1.2em; color: #555;'><strong>Password:</strong> (hidden for security)</p>
            <a href='index.html' style='
                display: inline-block;
                margin-top: 20px; 
                padding: 10px 20px; 
                background-color: #007bff; 
                color: white; 
                text-decoration: none; 
                border-radius: 5px; 
                font-size: 1em; 
                font-weight: 500; 
                transition: background-color 0.3s ease;'>
                Go Back
            </a>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        body {
            margin: 0;
            background-color: #f9f9f9; /* Light gray background */
        }

        a:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }
    </style>
    ";
} else {
    echo "
    <div style='
        display: flex; 
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
        font-family: Arial, sans-serif; 
        background-color: #f9f9f9; 
        color: #333; 
        text-align: center;'>
        <p style='font-size: 1.5em;'>🚫 Invalid request. Please submit the form correctly.</p>
        <a href='index.html' style='
            display: inline-block;
            margin-top: 20px; 
            padding: 10px 20px; 
            background-color: #007bff; 
            color: white; 
            text-decoration: none; 
            border-radius: 5px; 
            font-size: 1em; 
            font-weight: 500; 
            transition: background-color 0.3s ease;'>
            Go Back
        </a>
    </div>
    ";
}
?>




