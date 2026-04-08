@extends('app.layout.gla')
@php
    $pageTitle = 'Painel';
    $user = auth()->user();
    $vipLevel = gla_user_vip_level(auth()->id());
    $totalInvestment = gla_user_total_investment(auth()->id());
    $activeCycles = \App\Models\Purchase::where('user_id', auth()->id())->where('status', 'active')->count();
    $pendingWithdraws = \App\Models\Withdrawal::where('user_id', auth()->id())->where('status', 'pending')->count();
    $approvedWithdraws = \App\Models\Withdrawal::where('user_id', auth()->id())->where('status', 'approved')->count();
    $balanceAvailable = (float) ($user->deposit_balance ?? 0);
    $nextThreshold = gla_next_threshold($totalInvestment);
    $progressPercent = gla_progress_to_next_level($totalInvestment);
    $nextBasePlan = gla_next_base_plan_for_total($totalInvestment);
    $hasPixKey = filled($user->gateway_number);
    $hasBasePlan = gla_has_active_base_plan(auth()->id());
    $latestProofs = \App\Models\SocialProof::with('user')->where('status', 'approved')->latest()->take(3)->get();
    $withdrawWindowOpen = now()->between(now()->copy()->setTime(10, 0), now()->copy()->setTime(17, 0));
    $onboardingSteps = [
        ['label' => 'Ative seu plano base', 'done' => $hasBasePlan, 'link' => route('vip')],
        ['label' => 'Cadastre sua chave PIX', 'done' => $hasPixKey, 'link' => route('user.withdraw')],
        ['label' => 'Faca seu primeiro deposito', 'done' => \App\Models\Deposit::where('user_id', auth()->id())->where('status', 'approved')->exists(), 'link' => route('user.deposit')],
        ['label' => 'Compartilhe seu convite', 'done' => \App\Models\User::where('ref_by', $user->ref_id)->exists(), 'link' => route('user.invite')],
    ];
