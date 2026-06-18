<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Resume</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="p-8">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Upload Resume (PDF)</h1>

        @if(session('status'))
            <div style="padding:10px;background:#e6ffed;border:1px solid #a6f3c2;margin-bottom:12px">{{ session('status') }}</div>
        @endif

        @if($errors->any())
            <div style="padding:10px;background:#fff4f4;border:1px solid #f3a6a6;margin-bottom:12px">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('resume.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block mb-2 font-medium">Choose PDF</label>
                <input type="file" name="resume" accept="application/pdf">
            </div>
            <div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Upload</button>
                <a href="{{ url('/') }}" class="ml-2">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
