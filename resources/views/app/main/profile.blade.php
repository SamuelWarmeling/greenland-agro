@extends('app.layout.gla')
@php
    $pageTitle = 'Minha Conta';
    $displayName = trim((string) auth()->user()->name);
    if ($displayName === '' || str_starts_with($displayName, 'User')) {
        $displayName = 'Produtor GreenLand';
    }

    $formattedPhone = gla_format_phone(auth()->user()->phone);
    $accountCode = auth()->user()->ref_id ?: '--';
@endphp
@section('content')
    <section class="hero">
        <span class="badge" style="background:rgba(255,255,255,0.18); color:#fff; margin-bottom:12px;">Area do produtor</span>
        <h2>Minha conta GreenLand Agro</h2>
        <p>Gerencie sua conta, acompanhe seu codigo de convite, consulte configuracoes essenciais e acesse rapidamente as areas principais da plataforma.</p>
    </section>

    <section class="section">
        <div class="grid cols-2">
            <div class="card">
                <h4>Perfil do produtor</h4>
                <div class="price" style="font-size:1.2rem;">{{ $displayName }}</div>
                <p class="subtle">Conta vinculada ao telefone {{ $formattedPhone }}</p>
            </div>
            <div class="card">
                <h4>Codigo de convite</h4>
                <div class="price" style="font-size:1.2rem; letter-spacing:0.04em;">{{ $accountCode }}</div>
                <p class="subtle">Use este codigo para compartilhar sua rede e acompanhar seus indicados.</p>
            </div>
        </div>
    </section>

    <section class="section">
        <h3>Acesso rapido</h3>
        <div class="grid cols-2">
            <a class="card" href="{{ route('user.deposit') }}">
                <h4>Depositos</h4>
                <p>Consulte seus canais de recarga e acompanhe o processamento dos depositos PIX.</p>
            </a>
            <a class="card" href="{{ route('user.withdraw') }}">
                <h4>Saques</h4>
                <p>Solicite retiradas dentro do horario permitido e acompanhe o historico.</p>
            </a>
            <a class="card" href="{{ route('user.invite') }}">
                <h4>Convites</h4>
                <p>Copie seu codigo e acompanhe a sua rede em ate tres niveis.</p>
            </a>
            <a class="card" href="{{ route('user.team') }}">
                <h4>Minha equipe</h4>
                <p>Veja o desempenho da sua rede e a distribuicao das comissoes.</p>
            </a>
        </div>
    </section>

    <section class="section">
        <h3>Configuracoes e suporte</h3>
        <div class="table-like">
            <div class="row-line"><span>Regulamento da plataforma</span><a class="btn btn-secondary" href="{{ route('user.rule') }}">Abrir</a></div>
            <div class="row-line"><span>Alterar senha</span><a class="btn btn-secondary" href="{{ route('user.change.password') }}">Alterar</a></div>
            <div class="row-line"><span>Contato e suporte</span><a class="btn btn-secondary" href="{{ route('user.service') }}">Atendimento</a></div>
            <div class="row-line"><span>Compartilhamento de saque</span><a class="btn btn-secondary" href="{{ route('appreview') }}">Acessar</a></div>
        </div>
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('logout') }}">Sair da conta</a>
        </div>
    </section>
@endsection