@endphp
@section('content')
    <section class="hero">
        <h2>Tecnologia e inovacao para o futuro da soja</h2>
        <p>A GreenLand Agro combina inteligencia de dados, automacao e estrategia de crescimento em ciclos para uma experiencia mais clara, progressiva e organizada dentro da plataforma.</p>
    </section>

    <section class="compact-stats">
        <div class="compact-stat">
            <span class="subtle">Saldo disponivel</span>
            <strong>{{ price($balanceAvailable) }}</strong>
        </div>
        <div class="compact-stat">
            <span class="subtle">Nivel atual</span>
            <strong>{{ gla_level_label($vipLevel) }}</strong>
        </div>
        <div class="compact-stat">
            <span class="subtle">Ativos totais</span>
            <strong>{{ price($totalInvestment) }}</strong>
        </div>
        <div class="compact-stat">
            <span class="subtle">Ciclos ativos</span>
            <strong>{{ $activeCycles }}</strong>
        </div>
        <div class="compact-stat">
            <span class="subtle">Saques pendentes</span>
            <strong>{{ $pendingWithdraws }}</strong>
        </div>
        <div class="compact-stat">
            <span class="subtle">Janela de saque</span>
            <strong>{{ $withdrawWindowOpen ? 'Aberta' : 'Fechada' }}</strong>
        </div>
    </section>

    <section class="section">
        <h3>Acoes rapidas</h3>
        <div class="quick-actions">
            <a class="quick-action" href="{{ route('vip') }}">
                <strong>Ativar etapa</strong>
                <span class="subtle">Escolha sua etapa de entrada ou avance no proximo ciclo.</span>
            </a>
            <a class="quick-action" href="{{ route('user.deposit') }}">
                <strong>Fazer deposito</strong>
                <span class="subtle">Acesse o fluxo PIX e acompanhe a entrada do valor na plataforma.</span>
            </a>
            <a class="quick-action" href="{{ route('user.withdraw') }}">
                <strong>Solicitar saque</strong>
                <span class="subtle">Consulte regras, confira sua chave PIX e acompanhe o prazo.</span>
            </a>
            <a class="quick-action" href="{{ route('user.invite') }}">
                <strong>Compartilhar convite</strong>
                <span class="subtle">Copie seu codigo, divulgue o link e fortaleça sua rede.</span>
            </a>
        </div>
    </section>

    <section class="section">
        <h3>Seus proximos passos</h3>
        <div class="mobile-cards">
            @foreach($onboardingSteps as $step)
                <div class="card">
                    <span class="badge {{ $step['done'] ? '' : 'info' }}">{{ $step['done'] ? 'Concluido' : 'Pendente' }}</span>
                    <h4 style="margin-top:12px;">{{ $step['label'] }}</h4>
                    <p>{{ $step['done'] ? 'Essa etapa ja foi concluida na sua jornada dentro da plataforma.' : 'Conclua essa etapa para fortalecer sua estrutura dentro da GreenLand Agro.' }}</p>
                    <div class="actions">
                        <a class="btn {{ $step['done'] ? 'btn-ghost' : 'btn-primary' }}" href="{{ $step['link'] }}">
                            {{ $step['done'] ? 'Revisar etapa' : 'Ir agora' }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section">
        <h3>Seu momento atual</h3>
        <div class="table-like">
            <div class="row-line"><span>Janela de saque</span><strong>{{ $withdrawWindowOpen ? 'Aberta agora' : 'Fora do horario' }}</strong></div>
            <div class="row-line"><span>Regra de saque</span><strong>{{ gla_withdraw_window_label() }}</strong></div>
            <div class="row-line"><span>Saques aprovados</span><strong>{{ $approvedWithdraws }}</strong></div>
            <div class="row-line"><span>Proximo marco</span><strong>{{ $nextThreshold ? price($nextThreshold['threshold']) . ' para ' . gla_level_label($nextThreshold['level']) : 'Nivel maximo atingido' }}</strong></div>
            <div class="row-line"><span>Progresso ate o proximo marco</span><strong>{{ $progressPercent }}%</strong></div>
            @if($nextBasePlan)
                <div class="row-line"><span>Proxima etapa base disponivel</span><strong>{{ $nextBasePlan['name'] }} - {{ price($nextBasePlan['price']) }}</strong></div>
            @endif
        </div>
        @if($nextThreshold)
            <div class="progress-shell">
                <span class="subtle">Avanco atual para o proximo marco</span>
                <div class="progress-track">
                    <div class="progress-fill" style="width:{{ $progressPercent }}%;"></div>
                </div>
            </div>
        @endif
        <div class="actions">
            <a class="btn btn-primary" href="{{ route('vip') }}">Ver planos e ciclos</a>
            <a class="btn btn-secondary" href="{{ route('user.withdraw') }}">Solicitar saque</a>
            <a class="btn btn-secondary" href="{{ route('user.invite') }}">Sistema de convites</a>
        </div>
    </section>

    <section class="section">
        <h3>Destaques do GLA</h3>
        <div class="mobile-cards">
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
                <p>Centralize seus depositos em um unico ambiente e acompanhe o processamento das recargas PIX dentro da plataforma.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('user.deposit') }}">Fazer deposito</a>
                </div>
            </div>
            <div class="card">
                <h4>Saques</h4>
                <p>Solicitacoes entre 10:00 e 17:00, limite de 1 saque por dia, minimo de {{ price(gla_withdraw_minimum()) }} e taxa de 10%.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('user.withdraw') }}">Ir para saque</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <h3>Conquistas recentes da comunidade</h3>
        @if($latestProofs->isEmpty())
            <div class="card">
                <h4>Vitrine em construcao</h4>
                <p>Os compartilhamentos validados dos usuarios vao aparecer aqui para reforcar a credibilidade e mostrar o movimento real da plataforma.</p>
            </div>
        @else
            <div class="mobile-cards">
                @foreach($latestProofs as $proof)
                    <div class="card">
                        <div class="badge info" style="margin-bottom:12px;">Compartilhamento validado</div>
                        <h4>{{ $proof->user->name ?: 'Produtor GreenLand' }}</h4>
                        <p>{{ $proof->message ?: 'Compartilhamento aprovado pela equipe GreenLand Agro.' }}</p>
                        <small class="subtle">Bonus liberado: {{ price($proof->payout_amount) }}</small>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
