<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Nouveau contact</title>
</head>
<body>
    <main class="mx-3 md:w-3/4 md:mx-auto">
        <h1 class="mb-5">Cher(e) <strong>{{ $contact->name }}</strong>,</h1>
        <p class="mb-3">
            Nous vous remercions d'avoir pris le temps de remplir notre formulaire de contact. 
            Votre message a bien été reçu et nous allons l'examiner dans les plus brefs délais.
        </p>
        <div class="mb-4">
            <h2>Détails de votre message :</h2>
            <ul>
                <li>Nom : <strong>{{ $contact->name }}</strong></li>
                <li>Email : <strong>{{ $contact->email }}</strong></li>
                <li>Sujet : <strong>{{ $contact->subject }}</strong></li>
            </ul>
        </div>
        <div class="mb-5">
            <h3>Message</h3>
            <p>{{ $contact->message }}</p>
        </div>
        <div>
            <p>Nous vous recontacterons dès que possible pour répondre à votre demande ou pour discuter de tout autre sujet que vous avez soulevé.</p>
            <p>
                Si vous avez des questions supplémentaires ou si vous avez besoin d'une assistance immédiate, n'hésitez pas à nous contacter par email à {{env('MAIL_FROM_ADDRESS')}} ou par téléphone au 
                @foreach (\App\Models\SiteContact::all() as $contact)
                    {{ $contact->contact}}
                    @if (!$loop->last)
                         / 
                    @endif
                @endforeach.
            </p>
            <p>
                Encore une fois, merci de nous avoir contactés. Nous sommes là pour vous aider.
            </p>
        </div>
        <div>
            <p>Cordialement,</p>
            {{-- <p>[Votre nom ou le nom de votre équipe]</p> --}}
            <p>{{env('APP_NAME')}}</p>
        </div>
    </main>
</body>
</html>