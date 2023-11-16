<!DOCTYPE html>
<html>
<head>
    <title>Contact Page</title>
    <style>
        /* Some basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Contact Us</h1>
    <p>Fill in the form below to get in touch with us:</p>
    
    <!-- Contact Form -->
    <form method="post" action="contact_process.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <input type="submit" value="Submit">
    </form>
    
    <!-- Display Inbuilt Information -->
    <h2>Inbuilt Information:</h2>
    <p>Company Name: fb cakes</p>
    <p>Address: 123 Main Street, City, Country</p>
    <p>Email: info@yourcompany.com</p>
    <p>Phone: +1234567890</p>
</body>
</html>

