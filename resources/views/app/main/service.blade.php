@extends('app.layout.gla')
@php
    $pageTitle = 'Suporte';
    $supportChannels = [
        ['title' => 'Instagram', 'label' => '@greenlandagro', 'url' => 'https://www.instagram.com/'],
        ['title' => 'YouTube', 'label' => 'Canal institucional', 'url' => 'https://www.youtube.com/'],
        ['title' => 'Telegram', 'label' => '@greenlandagro', 'url' => 'https://t.me/webdeveloper_sun'],
        ['title' => 'Facebook', 'label' => 'Página oficial', 'url' => 'https://www.facebook.com/'],
    ];
@endphp

@section('content')
    <section class="hero">
        <h2>Central de suporte</h2>
        <p>Escolha um dos canais abaixo para acompanhar novidades, receber suporte e falar com a equipe da GreenLand Agro.</p>
    </section>

    <section class="section">
        <h3>Canais oficiais</h3>
        <div class="mobile-cards">
            @foreach($supportChannels as $channel)
                <a class="card" href="{{ $channel['url'] }}" target="_blank" rel="noopener">
                    <div class="badge info" style="margin-bottom:12px;">Canal oficial</div>
                    <h4>{{ $channel['title'] }}</h4>
                    <p>{{ $channel['label'] }}</p>
                    <small class="subtle">{{ $channel['url'] }}</small>
                </a>
            @endforeach
        </div>
    </section>

    <section class="section">
        <h3>Orientações rápidas</h3>
        <div class="table-like">
            <div class="row-line"><span>Atendimento da plataforma</span><strong>Use sempre os canais oficiais</strong></div>
            <div class="row-line"><span>Suporte sobre saques</span><strong>Informe o ID da solicitação quando necessário</strong></div>
            <div class="row-line"><span>Suporte sobre depósitos</span><strong>Tenha os dados da operação em mãos</strong></div>
            <div class="row-line"><span>Segurança da conta</span><strong>Nunca compartilhe sua senha com terceiros</strong></div>
        </div>
    </section>
@endsection