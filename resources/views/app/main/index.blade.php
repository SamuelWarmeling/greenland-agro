@extends('app.layout.gla')
@php
    $pageTitle = 'Painel';
    $vipLevel = gla_user_vip_level(auth()->id());
    $totalInvestment = gla_user_total_investment(auth()->id());
    $activeCycles = \App\Models\Purchase::where('user_id', auth()->id())->where('status', 'active')->count();
    $pendingWithdraws = \App\Models\Withdrawal::where('user_id', auth()->id())->where('status', 'pending')->count();
@endphp
@section('content')
    <section class="hero">
        <h2>Tecnologia e inovacao para o futuro da soja</h2>
        <p>A GreenLand Agro combina inteligencia de dados, automacao e estrategia de crescimento em ciclos para uma experiencia mais clara, progressiva e organizada dentro da plataforma.</p>
    </section>

    <section class="stats">
        <div class="stat">
            <span class="subtle">Nivel atual</span>
            <strong>VIP {{ $vipLevel }}</strong>
        </div>
        <div class="stat">
            <span class="subtle">Ativos totais</span>
            <strong>{{ price($totalInvestment) }}</strong>
        </div>
        <div class="stat">
            <span class="subtle">Ciclos ativos</span>
            <strong>{{ $activeCycles }}</strong>
        </div>
        <div class="stat">
            <span class="subtle">Saques pendentes</span>
            <strong>{{ $pendingWithdraws }}</strong>
        </div>
    </section>

    <section class="section">
        <h3>Como a plataforma funciona</h3>
        <ul class="list">
            <li>O primeiro passo e adquirir um plano base de 40 dias para ativar a conta e sair do VIP 0.</li>
            <li>Depois da ativacao, a evolucao de nivel acontece pelo valor total investido na plataforma.</li>
            <li>Os ciclos VIP e os eventos liberam retornos conforme prazo, valor e nivel exigido.</li>
            <li>A progressao depende da sua estrategia de reinvestimento, indicacoes e constancia.</li>
        </ul>
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('vip') }}">Ver planos e ciclos</a>
            <a class="btn btn-secondary" href="{{ route('user.withdraw') }}">Solicitar saque</a>
            <a class="btn btn-secondary" href="{{ route('user.invite') }}">Sistema de convites</a>
        </div>
    </section>

    <section class="section">
        <h3>Destaques do GLA</h3>
        <div class="grid cols-2">
            <div class="card">
                <h4>Check-in diario</h4>
                <p>Receba {{ price(gla_checkin_amount()) }} por dia ao acessar a plataforma e confirmar seu check-in.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('checkinn') }}">Fazer check-in</a>
                </div>
            </div>
            <div class="card">
                <h4>Compartilhamento validado</h4>
                <p>Publique um comprovante de saque dentro da plataforma e receba de {{ price(1) }} a {{ price(3) }} apos validacao.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('appreview') }}">Enviar compartilhamento</a>
                </div>
            </div>
            <div class="card">
                <h4>Depositos e comprovantes</h4>
                <p>Os depositos desta area serao ligados a uma gateway PIX automatica, com confirmacao de pagamento direto na plataforma.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('user.deposit') }}">Fazer deposito</a>
                </div>
            </div>
            <div class="card">
                <h4>Saques</h4>
                <p>Solicitacoes entre 10:00 e 17:00, limite de 1 saque por dia, minimo de {{ price(10) }} e taxa de 10%.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('user.withdraw') }}">Ir para saque</a>
                </div>
            </div>
        </div>
    </section>
@endsection
