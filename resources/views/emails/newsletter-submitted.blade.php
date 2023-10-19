<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Newsletter {{env('APP_NAME')}}</title>
</head>
<body>
    <main class="mx-3 md:w-3/4 md:mx-auto">
        <h1 class="mb-5">Cher(e) <strong>abonné(e)</strong>,</h1>
        <p class="mb-3">
            Nous tenons à vous remercier chaleureusement pour avoir choisi de vous abonner à notre newsletter en utilisant votre adresse e-mail. 
            C'est un plaisir de vous accueillir parmi nos abonnés, et nous sommes ravis de partager avec vous les dernières mises à jour, 
            les informations exclusives et les nouvelles passionnantes de l'{{env('APP_NAME')}}.
        </p>
        <p>
            Grâce à votre abonnement, vous resterez informé(e) de nos offres spéciales, de nos événements à venir, de nos articles de blog pertinents et bien plus encore. 
            Nous nous engageons à fournir un contenu de qualité qui vous intéressera et vous sera utile.
        </p>
        <p>
            Si jamais vous souhaitez mettre à jour vos préférences d'abonnement ou vous désabonner à l'avenir, vous pouvez le faire en cliquant sur le lien de gestion de l'abonnement inclus dans chaque e-mail que nous envoyons.
        </p>
        <p>
            Si vous avez des questions, des commentaires ou des suggestions, n'hésitez pas à nous contacter à {{env('MAIL_FROM_ADDRESS')}} ou à {{ env('PHONE_FROM_ADDRESS') }}. Nous sommes là pour vous aider.
        </p>
        <p>
            Une fois de plus, merci de nous accorder votre confiance. Nous avons hâte de partager avec vous les meilleures informations et offres à venir.
        </p>
        <div>
            <p>Cordialement,</p>
            {{-- <p>[Votre nom ou le nom de votre équipe]</p> --}}
            <p>{{env('APP_NAME')}}</p>
            <p>{{env('APP_URL')}}</p>
        </div>
    </main>
</body>
</html>