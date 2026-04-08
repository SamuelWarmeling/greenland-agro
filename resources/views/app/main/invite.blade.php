@extends('app.layout.gla')
@php
    $pageTitle = 'Convites';
    $user = auth()->user();
    $inviteCode = $user->ref_id;
    $formattedInviteCode = trim(chunk_split($inviteCode, 3, ' '));
    $inviteLink = url('/register') . '?member=' . $inviteCode;
    $whatsAppShareLink = 'https://wa.me/?text=' . rawurlencode("Entre na GreenLand Agro usando meu link de convite: {$inviteLink}");
    $directInviteIds = \App\Models\User::where('ref_by', $inviteCode)->pluck('id');
    $teamSize = $directInviteIds->count();
    $activeInvitees = \App\Models\Deposit::whereIn('user_id', $directInviteIds)
        ->where('status', 'approved')
        ->groupBy('user_id')
        ->get()
        ->count();
    $nextInviteGoal = collect([3, 5, 10, 20, 50])->first(fn($goal) => $goal > $teamSize);
    $nextInviteGap = $nextInviteGoal ? $nextInviteGoal - $teamSize : 0;
@endphp
@section('content')
    <section class="hero">
        <h2>Sistema de convites</h2>
        <p>Convide novos usuarios e construa sua rede com bonus especiais na primeira compra e comissoes reduzidas nas compras seguintes.</p>
    </section>
    <section class="section">
        <h3>Forca da sua rede</h3>
        <div class="stats">
            <div class="stat"><span class="subtle">Convidados diretos</span><strong>{{ $teamSize }}</strong></div>
            <div class="stat"><span class="subtle">Convidados ativos</span><strong>{{ $activeInvitees }}</strong></div>
            <div class="stat"><span class="subtle">Proxima meta da rede</span><strong>{{ $nextInviteGoal ? $nextInviteGoal . ' membros' : 'Meta premium' }}</strong></div>
            <div class="stat"><span class="subtle">Faltam para bater a meta</span><strong>{{ $nextInviteGoal ? $nextInviteGap : 0 }}</strong></div>
        </div>
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
        <div class="card" style="margin-top:14px;">
            <div class="badge info" style="margin-bottom:12px;">Link de convite</div>
            <div style="display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;">
                <div style="flex:1 1 280px;">
                    <div style="font-family:monospace; font-size:0.96rem; line-height:1.7; color:var(--gla-blue-dark); word-break:break-all;">
                        {{ $inviteLink }}
                    </div>
                    <p style="margin:10px 0 0;">Quem abrir esse link ja chega com o seu convite vinculado no cadastro.</p>
                </div>
                <button
                    class="btn btn-secondary"
                    type="button"
                    onclick="navigator.clipboard.writeText('{{ $inviteLink }}')"
                >
                    Copiar link
                </button>
                <a class="btn btn-primary" href="{{ $whatsAppShareLink }}" target="_blank" rel="noopener">
                    Compartilhar no WhatsApp
                </a>
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
            <a class="btn btn-primary" href="{{ $whatsAppShareLink }}" target="_blank" rel="noopener">Divulgar no WhatsApp</a>
            <a class="btn btn-secondary" href="{{ route('user.team') }}">Ver minha equipe</a>
        </div>
    </section>
@endsection
