<!-- resources/views/form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }
        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <form action="{{ route('store.data') }}" method="post">
        @csrf

        <label for="name">Nama:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label for="title">Judul:</label>
        <input type="text" name="title" value="{{ old('title') }}" required>
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label for="content">Isi:</label>
        <textarea name="content" required>{{ old('content') }}</textarea>
        @error('content')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <!-- menambahkan  input untuk data lainnya -->

        <button type="submit">Simpan</button>
    </form>

</body>
</html>
