@extends('app.layout.gla')
@php
    $pageTitle = 'Planos';
    $basePlanPrices = array_keys(gla_base_plan_catalog());
    $basePlans = \App\Models\Package::where('tab', 'vip')
        ->where('status', 'active')
        ->where('validity', 40)
        ->whereIn('price', $basePlanPrices)
        ->orderBy('price')
        ->get();
    $cyclePlans = \App\Models\Package::where('tab', 'fixed')->where('status', 'active')->orderBy('price')->get();
    $eventPlans = \App\Models\Package::where('tab', 'event')->where('status', 'active')->orderBy('price')->get();
    $vipLevel = gla_user_vip_level(auth()->id());
    $totalInvestment = gla_user_total_investment(auth()->id());
@endphp
@section('content')
    <section class="hero">
        <h2>Planos, VIPs e ciclos da GreenLand Agro</h2>
        <p>Ative sua conta com um plano base de 40 dias e avance de nivel comprando ciclos compativeis com a sua estrategia.</p>
    </section>

    <section class="section">
        <h3>Seu enquadramento atual</h3>
        <div class="table-like">
            <div class="row-line"><span>Nivel liberado</span><strong>{{ gla_level_label($vipLevel) }}</strong></div>
            <div class="row-line"><span>Total em ativos</span><strong>{{ price($totalInvestment) }}</strong></div>
            <div class="row-line"><span>Proximo marco</span><strong>
                @php
                    $nextThreshold = collect(gla_vip_thresholds())->reverse()->first(fn($threshold) => $threshold > $totalInvestment);
                @endphp
                {{ $nextThreshold ? price($nextThreshold) : 'Nivel maximo atingido' }}
            </strong></div>
        </div>
    </section>

    <section class="section">
        <h3>Planos Base - ativacao VIP 1</h3>
        <p class="subtle">Disponiveis apenas para ativacao inicial. Duracao de 40 dias e rendimento de 15% ao dia.</p>
        <div class="grid cols-2">
            @foreach($basePlans as $package)
                @php $displayMeta = gla_package_display_meta($package); @endphp
                <div class="card">
                    <span class="badge">Plano Base</span>
                    <div style="border-radius:16px; overflow:hidden; margin-bottom:12px; aspect-ratio:1/1; background:#eef5f7;">
                        <img src="{{ view_image($displayMeta['photo']) }}" alt="{{ $displayMeta['name'] }}" style="width:100%; height:100%; object-fit:cover;">
                    </div>
                    <h4>{{ $displayMeta['name'] }}</h4>
                    <div class="price">{{ price($package->price) }}</div>
                    <p>Retorno diario: <strong>{{ price($package->daily_income ?? ($package->commission_with_avg_amount / max(1, (int) $package->validity))) }}</strong></p>
                    <p>Total em {{ $package->validity }} dias: <strong>{{ price($package->commission_with_avg_amount) }}</strong></p>
                    <div class="actions">
                        <a class="btn btn-primary" href="{{ route('purchase.confirmation', $package->id) }}">Ativar conta</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section">
        <h3>Ciclos por nivel</h3>
        <div class="grid cols-2">
            @foreach($cyclePlans as $package)
                @php
                    $requiredLevel = gla_package_level($package);
                    $displayMeta = gla_package_display_meta($package);
                @endphp
                <div class="card">
                    <span class="badge info">{{ gla_level_label($requiredLevel) }}</span>
                    <h4>{{ $displayMeta['name'] }}</h4>
                    <div class="price">{{ price($package->price) }}</div>
                    <p>Ciclo: <strong>{{ $package->validity }} dias</strong></p>
                    <p>Retorno estimado: <strong>{{ price($package->commission_with_avg_amount) }}</strong></p>
                    <div class="actions">
                        @if($vipLevel >= $requiredLevel)
                            <a class="btn btn-primary" href="{{ route('purchase.confirmation', $package->id) }}">Comprar ciclo</a>
                        @else
                            <span class="badge warn">Necessario {{ gla_level_label($requiredLevel) }}</span>
                        @endif
                        <a class="btn btn-ghost" href="{{ route('package.details', $package->id) }}">Detalhes</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section">
        <h3>Planos de evento</h3>
        <p class="subtle">Os eventos funcionam como ciclos rapidos e podem ser liberados em janelas especiais dentro da plataforma.</p>
        <div class="grid cols-2">
            @foreach($eventPlans as $package)
                @php
                    $requiredLevel = gla_package_level($package);
                    $displayMeta = gla_package_display_meta($package);
                @endphp
                <div class="card">
                    <span class="badge warn">Evento - {{ gla_level_label($requiredLevel) }}</span>
                    <h4>{{ $displayMeta['name'] }}</h4>
                    <div class="price">{{ price($package->price) }}</div>
                    <p>Ciclo: <strong>{{ $package->validity }} dias</strong></p>
                    <p>Retorno estimado: <strong>{{ price($package->commission_with_avg_amount) }}</strong></p>
                    <div class="actions">
                        @if($vipLevel >= $requiredLevel)
                            <a class="btn btn-primary" href="{{ route('purchase.confirmation', $package->id) }}">Entrar no evento</a>
                        @else
                            <span class="badge warn">Necessario {{ gla_level_label($requiredLevel) }}</span>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
