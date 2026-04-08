@extends('app.layout.gla')
@php $pageTitle = 'Minha Equipe'; @endphp
@section('content')
    <section class="hero">
        <span class="badge" style="background:rgba(255,255,255,0.18); color:#fff; margin-bottom:12px;">Rede GreenLand</span>
        <h2>Minha equipe</h2>
        <p>Acompanhe a evolucao da sua rede, visualize o total por nivel e veja a movimentacao que gera comissoes na plataforma.</p>
    </section>

    <section class="section">
        <h3>Visao geral</h3>
        <div class="stats">
            <div class="stat"><span class="subtle">Total de membros</span><strong>{{ $team_size }}</strong></div>
            <div class="stat"><span class="subtle">Depositos aprovados</span><strong>R$ {{ number_format($lvTotalDeposit, 2, ',', '.') }}</strong></div>
            <div class="stat"><span class="subtle">Saques aprovados</span><strong>R$ {{ number_format($lvTotalWithdraw, 2, ',', '.') }}</strong></div>
            <div class="stat"><span class="subtle">Investimento da rede</span><strong>R$ {{ number_format($totalInvestment, 2, ',', '.') }}</strong></div>
        </div>
    </section>

    <section class="section">
        <h3>Desempenho por nivel</h3>
        <div class="grid">
            <div class="card">
                <h4>Nivel 1</h4>
                <div class="table-like">
                    <div class="row-line"><span>Membros</span><strong>{{ $first_level_users->count() }}</strong></div>
                    <div class="row-line"><span>Membros ativos</span><strong>{{ $activeMembers1 }}</strong></div>
                    <div class="row-line"><span>Depositos</span><strong>R$ {{ number_format($lv1Recharge, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Saques</span><strong>R$ {{ number_format($lv1Withdraw, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Compras em ciclos</span><strong>R$ {{ number_format($totalLevelInvest1, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Comissao recebida</span><strong>R$ {{ number_format($levelTotalCommission1, 2, ',', '.') }}</strong></div>
                </div>
                <div class="actions"><a class="btn btn-secondary" href="{{ route('team.details', 1) }}">Ver equipe nivel 1</a></div>
            </div>
            <div class="card">
                <h4>Nivel 2</h4>
                <div class="table-like">
                    <div class="row-line"><span>Membros</span><strong>{{ $second_level_users->count() }}</strong></div>
                    <div class="row-line"><span>Membros ativos</span><strong>{{ $activeMembers2 }}</strong></div>
                    <div class="row-line"><span>Depositos</span><strong>R$ {{ number_format($lv2Recharge, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Saques</span><strong>R$ {{ number_format($lv2Withdraw, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Compras em ciclos</span><strong>R$ {{ number_format($totalLevelInvest2, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Comissao recebida</span><strong>R$ {{ number_format($levelTotalCommission2, 2, ',', '.') }}</strong></div>
                </div>
                <div class="actions"><a class="btn btn-secondary" href="{{ route('team.details', 2) }}">Ver equipe nivel 2</a></div>
            </div>
            <div class="card">
                <h4>Nivel 3</h4>
                <div class="table-like">
                    <div class="row-line"><span>Membros</span><strong>{{ $third_level_users->count() }}</strong></div>
                    <div class="row-line"><span>Membros ativos</span><strong>{{ $activeMembers3 }}</strong></div>
                    <div class="row-line"><span>Depositos</span><strong>R$ {{ number_format($lv3Recharge, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Saques</span><strong>R$ {{ number_format($lv3Withdraw, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Compras em ciclos</span><strong>R$ {{ number_format($totalLevelInvest3, 2, ',', '.') }}</strong></div>
                    <div class="row-line"><span>Comissao recebida</span><strong>R$ {{ number_format($levelTotalCommission3, 2, ',', '.') }}</strong></div>
                </div>
                <div class="actions"><a class="btn btn-secondary" href="{{ route('team.details', 3) }}">Ver equipe nivel 3</a></div>
            </div>
        </div>
    </section>
@endsection
