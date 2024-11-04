<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d7ccc8; 
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
        }
        .form-container {
            max-width: 400px;
            width: 100%;
            background: #ffffff; 
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center; 
        }
        h2 {
            color: #795548;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #6d4c41; 
        }
        input[type="text"], input[type="file"] {
            width: calc(100% - 20px); 
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #795548;
            border-radius: 4px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus, input[type="file"]:focus {
            border-color: #5d4037;
            outline: none;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #6d4c41;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #5d4037; 
        }
        .error-list {
            background-color: #ffebee;
            color: #d50000; 
            padding: 10px;
            border: 1px solid #d50000;
            border-radius: 4px;
            margin-top: 20px;
            text-align: left; 
        }
    </style>
</head>
<body>

<div class="form-container">
  
    <form action="{{ route('sendform') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">الاسم</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="file">تحميل الملف</label>
            <input type="file" name="file" id="file" required>
        </div>
        <button type="submit">إرسال</button>
    </form>

    @if ($errors->any())
        <div class="error-list">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

</body>
</html>
