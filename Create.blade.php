
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Upload Form</title>
</head>
<body>
    <h1>Validation</h1>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
       @csrf
       <div>            <label for="name">Name (Enter 5 characters):</label>     
               <input type="text" id="name" name="name" required>
            @error('name')          
                  <div style="color:red;">{{ $message }}</div>    
                          @enderror
       </div>

        <div>
            <label for="file">Upload Image:</label>
            <input type="file" id="file" name="file" required>
            @error('file')
               <div style="color:red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>

        @if(session('success'))
            <div style="color:green;">{{ session('success') }}</div>
       @endif
    </form>
</body>
</html>
