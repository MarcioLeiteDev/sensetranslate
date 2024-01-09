
@component('mail::message')

<img src="{{ asset('image/logo.jpg') }}" alt="Seu Logotipo">

# Welcome

Voce esta recebendo essa mensagem por que foi cadastrado em nosso sistema </br>

Para se logar por favor acesse o site https://www.sensetranslate.com </br>

Usuario : {{ $email }} </br>
Senha:  {{ $senha }} </br>

Equipe Sense Translate

@endcomponent
