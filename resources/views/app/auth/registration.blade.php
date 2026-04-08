<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Criar Conta | GreenLand Agro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --gla-green: #2E8B57;
            --gla-green-cta: #22C55E;
            --gla-blue: #1E6FA8;
            --gla-blue-dark: #0B3C5D;
            --gla-surface: #FFFFFF;
            --gla-text: #1F2937;
            --gla-muted: #6B7280;
            --gla-border: rgba(11, 60, 93, 0.12);
            --gla-shadow: 0 24px 60px rgba(11, 60, 93, 0.14);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Barlow', sans-serif;
            color: var(--gla-text);
            background: radial-gradient(circle at top left, rgba(107, 203, 119, 0.18), transparent 28%), linear-gradient(135deg, #1E6FA8 0%, #2E8B57 100%);
        }
        a { color: inherit; text-decoration: none; }
        .wrap { min-height: 100vh; display: grid; place-items: center; padding: 24px; }
        .auth-shell {
            width: 100%; max-width: 1120px; display: grid; grid-template-columns: 0.98fr 1.02fr;
            background: rgba(255,255,255,0.97); border: 1px solid rgba(255,255,255,0.32);
            border-radius: 28px; overflow: hidden; box-shadow: var(--gla-shadow);
        }
        .hero {
            padding: 42px; display: flex; flex-direction: column; justify-content: space-between; gap: 28px;
            background: linear-gradient(180deg, rgba(11, 60, 93, 0.10), rgba(11, 60, 93, 0.02)), linear-gradient(135deg, #EAF7F0 0%, #F5F7F9 100%);
        }
        .brand { display: flex; align-items: center; gap: 14px; }
        .brand-mark {
            width: 70px; height: 70px; border-radius: 18px; overflow: hidden; border: 1px solid var(--gla-border);
            background: #fff; display: flex; align-items: center; justify-content: center; flex-shrink: 0;
        }
        .brand-mark img { width: 100%; height: 100%; object-fit: cover; }
        .brand h1 { margin: 0; color: var(--gla-blue-dark); font-size: 1.2rem; }
        .brand p { margin: 4px 0 0; color: var(--gla-muted); }
        .hero-copy h2 { margin: 0 0 14px; font-size: 2.35rem; line-height: 1.04; color: var(--gla-blue-dark); }
        .hero-copy p { margin: 0; color: var(--gla-muted); line-height: 1.6; font-size: 1rem; }
        .timeline { display: grid; gap: 12px; }
        .step { padding: 16px 18px; border-radius: 18px; background: #fff; border: 1px solid var(--gla-border); }
        .step strong { display: block; color: var(--gla-blue-dark); margin-bottom: 8px; }
        .step span { color: var(--gla-muted); line-height: 1.55; }
        .panel { padding: 42px; background: #fff; }
        .eyebrow {
            display: inline-flex; align-items: center; gap: 8px; padding: 8px 12px; border-radius: 999px;
            background: rgba(30, 111, 168, 0.12); color: var(--gla-blue); font-weight: 700; margin-bottom: 18px; font-size: 0.9rem;
        }
        .panel h3 { margin: 0 0 8px; font-size: 2rem; color: var(--gla-blue-dark); }
        .subtitle { margin: 0 0 22px; color: var(--gla-muted); line-height: 1.6; }
        .flash { margin-bottom: 16px; padding: 14px 16px; border-radius: 14px; font-weight: 600; }
        .flash.error { background: rgba(220, 38, 38, 0.10); color: #991b1b; }
        .field { display: grid; gap: 8px; margin-bottom: 16px; }
        .field label { font-weight: 700; color: var(--gla-blue-dark); }
        .field input { width: 100%; border: 1px solid var(--gla-border); border-radius: 14px; padding: 15px 16px; font: inherit; color: var(--gla-text); background: #fff; }
        .hint { color: var(--gla-muted); font-size: 0.92rem; line-height: 1.5; }
        .note { margin: 18px 0 22px; padding: 16px; border-radius: 16px; background: rgba(34, 197, 94, 0.10); color: #166534; line-height: 1.6; }
        .btn { width: 100%; border: 0; border-radius: 14px; padding: 15px 16px; font: inherit; font-weight: 800; color: #fff; background: linear-gradient(135deg, #22C55E 0%, #2E8B57 100%); cursor: pointer; box-shadow: 0 16px 32px rgba(34, 197, 94, 0.24); }
        .footer-link { margin-top: 20px; text-align: center; color: var(--gla-muted); }
        .footer-link a { color: var(--gla-blue); font-weight: 700; }
        @media (max-width: 900px) { .auth-shell { grid-template-columns: 1fr; } .hero, .panel { padding: 28px 22px; } .hero-copy h2 { font-size: 2rem; } }
    </style>
</head>
<body>
<div class="wrap">
    <div class="auth-shell">
        <section class="hero">
            <div class="brand">
                <div class="brand-mark"><img src="{{ asset('public/assets/img/greenland-agro-logo.jpeg') }}" alt="GreenLand Agro"></div>
                <div>
                    <h1>GreenLand Agro</h1>
                    <p>Inovação que cultiva o futuro</p>
                </div>
            </div>
            <div class="hero-copy">
                <h2>Comece sua jornada na plataforma GreenLand Agro.</h2>
                <p>Ative sua conta, acompanhe seus benefícios e construa sua evolução com uma base clara de etapas e ciclos.</p>
            </div>
            <div class="timeline">
                <div class="step"><strong>1. Criar conta</strong><span>Cadastre seu telefone e defina a senha de acesso.</span></div>
                <div class="step"><strong>2. Ativar sua etapa inicial</strong><span>A etapa base libera a entrada na plataforma e a progressao inicial.</span></div>
                <div class="step"><strong>3. Evoluir por estrategia</strong><span>Amplie seus resultados por ciclos ativos, reinvestimento e crescimento de nível.</span></div>
            </div>
        </section>
        <section class="panel">
            <div class="eyebrow">Novo cadastro</div>
            <h3>Criar conta</h3>
            <p class="subtitle">Preencha os dados abaixo para entrar na plataforma GreenLand Agro.</p>

            @if(session('error'))
                <div class="flash error">{{ session('error') }}</div>
            @endif

            @if(session('message'))
                <div class="flash error">{{ session('message') }}</div>
            @endif

            @if($errors->any())
                <div class="flash error">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ url('register') }}">
                @csrf
                <div class="field">
                    <label for="name">Nome do produtor</label>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Digite seu nome completo" required>
                    <div class="hint">Esse nome será usado nas áreas internas da sua conta e da sua rede.</div>
                </div>
                <div class="field">
                    <label for="phone">Número de telefone</label>
                    <input id="phone" name="phone" type="text" inputmode="numeric" value="{{ old('phone') }}" placeholder="Digite seu telefone" required>
                    <div class="hint">Use um número válido para acesso e recuperação da sua conta.</div>
                </div>
                <div class="field">
                    <label for="password">Senha</label>
                    <input id="password" name="password" type="password" placeholder="Crie uma senha de acesso" required>
                    <div class="hint">Use pelo menos 8 caracteres para deixar sua conta mais protegida.</div>
                </div>
                <div class="field">
                    <label for="password_confirmation">Confirmar senha</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repita a sua senha" required>
                </div>
                <div class="field">
                    <label for="ref_by">Código de indicação</label>
                    <input id="ref_by" name="ref_by" type="text" value="{{ old('ref_by', $ref_by ?? '') }}" placeholder="Opcional">
                    <div class="hint">Se você foi convidado, informe o código para vincular o cadastro.</div>
                </div>
                <div class="note">Ao criar sua conta, você entra na plataforma e poderá ativar sua etapa inicial para iniciar a sua jornada dentro da GreenLand Agro.</div>
                <button type="submit" class="btn">Criar minha conta</button>
            </form>

            <div class="footer-link">Já possui conta? <a href="{{ route('login') }}">Entrar agora</a></div>
        </section>
    </div>
</div>
</body>
</html>
