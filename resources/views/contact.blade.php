<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MySite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
        <div class="col-md-6">
            <div class="card-shadow">
                <div class="card-body col-md-12">
                    <h2 class="text-center mb-4" style="margin-top: auto;">Contact Us</h2>
                    @if(session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required><br>
                        </div>  
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required><br>
                        </div>

                        <div class="mb-3">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required><br>
                        </div>
                        <div class="mb-3">
                            <label for="message">Message:</label>
                            <textarea name="message" class="form-control" placeholder="Your Message" required></textarea><br>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <!-- Bootstrap 5 CDN JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
