<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload Resume</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            background: #06111f;
            color: #e2e7f5;
            font-family: 'Plus Jakarta Sans', sans-serif;
            margin: 0;
            padding: 0;
        }
        .page-shell {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .card {
            width: min(100%, 760px);
            background: rgba(12, 24, 41, 0.95);
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow: 0 30px 90px rgba(0, 0, 0, 0.35);
            border-radius: 28px;
            overflow: hidden;
        }
        .card-header {
            padding: 2rem 2rem 1.5rem;
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }
        .card-header h1 {
            margin: 0;
            font-size: 2.1rem;
            letter-spacing: -0.03em;
            color: #d6bcff;
        }
        .card-header p {
            margin: 0.75rem 0 0;
            color: #8f9bb3;
            line-height: 1.75;
        }
        .notice,
        .status-box {
            padding: 1rem 1.25rem;
            border-radius: 18px;
            margin-bottom: 1rem;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .notice {
            background: rgba(44, 140, 255, 0.1);
            border: 1px solid rgba(44, 140, 255, 0.25);
            color: #cbd7ff;
        }
        .status-box {
            background: rgba(76, 84, 100, 0.3);
            border: 1px solid rgba(255,255,255,0.08);
        }
        .status-box strong {
            display: block;
            margin-bottom: 0.4rem;
            color: #f8fafc;
        }
        .status-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: #7c3aed33;
            color: #d8b4fe;
            border-radius: 999px;
            padding: 0.55rem 1rem;
            font-size: 0.9rem;
            font-weight: 700;
            margin-top: 0.75rem;
        }
        .file-area {
            display: grid;
            gap: 1rem;
            background: rgba(255,255,255,0.04);
            border: 1px dashed rgba(255,255,255,0.15);
            border-radius: 22px;
            padding: 1.75rem;
        }
        .file-area label {
            font-weight: 700;
            color: #eef2ff;
        }
        .file-area input[type=file] {
            width: 100%;
            padding: 1rem 1rem;
            border-radius: 15px;
            border: 1px solid rgba(255,255,255,0.12);
            background: rgba(255,255,255,0.04);
            color: #eef2ff;
            cursor: pointer;
        }
        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
        }
        .button-primary,
        .button-secondary {
            border: none;
            border-radius: 999px;
            padding: 0.95rem 1.6rem;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s ease, background-color 0.2s ease;
        }
        .button-primary {
            background: #7c3aed;
            color: #ffffff;
        }
        .button-primary:hover {
            transform: translateY(-1px);
            background: #8b5cf6;
        }
        .button-secondary {
            background: rgba(255,255,255,0.06);
            color: #cbd5e1;
        }
        .button-secondary:hover {
            transform: translateY(-1px);
            background: rgba(255,255,255,0.12);
        }
        .download-link {
            color: #a78bfa;
            text-decoration: none;
            font-weight: 700;
        }
        .download-link:hover {
            text-decoration: underline;
        }
        .error-list {
            margin: 0;
            color: #fecaca;
            padding-left: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="page-shell">
        <div class="card">
            <div class="card-header">
                <h1>Resume Upload</h1>
                <p>This page is linked directly to the portfolio Download CV button. Uploading a new PDF here updates the resume that visitors download.</p>
            </div>
            <div style="padding: 1.75rem 2rem 2.5rem;">
                @if(session('status'))
                    <div class="notice">{{ session('status') }}</div>
                @endif

                @if($errors->any())
                    <div class="notice" style="background: rgba(248,113,113,0.12); border-color: rgba(248,113,113,0.25); color: #fecaca;">
                        <strong>Upload failed. Please fix the following:</strong>
                        <ul class="error-list">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="status-box">
                    <strong>Current resume status</strong>
                    <div>{{ $resumePdfExists ? 'A resume PDF is already uploaded and will be downloaded by the portfolio Download CV button.' : 'No resume PDF is uploaded yet. Upload one below to enable the Download CV button.' }}</div>
                    <div class="status-pill">{{ $resumePdfExists ? 'PDF resume available' : 'No PDF resume uploaded' }}</div>
                    @if($resumePdfExists)
                        <div style="margin-top: 1rem; font-size: 0.95rem; line-height: 1.6;">
                            <div><strong>File:</strong> resume.pdf</div>
                            <div><strong>Last updated:</strong> {{ $resumeUpdatedAt }}</div>
                            <a href="{{ route('download.cv') }}" class="download-link">Download current resume</a>
                        </div>
                    @else
                        <div style="margin-top: 1rem; font-size: 0.95rem; line-height: 1.6;">
                            This upload page is directly connected to the Download CV button on the main portfolio page.
                        </div>
                    @endif
                </div>

                <div class="status-box">
                    <strong>Resume text editor</strong>
                    <div>{{ $resumeTxtExists ? 'A text version of your resume exists and can be edited directly below.' : 'No resume text exists yet. You can type your resume here and save it.' }}</div>
                    <div class="status-pill">{{ $resumeTxtExists ? 'Text version available' : 'No text version yet' }}</div>
                    @if($resumeTxtExists)
                        <div style="margin-top: 1rem; font-size: 0.95rem; line-height: 1.6;">
                            <div><strong>Last updated:</strong> {{ $resumeTextUpdatedAt }}</div>
                        </div>
                    @endif
                </div>

                <form action="{{ route('resume.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="file-area">
                        <label for="resume">Choose PDF file</label>
                        <input id="resume" type="file" name="resume" accept="application/pdf">
                        <div style="color: #94a3b8; font-size: 0.95rem;">Only PDF files are accepted. Max file size: 5MB.</div>
                    </div>

                    <div class="file-area">
                        <label for="resume_text">Edit resume text directly</label>
                        <textarea id="resume_text" name="resume_text" rows="10" style="width:100%; min-height:220px; border-radius: 18px; border: 1px solid rgba(255,255,255,0.12); background: rgba(255,255,255,0.04); color: #eef2ff; padding: 1rem; font-family: 'Plus Jakarta Sans', sans-serif;">{{ old('resume_text', $resumeText) }}</textarea>
                        <div style="color: #94a3b8; font-size: 0.95rem;">Paste or edit your resume text here, then save. This text version is stored separately as resume.txt.</div>
                    </div>

                    <div class="actions">
                        <button type="submit" class="button-primary">Save Resume</button>
                        <a href="{{ url('/') }}" class="button-secondary">Back to website</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
