@extends('app.layout.gla')
@php
    $pageTitle = 'Minha Equipe';
    $nextNetworkGoal = collect([5, 10, 20, 50, 100])->first(fn($goal) => $goal > $team_size);
@endphp
@section('content')
    <section class="hero">
        <span class="badge" style="background:rgba(255,255,255,0.18); color:#fff; margin-bottom:12px;">Rede GreenLand</span>
        <h2>Minha equipe</h2>
        <p>Acompanhe a evolução da sua rede, visualize o total por nível e veja a movimentação que gera comissões na plataforma.</p>
    </section>

    <section class="section">
        <h3>Visão geral</h3>
        <div class="compact-stats">
            <div class="compact-stat"><span class="subtle">Total de membros</span><strong>{{ $team_size }}</strong></div>
            <div class="compact-stat"><span class="subtle">Depósitos aprovados</span><strong>R$ {{ number_format($lvTotalDeposit, 2, ',', '.') }}</strong></div>
            <div class="compact-stat"><span class="subtle">Saques aprovados</span><strong>R$ {{ number_format($lvTotalWithdraw, 2, ',', '.') }}</strong></div>
            <div class="compact-stat"><span class="subtle">Investimento da rede</span><strong>R$ {{ number_format($totalInvestment, 2, ',', '.') }}</strong></div>
        </div>
    </section>

    <section class="section">
        <h3>Meta da sua rede</h3>
        <div class="table-like">
            <div class="row-line"><span>Membros ativos na rede</span><strong>{{ $activeMembers1 + $activeMembers2 + $activeMembers3 }}</strong></div>
            <div class="row-line"><span>Próxima meta</span><strong>{{ $nextNetworkGoal ? $nextNetworkGoal . ' membros' : 'Escala consolidada' }}</strong></div>
            <div class="row-line"><span>Faltam para chegar lá</span><strong>{{ $nextNetworkGoal ? max($nextNetworkGoal - $team_size, 0) : 0 }}</strong></div>
        </div>
        @if($nextNetworkGoal)
            <div class="progress-shell">
                <span class="subtle">Avanco atual da equipe para a proxima meta</span>
                <div class="progress-track">
                    <div class="progress-fill" style="width:{{ min(100, round(($team_size / $nextNetworkGoal) * 100)) }}%;"></div>
                </div>
            </div>
        @endif
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('user.invite') }}">Compartilhar convite</a>
        </div>
    </section>

    <section class="section">
        <h3>Desempenho por nível</h3>
        <div class="mobile-cards">
            <div class="card">
                <h4>Nível 1</h4>
                <div class="table-like">
                    <div class="row-line"><span>Membros</span><strong>{{ $first_level_users->count() }}</strong></div>
                    <div class="row-line"><span>Membros ativos</span><strong>{{ $activeMembers1 }}</strong></div>
                    <div class="row-line"><span>Depósitos</span><strong>R$ {{ number_format($lv1Recharge, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Saques</span><strong>R$ {{ number_format($lv1Withdraw, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Compras em ciclos</span><strong>R$ {{ number_format($totalLevelInvest1, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Comissão recebida</span><strong>R$ {{ number_format($levelTotalCommission1, 2, ',', '.') }}</strong></div>
                </div>
                <div class="actions"><a class="btn btn-secondary" href="{{ route('team.details', 1) }}">Ver equipe do nível 1</a></div>
            </div>
            <div class="card">
                <h4>Nível 2</h4>
                <div class="table-like">
                    <div class="row-line"><span>Membros</span><strong>{{ $second_level_users->count() }}</strong></div>
                    <div class="row-line"><span>Membros ativos</span><strong>{{ $activeMembers2 }}</strong></div>
                    <div class="row-line"><span>Depósitos</span><strong>R$ {{ number_format($lv2Recharge, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Saques</span><strong>R$ {{ number_format($lv2Withdraw, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Compras em ciclos</span><strong>R$ {{ number_format($totalLevelInvest2, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Comissão recebida</span><strong>R$ {{ number_format($levelTotalCommission2, 2, ',', '.') }}</strong></div>
                </div>
                <div class="actions"><a class="btn btn-secondary" href="{{ route('team.details', 2) }}">Ver equipe do nível 2</a></div>
            </div>
            <div class="card">
                <h4>Nível 3</h4>
                <div class="table-like">
                    <div class="row-line"><span>Membros</span><strong>{{ $third_level_users->count() }}</strong></div>
                    <div class="row-line"><span>Membros ativos</span><strong>{{ $activeMembers3 }}</strong></div>
                    <div class="row-line"><span>Depósitos</span><strong>R$ {{ number_format($lv3Recharge, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Saques</span><strong>R$ {{ number_format($lv3Withdraw, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Compras em ciclos</span><strong>R$ {{ number_format($totalLevelInvest3, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Comissão recebida</span><strong>R$ {{ number_format($levelTotalCommission3, 2, ',', '.') }}</strong></div>
                </div>
                <div class="actions"><a class="btn btn-secondary" href="{{ route('team.details', 3) }}">Ver equipe do nível 3</a></div>
            </div>
        </div>
    </section>
@endsection
