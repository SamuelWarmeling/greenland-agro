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
    $firstApprovedDeposit = \App\Models\Deposit::where('user_id', auth()->id())->where('status', 'approved')->exists();
    $invitedUsersCount = \App\Models\User::where('ref_by', $user->ref_id)->count();
    $onboardingSteps = [
        ['label' => 'Ative seu plano base', 'done' => $hasBasePlan, 'link' => route('vip')],
        ['label' => 'Cadastre sua chave PIX', 'done' => $hasPixKey, 'link' => route('user.withdraw')],
        ['label' => 'Faça seu primeiro depósito', 'done' => $firstApprovedDeposit, 'link' => route('user.deposit')],
        ['label' => 'Compartilhe seu convite', 'done' => $invitedUsersCount > 0, 'link' => route('user.invite')],
    ];

    $levelModalText = $nextThreshold
        ? 'Você está em ' . gla_level_label($vipLevel) . '. Para chegar em ' . gla_level_label($nextThreshold['level']) . ', sua conta precisa alcançar ' . price($nextThreshold['threshold']) . ' em ativos totais. Hoje você já acumulou ' . price($totalInvestment) . ' e está com ' . $progressPercent . '% do progresso concluído.'
        : 'Você já alcançou o nível máximo disponível na plataforma. Agora o foco é manter seus ciclos organizados e fortalecer sua rede.';

    $withdrawModalText = $withdrawWindowOpen
        ? 'A janela de saque está aberta agora. Solicitações podem ser enviadas das 10:00 às 17:00, com limite de 1 saque por dia e taxa de 10%.'
        : 'A janela de saque está fechada neste momento. Novas solicitações ficam disponíveis das 10:00 às 17:00.';
