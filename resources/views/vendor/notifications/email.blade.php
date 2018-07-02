@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# @lang('erreur!')
@else
Bonjour!
@endif
@endif

Vous recevez cet email suite à votre demande de réinitialisation de votre mot de passe.

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
Réinitialiser
@endcomponent
@endisset

Si vous n'avez pas demandé de réinitialisation, aucune action est requise.

Cordialement,<br> Esidesk


{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
@lang(
    "Si vous n'arrivez pas à cliquer sur le bouton réinitialiser, veuillez copier et coller l\n".
    'dans votre navigateur : [:actionURL](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl
    ]
)
@endcomponent
@endisset
@endcomponent