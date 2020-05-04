<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
   
<body>
@include('includes.header')

@include('includes.banniere')

<div class="containerDevenir">
<div class="devenir">
    <div class="titreDevenir">Devenez partenaire actif</div>
    <p>Si vous avez du temps à nous consacrer pour nous aider davantage dans notre initiative, nous vous invitons à vous joindre à notre équipe de partenaires. Communiquez avec nous à <a href="mailto:info@accq.quebec">info@accq.quebec</a>. Nous vous contacterons incessamment pour vous expliquer comment participer à notre réflexion collective et à nos actions. Nous travaillons selon les principes du consensus et de la démocratie participative.</p>
</div>
</div>
@include('includes.footer')
</body>
</html>