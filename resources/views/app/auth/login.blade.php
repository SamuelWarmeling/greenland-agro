<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Acessar | GreenLand Agro</title>
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
            background: radial-gradient(circle at top right, rgba(107, 203, 119, 0.22), transparent 28%), linear-gradient(135deg, #1E6FA8 0%, #2E8B57 100%);
        }
        a { color: inherit; text-decoration: none; }
        .wrap { min-height: 100vh; display: grid; place-items: center; padding: 24px; }
        .auth-shell {
            width: 100%; max-width: 1080px; display: grid; grid-template-columns: 1.05fr 0.95fr;
            background: rgba(255,255,255,0.96); border: 1px solid rgba(255,255,255,0.35);
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
        .hero-copy h2 { margin: 0 0 14px; font-size: 2.5rem; line-height: 1.02; color: var(--gla-blue-dark); }
        .hero-copy p { margin: 0; max-width: 520px; color: var(--gla-muted); line-height: 1.6; font-size: 1.02rem; }
        .hero-grid { display: grid; gap: 14px; grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .hero-card { padding: 18px; border-radius: 18px; background: #fff; border: 1px solid var(--gla-border); }
        .hero-card strong { display: block; margin-bottom: 8px; color: var(--gla-blue-dark); font-size: 1rem; }
        .hero-card span { color: var(--gla-muted); line-height: 1.55; font-size: 0.95rem; }
        .panel { padding: 42px; background: #fff; }
        .eyebrow {
            display: inline-flex; align-items: center; gap: 8px; padding: 8px 12px; border-radius: 999px;
            background: rgba(34, 197, 94, 0.14); color: var(--gla-green); font-weight: 700; margin-bottom: 18px; font-size: 0.9rem;
        }
        .panel h3 { margin: 0 0 8px; font-size: 2rem; color: var(--gla-blue-dark); }
        .subtitle { margin: 0 0 24px; color: var(--gla-muted); line-height: 1.6; }
        .flash { margin-bottom: 16px; padding: 14px 16px; border-radius: 14px; font-weight: 600; }
        .flash.error { background: rgba(220, 38, 38, 0.10); color: #991b1b; }
        .field { display: grid; gap: 8px; margin-bottom: 16px; }
        .field label { font-weight: 700; color: var(--gla-blue-dark); }
        .field input {
            width: 100%; border: 1px solid var(--gla-border); border-radius: 14px; padding: 15px 16px;
            font: inherit; color: var(--gla-text); background: #fff;
        }
        .hint { color: var(--gla-muted); font-size: 0.92rem; }
        .row { display: flex; align-items: center; justify-content: space-between; gap: 12px; margin: 8px 0 22px; color: var(--gla-muted); font-size: 0.94rem; }
        .check { display: inline-flex; align-items: center; gap: 8px; }
        .check input { width: 18px; height: 18px; accent-color: var(--gla-green); }
        .btn {
            width: 100%; border: 0; border-radius: 14px; padding: 15px 16px; font: inherit; font-weight: 800;
            color: #fff; background: linear-gradient(135deg, #22C55E 0%, #2E8B57 100%); cursor: pointer;
            box-shadow: 0 16px 32px rgba(34, 197, 94, 0.24);
        }
        .footer-link { margin-top: 20px; text-align: center; color: var(--gla-muted); }
        .footer-link a { color: var(--gla-blue); font-weight: 700; }
        @media (max-width: 900px) { .auth-shell { grid-template-columns: 1fr; } .hero, .panel { padding: 28px 22px; } .hero-copy h2 { font-size: 2rem; } }
        @media (max-width: 560px) { .hero-grid { grid-template-columns: 1fr; } .row { flex-direction: column; align-items: flex-start; } }
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
                <h2>Tecnologia e inovação para o futuro da soja.</h2>
                <p>Acesse sua conta para acompanhar etapas de entrada, ciclos, benefícios da plataforma e a evolução da sua estratégia dentro da GreenLand Agro.</p>
            </div>
            <div class="hero-grid">
                <div class="hero-card">
                    <strong>Etapas e ciclos</strong>
                    <span>Acompanhe etapas de entrada, ciclos de crescimento e oportunidades especiais em um unico ambiente.</span>
                </div>
                <div class="hero-card">
                    <strong>Progressao da conta</strong>
                    <span>Veja sua evolução por nível conforme o total investido na plataforma.</span>
                </div>
            </div>
        </section>
        <section class="panel">
            <div class="eyebrow">Acesso seguro</div>
            <h3>Entrar na plataforma</h3>
            <p class="subtitle">Use seu número cadastrado e sua senha para acessar a sua área.</p>

            @if(session('error'))
                <div class="flash error">{{ session('error') }}</div>
            @endif

            @if(session('message'))
                <div class="flash error">{{ session('message') }}</div>
            @endif

            @if($errors->any())
                <div class="flash error">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf
                <div class="field">
                    <label for="phone">Número de telefone</label>
                    <input id="phone" name="phone" type="text" inputmode="numeric" value="{{ old('phone') }}" placeholder="Digite seu número cadastrado" required>
                    <div class="hint">Informe apenas o telefone usado no cadastro.</div>
                </div>
                <div class="field">
                    <label for="password">Senha</label>
                    <input id="password" name="password" type="password" placeholder="Digite sua senha" required>
                </div>
                <div class="row">
                    <label class="check">
                        <input type="checkbox" checked>
                        <span>Lembrar meus dados neste dispositivo</span>
                    </label>
                    <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
                </div>
                <button type="submit" class="btn">Entrar agora</button>
            </form>

            <div class="footer-link">Ainda não tem conta? <a href="{{ route('register') }}">Criar cadastro</a></div>
        </section>
    </div>
</div>
</body>
</html>
