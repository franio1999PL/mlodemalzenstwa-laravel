<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nowe zgłoszenie</title>
    <style>
        h1,
        p {
            color: white;
        }

    </style>
</head>
<body style="background: #333; padding: 2rem">
    <h1>Nowe zgłoszenie z szkoły młodych małżeństw</h1>
    <p><strong>Imię małżonki:</strong> {{ $application->wife_name }}</p>
    <p><strong>Imię małżonka:</strong> {{ $application->husband_name }}</p>
    <p><strong>Wiek Małżeństwa:</strong> {{ $application->age }}</p>
    <p><strong>Nazwisko:</strong> {{ $application->surname }}</p>
    <p><strong>Miasto:</strong> {{ $application->city }}</p>
    <p><strong>Email:</strong> {{ $application->email }}</p>
    <p><strong>Wiadomość:</strong> {{ $application->message }}</p>
</body>
</html>