@endphp
@section('content')
    <section class="hero">
        <h2>Tecnologia e inovação para o futuro da soja</h2>
        <p>A GreenLand Agro combina inteligência de dados, automação e estratégia de crescimento em ciclos para uma experiência mais clara, progressiva e organizada dentro da plataforma.</p>
    </section>

    <section class="compact-stats gla-click-stats">
        <button type="button" class="compact-stat stat-button" data-modal-title="Saldo disponível" data-modal-body="Esse valor representa o saldo atualmente disponível para movimentação dentro da sua conta.">
            <span class="subtle">Saldo disponível</span>
            <strong>{{ price($balanceAvailable) }}</strong>
        </button>
        <button type="button" class="compact-stat stat-button" data-modal-title="Nível atual" data-modal-body="{{ e($levelModalText) }}">
            <span class="subtle">Nível atual</span>
            <strong>{{ gla_level_label($vipLevel) }}</strong>
        </button>
        <button type="button" class="compact-stat stat-button" data-modal-title="Ativos totais" data-modal-body="Os ativos totais representam o valor acumulado em planos e ciclos adquiridos na plataforma. Esse número ajuda a determinar sua evolução de nível.">
            <span class="subtle">Ativos totais</span>
            <strong>{{ price($totalInvestment) }}</strong>
        </button>
        <button type="button" class="compact-stat stat-button" data-modal-title="Ciclos ativos" data-modal-body="Aqui você acompanha quantos ciclos estão em andamento neste momento. Quanto mais ciclos ativos dentro da sua estratégia, maior a movimentação da sua conta.">
            <span class="subtle">Ciclos ativos</span>
            <strong>{{ $activeCycles }}</strong>
        </button>
        <button type="button" class="compact-stat stat-button" data-modal-title="Saques pendentes" data-modal-body="Esse indicador mostra quantas solicitações de saque ainda estão aguardando análise e processamento da equipe.">
            <span class="subtle">Saques pendentes</span>
            <strong>{{ $pendingWithdraws }}</strong>
        </button>
        <button type="button" class="compact-stat stat-button" data-modal-title="Janela de saque" data-modal-body="{{ e($withdrawModalText) }}">
            <span class="subtle">Janela de saque</span>
            <strong>{{ $withdrawWindowOpen ? 'Aberta' : 'Fechada' }}</strong>
        </button>
    </section>

    <section class="section">
        <h3>Ações rápidas</h3>
        <div class="quick-actions">
            <a class="quick-action" href="{{ route('vip') }}">
                <strong>Ativar etapa</strong>
                <span class="subtle">Escolha sua etapa de entrada ou avance no próximo ciclo.</span>
            </a>
            <a class="quick-action" href="{{ route('user.deposit') }}">
                <strong>Fazer depósito</strong>
                <span class="subtle">Acesse o fluxo PIX e acompanhe a entrada do valor na plataforma.</span>
            </a>
            <a class="quick-action" href="{{ route('user.withdraw') }}">
                <strong>Solicitar saque</strong>
                <span class="subtle">Consulte regras, confira sua chave PIX e acompanhe o prazo.</span>
            </a>
            <a class="quick-action" href="{{ route('user.invite') }}">
                <strong>Compartilhar convite</strong>
                <span class="subtle">Copie seu código, divulgue o link e fortaleça sua rede.</span>
            </a>
        </div>
    </section>

    <section class="section">
        <h3>Seus próximos passos</h3>
        <div class="mobile-cards">
            @foreach($onboardingSteps as $step)
                <div class="card">
                    <span class="badge {{ $step['done'] ? '' : 'info' }}">{{ $step['done'] ? 'Concluído' : 'Pendente' }}</span>
                    <h4 style="margin-top:12px;">{{ $step['label'] }}</h4>
                    <p>{{ $step['done'] ? 'Essa etapa já foi concluída na sua jornada dentro da plataforma.' : 'Conclua essa etapa para fortalecer sua estrutura dentro da GreenLand Agro.' }}</p>
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
            <div class="row-line"><span>Janela de saque</span><strong>{{ $withdrawWindowOpen ? 'Aberta agora' : 'Fora do horário' }}</strong></div>
            <div class="row-line"><span>Regra de saque</span><strong>{{ gla_withdraw_window_label() }}</strong></div>
            <div class="row-line"><span>Saques aprovados</span><strong>{{ $approvedWithdraws }}</strong></div>
            <div class="row-line"><span>Próximo marco</span><strong>{{ $nextThreshold ? price($nextThreshold['threshold']) . ' para ' . gla_level_label($nextThreshold['level']) : 'Nível máximo atingido' }}</strong></div>
            <div class="row-line"><span>Progresso até o próximo marco</span><strong>{{ $progressPercent }}%</strong></div>
            @if($nextBasePlan)
                <div class="row-line"><span>Próxima etapa base disponível</span><strong>{{ $nextBasePlan['name'] }} - {{ price($nextBasePlan['price']) }}</strong></div>
            @endif
        </div>
        @if($nextThreshold)
            <div class="progress-shell">
                <span class="subtle">Avanço atual para o próximo marco</span>
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
                <h4>Check-in diário</h4>
                <p>Receba {{ price(gla_checkin_amount()) }} por dia ao acessar a plataforma e confirmar seu check-in.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('checkinn') }}">Fazer check-in</a>
                </div>
            </div>
            <div class="card">
                <h4>Compartilhamento validado</h4>
                <p>Publique um comprovante de saque dentro da plataforma e receba de {{ price(1) }} a {{ price(3) }} após validação.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('appreview') }}">Enviar compartilhamento</a>
                </div>
            </div>
            <div class="card">
                <h4>Depósitos</h4>
                <p>Centralize seus depósitos em um único ambiente e acompanhe o processamento das recargas PIX dentro da plataforma.</p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('user.deposit') }}">Fazer depósito</a>
                </div>
            </div>
            <div class="card">
                <h4>Saques</h4>
                <p>Solicitações entre 10:00 e 17:00, limite de 1 saque por dia, mínimo de {{ price(gla_withdraw_minimum()) }} e taxa de 10%.</p>
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
                <h4>Vitrine em construção</h4>
                <p>Os compartilhamentos validados dos usuários vão aparecer aqui para reforçar a credibilidade e mostrar o movimento real da plataforma.</p>
            </div>
        @else
            <div class="mobile-cards">
                @foreach($latestProofs as $proof)
                    <div class="card">
                        <div class="badge info" style="margin-bottom:12px;">Compartilhamento validado</div>
                        <h4>{{ $proof->user->name ?: 'Produtor GreenLand' }}</h4>
                        <p>{{ $proof->message ?: 'Compartilhamento aprovado pela equipe GreenLand Agro.' }}</p>
                        <small class="subtle">Bônus liberado: {{ price($proof->payout_amount) }}</small>
                    </div>
                @endforeach
            </div>
        @endif
    </section>

    <div id="dashboard-info-modal" class="gla-modal" hidden>
        <div class="gla-modal__backdrop" data-close-dashboard-modal></div>
        <div class="gla-modal__dialog">
            <button type="button" class="gla-modal__close" data-close-dashboard-modal>×</button>
            <div class="badge info" style="margin-bottom:12px;">Detalhes da conta</div>
            <h3 id="dashboard-modal-title">Informação</h3>
            <p id="dashboard-modal-body" class="subtle" style="margin-top:12px;"></p>
            <div class="actions" style="margin-top:20px;">
                <button type="button" class="btn btn-primary" data-close-dashboard-modal>Entendi</button>
                <a class="btn btn-secondary" href="{{ route('vip') }}">Ver planos</a>
            </div>
        </div>
    </div>

    <style>
        .gla-click-stats .stat-button {
            appearance: none;
            border: 1px solid #d8e3f0;
            background: #fff;
            text-align: left;
            cursor: pointer;
            transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
        }

        .gla-click-stats .stat-button:hover,
        .gla-click-stats .stat-button:focus {
            transform: translateY(-1px);
            box-shadow: 0 12px 30px rgba(20, 62, 108, 0.08);
            border-color: rgba(34, 197, 94, 0.35);
            outline: none;
        }

        .gla-modal[hidden] {
            display: none;
        }

        .gla-modal {
            position: fixed;
            inset: 0;
            z-index: 1200;
        }

        .gla-modal__backdrop {
            position: absolute;
            inset: 0;
            background: rgba(15, 23, 42, 0.48);
            backdrop-filter: blur(4px);
        }

        .gla-modal__dialog {
            position: relative;
            max-width: 440px;
            margin: 12vh auto 0;
            background: #fff;
            border-radius: 24px;
            padding: 24px;
            box-shadow: 0 30px 60px rgba(15, 23, 42, 0.22);
            z-index: 1;
        }

        .gla-modal__close {
            position: absolute;
            top: 12px;
            right: 12px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 0;
            background: #eef5fb;
            color: #0b3c5d;
            font-size: 24px;
            line-height: 1;
            cursor: pointer;
        }

        @media (max-width: 640px) {
            .gla-modal__dialog {
                margin: auto 16px 16px;
                max-width: none;
                border-radius: 24px 24px 18px 18px;
            }
        }
    </style>

    <script>
        (() => {
            const modal = document.getElementById('dashboard-info-modal');
            const titleNode = document.getElementById('dashboard-modal-title');
            const bodyNode = document.getElementById('dashboard-modal-body');
            const openButtons = document.querySelectorAll('.stat-button');
            const closeButtons = document.querySelectorAll('[data-close-dashboard-modal]');

            const openModal = (title, body) => {
                titleNode.textContent = title;
                bodyNode.textContent = body;
                modal.hidden = false;
                document.body.style.overflow = 'hidden';
            };

            const closeModal = () => {
                modal.hidden = true;
                document.body.style.overflow = '';
            };

            openButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    openModal(button.dataset.modalTitle || 'Informação', button.dataset.modalBody || 'Sem detalhes adicionais no momento.');
                });
            });

            closeButtons.forEach((button) => {
                button.addEventListener('click', closeModal);
            });

            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape' && !modal.hidden) {
                    closeModal();
                }
            });
        })();
    </script>
@endsection