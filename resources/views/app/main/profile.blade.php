@extends('app.layout.gla')
@php
    $pageTitle = 'Minha Conta';
    $displayName = trim((string) auth()->user()->name);
    if ($displayName === '' || str_starts_with($displayName, 'User')) {
        $displayName = 'Produtor GreenLand';
    }

    $formattedPhone = gla_format_phone(auth()->user()->phone);
    $accountCode = auth()->user()->ref_id ?: '--';
    $pixKey = gla_mask_pix_key(auth()->user()->gateway_number, auth()->user()->gateway_method);
    $pixKeyType = auth()->user()->gateway_method ? gla_pix_key_type_label(auth()->user()->gateway_method) : 'Nao definido';
@endphp
@section('content')
    <section class="hero">
        <span class="badge" style="background:rgba(255,255,255,0.18); color:#fff; margin-bottom:12px;">Área do produtor</span>
        <h2>Minha conta GreenLand Agro</h2>
        <p>Gerencie sua conta, acompanhe seu código de convite, consulte configurações essenciais e acesse rapidamente as áreas principais da plataforma.</p>
    </section>

    <section class="section">
        <div class="grid cols-2">
            <div class="card">
                <h4>Perfil do produtor</h4>
                <div class="price" style="font-size:1.2rem;">{{ $displayName }}</div>
                <p class="subtle">Conta vinculada ao telefone {{ $formattedPhone }}</p>
            </div>
            <div class="card">
                <h4>Código de convite</h4>
                <div class="price" style="font-size:1.2rem; letter-spacing:0.04em;">{{ $accountCode }}</div>
                <p class="subtle">Use este código para compartilhar sua rede e acompanhar seus indicados.</p>
            </div>
            <div class="card" style="grid-column: 1 / -1;">
                <h4>Chave PIX de saque</h4>
                <div class="price" style="font-size:1.05rem; word-break:break-word;">{{ $pixKey }}</div>
                <p class="subtle">Tipo cadastrado: {{ $pixKeyType }}. Você pode cadastrar ou atualizar a chave PIX diretamente na área de saques.</p>
                <div class="actions">
                    <a class="btn btn-secondary" href="{{ route('user.withdraw') }}">Gerenciar chave PIX</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <h3>Acesso rápido</h3>
        <div class="grid cols-2">
            <a class="card" href="{{ route('user.deposit') }}">
                <h4>Depósitos</h4>
                <p>Consulte seus canais de recarga e acompanhe o processamento dos depósitos PIX.</p>
            </a>
            <a class="card" href="{{ route('user.withdraw') }}">
                <h4>Saques</h4>
                <p>Solicite retiradas dentro do horário permitido e acompanhe o histórico.</p>
            </a>
            <a class="card" href="{{ route('user.invite') }}">
                <h4>Convites</h4>
                <p>Copie seu código e acompanhe a sua rede em até três níveis.</p>
            </a>
            <a class="card" href="{{ route('user.team') }}">
                <h4>Minha equipe</h4>
                <p>Veja o desempenho da sua rede e a distribuição das comissões.</p>
            </a>
        </div>
    </section>

    <section class="section">
        <h3>Configurações e suporte</h3>
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
