<div style="text-align: center;">
<img src="http://maydayphone.com/images/mayday-phone-logo.png" alt="Mon Logo" width='200'>
</div>
<br>

<p style="text-align: left; color:black">
    Cher <strong>{{ $quoteData['appointment'][0]['surname'] }}</strong>,
</p> <br>
    <p style="text-align: justify;color:black">
        Nous vous attendons avec impatience le <strong>{{ $quoteData['schedule'][0]['day'] }}</strong> <strong>{{ $quoteData['schedule'][0]['date'] }}</strong> <strong>{{ date('Y') }}</strong>
    à <strong>{{ $quoteData['schedule'][0]['hour'] }}</strong>, dans la boutique
    <strong>{{ $quoteData['store'][0]['name'] }}</strong>, pour la réparation de votre <strong>{{ $quoteData['model']->name }}</strong> !
<br>
    Merci de faire confiance à notre service. Si vous avez des questions ou avez besoin d'aide, n'hésitez pas à nous contacter.
    </p>

    <p style="text-align: left;color:black">
        Cordialement,
        <strong>MAYDAY PHONE</strong>
    </p>

