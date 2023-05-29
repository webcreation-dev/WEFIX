@component('mail::message')
Bienvenue {{$name}} . Veuillez cliquer sur le lien ci-dessous pour réinitialiser votre compte pour gérez
    @component('mail::button', ['url'=> $url])
    Click ici pour vous inscrire

    <p class="mt-3">
        <strong>{{ $quoteData['appointment'][0]['surname'] }}</strong>, nous vous attendons avec impatience le <strong>{{ $quoteData['schedule'][0]['day'] }} {{ $quoteData['schedule'][0]['date'] }} {{ date('Y') }}</strong> à <strong>{{ $quoteData['schedule'][0]['hour'] }}</strong>, dans la boutique <strong>{{ $quoteData['store'][0]['name'] }}</strong>, pour la réparation de votre <strong>{{ $quoteData['model']->name }}</strong> !
    </p>

    @endcomponent
@endcomponent
