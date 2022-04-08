@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifiez votre adresse mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Vous avez reçu un lien de changement de mdp.') }}
                        </div>
                    @endif

                    {{ __('Checkez vos mails.') }}
                    {{ __('Si vous n'avez pas reçu le mail') }}, <a href="{{ route('verification.resend') }}">{{ __('Cliquez ici') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
