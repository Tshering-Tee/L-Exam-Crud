<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .form-container h2 {
            text-align: center;
            color: #4682b4; 
            margin-bottom: 20px;
        }

        .error-container {
            background-color: #ffebeb;
            color: #d9534f; 
            border: 1px solid #d9534f;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .error-container ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .error-container li {
            margin: 5px 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #4682b4;
            font-weight: bold;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #4682b4;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group textarea {
            resize: none;
            height: 80px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #4682b4;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-container button:hover {
            background-color: #5a9bd4;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Product Form</h2>
        @if($errors->any())
            <div class="error-container">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('product.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter product name">
            </div>

            <div class="form-group">
                <label for="qty">Quantity:</label>
                <input type="number" id="qty" name="qty" placeholder="Enter quantity">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" placeholder="Enter price" step="0.01">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" placeholder="Enter product description"></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
