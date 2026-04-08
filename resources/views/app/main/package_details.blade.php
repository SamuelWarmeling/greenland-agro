@extends('app.layout.gla')
@php
    $pageTitle = 'Detalhes do plano';
    $requiredLevel = gla_package_level($package);
    $displayMeta = gla_package_display_meta($package);
@endphp
@section('content')
    <section class="hero">
        <h2>{{ $displayMeta['name'] }}</h2>
        <p>{{ gla_package_type_label($package) }} para {{ $package->validity }} dias de ciclo e retorno alvo de {{ price($package->commission_with_avg_amount) }}.</p>
    </section>

    <section class="section">
        <div style="border-radius:18px; overflow:hidden; margin-bottom:16px; aspect-ratio:1/1; background:#eef5f7;">
            <img src="{{ view_image($displayMeta['photo']) }}" alt="{{ $displayMeta['name'] }}" style="width:100%; height:100%; object-fit:cover;">
        </div>
        <div class="table-like">
            <div class="row-line"><span>Nome comercial</span><strong>{{ $displayMeta['name'] }}</strong></div>
            <div class="row-line"><span>Tipo</span><strong>{{ gla_package_type_label($package) }}</strong></div>
            <div class="row-line"><span>Nivel exigido</span><strong>{{ gla_level_label($requiredLevel) }}</strong></div>
            <div class="row-line"><span>Valor do plano</span><strong>{{ price($package->price) }}</strong></div>
            <div class="row-line"><span>Duracao</span><strong>{{ $package->validity }} dias</strong></div>
            <div class="row-line"><span>Retorno total</span><strong>{{ price($package->commission_with_avg_amount) }}</strong></div>
            <div class="row-line"><span>Retorno diario medio</span><strong>{{ price($package->commission_with_avg_amount / max(1, (int) $package->validity)) }}</strong></div>
        </div>
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('purchase.confirmation', $package->id) }}">Comprar agora</a>
            <a class="btn btn-secondary" href="{{ route('vip') }}">Voltar aos planos</a>
        </div>
    </section>
@endsection
