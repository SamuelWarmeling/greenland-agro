@extends('app.layout.gla')
@php
    $pageTitle = 'Convites';
    $inviteCode = auth()->user()->ref_id;
    $formattedInviteCode = trim(chunk_split($inviteCode, 3, ' '));
@endphp
@section('content')
    <section class="hero">
        <h2>Sistema de convites</h2>
        <p>Convide novos usuarios e construa sua rede com bonus especiais na primeira compra e comissoes reduzidas nas compras seguintes.</p>
    </section>
    <section class="section">
        <h3>Seu codigo de convite</h3>
        <div class="card">
            <div class="badge info" style="margin-bottom:12px;">Codigo pronto para compartilhamento</div>
            <div style="display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;">
                <div>
                    <div class="price" style="font-size:1.45rem; letter-spacing:0.14em; font-family:monospace;">{{ $formattedInviteCode }}</div>
                    <p style="margin:0;">Compartilhe esse codigo com sua equipe e acompanhe o crescimento em tres niveis.</p>
                </div>
                <button
                    class="btn btn-secondary"
                    type="button"
                    onclick="navigator.clipboard.writeText('{{ $inviteCode }}')"
                >
                    Copiar codigo
                </button>
            </div>
        </div>
    </section>
    <section class="section">
        <h3>Regras de comissao</h3>
        <div class="grid cols-2">
            <div class="card">
                <h4>Primeira compra do indicado</h4>
                <ul class="list">
                    <li>Nivel 1: 20%</li>
                    <li>Nivel 2: 7%</li>
                    <li>Nivel 3: 1%</li>
                </ul>
            </div>
            <div class="card">
                <h4>Compras seguintes</h4>
                <ul class="list">
                    <li>Nivel 1: 5%</li>
                    <li>Nivel 2: 1%</li>
                    <li>Nivel 3: 1%</li>
                </ul>
            </div>
        </div>
        <div class="actions">
            <a class="btn btn-secondary" href="{{ route('user.team') }}">Ver minha equipe</a>
        </div>
    </section>
@endsection
