<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GreenLand Agro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --gla-green: #2E8B57;
            --gla-green-cta: #22C55E;
            --gla-blue: #1E6FA8;
            --gla-blue-dark: #0B3C5D;
            --gla-bg: #F5F7F9;
            --gla-text: #1F2937;
            --gla-muted: #6B7280;
            --gla-surface: #FFFFFF;
            --gla-border: rgba(11, 60, 93, 0.10);
            --gla-shadow: 0 18px 48px rgba(11, 60, 93, 0.12);
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Barlow', sans-serif;
            color: var(--gla-text);
            background:
                radial-gradient(circle at top left, rgba(107, 203, 119, 0.18), transparent 26%),
                radial-gradient(circle at top right, rgba(30, 111, 168, 0.18), transparent 28%),
                linear-gradient(180deg, #fbfeff 0%, #edf5f7 100%);
        }
        a { text-decoration: none; color: inherit; }
        img { max-width: 100%; display: block; }
        .wrapper { max-width: 1160px; margin: 0 auto; padding: 28px 18px 60px; }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 18px;
            margin-bottom: 30px;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .brand img {
            width: 64px;
            height: 64px;
            border-radius: 18px;
            object-fit: cover;
            border: 1px solid var(--gla-border);
            background: #fff;
        }
        .brand h1 { margin: 0; color: var(--gla-blue-dark); font-size: 1.3rem; }
        .brand p { margin: 2px 0 0; color: var(--gla-muted); }
        .actions { display: flex; gap: 12px; flex-wrap: wrap; }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 13px 18px;
            border-radius: 14px;
            font-weight: 700;
            border: 1px solid var(--gla-border);
        }
        .btn-primary { background: var(--gla-green-cta); color: #fff; border: 0; }
        .btn-secondary { background: rgba(30, 111, 168, 0.08); color: var(--gla-blue-dark); }
        .hero {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 22px;
            align-items: stretch;
            margin-bottom: 22px;
        }
        .panel {
            background: var(--gla-surface);
            border: 1px solid var(--gla-border);
            border-radius: 28px;
            box-shadow: var(--gla-shadow);
            overflow: hidden;
        }
        .hero-main {
            background: linear-gradient(135deg, var(--gla-blue) 0%, var(--gla-green) 100%);
            color: #fff;
            padding: 34px;
        }
        .hero-main h2 {
            margin: 0 0 12px;
            font-size: 3rem;
            line-height: 1;
        }
        .hero-main p {
            margin: 0;
            font-size: 1.08rem;
            line-height: 1.7;
            color: rgba(255,255,255,0.92);
        }
        .hero-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
            margin-top: 24px;
        }
        .hero-card {
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.16);
            border-radius: 18px;
            padding: 16px;
        }
        .hero-card strong { display: block; margin-bottom: 8px; font-size: 1.1rem; }
        .hero-side { padding: 26px; }
        .hero-side h3 { margin: 0 0 14px; color: var(--gla-blue-dark); font-size: 1.3rem; }
        .hero-side ul { margin: 0; padding-left: 18px; line-height: 1.8; color: var(--gla-muted); }
        .section-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 18px;
        }
        .section-card {
            background: var(--gla-surface);
            border: 1px solid var(--gla-border);
            border-radius: 24px;
            box-shadow: 0 10px 24px rgba(11, 60, 93, 0.06);
            padding: 22px;
        }
        .section-card h3, .wide-card h3 { margin: 0 0 12px; color: var(--gla-blue-dark); font-size: 1.25rem; }
        .section-card p, .wide-card p, .section-card li, .wide-card li { color: var(--gla-muted); line-height: 1.7; }
        .wide-card {
            background: var(--gla-surface);
            border: 1px solid var(--gla-border);
            border-radius: 28px;
            box-shadow: 0 10px 24px rgba(11, 60, 93, 0.06);
            padding: 26px;
            margin-top: 18px;
        }
        .plan-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            margin-top: 16px;
        }
        .plan {
            border: 1px solid var(--gla-border);
            border-radius: 18px;
            padding: 16px;
            background: linear-gradient(180deg, #fff 0%, #f8fbfd 100%);
        }
        .plan strong { display: block; color: var(--gla-blue-dark); margin-bottom: 8px; }
        .plan .price { color: var(--gla-green); font-size: 1.5rem; font-weight: 800; margin-bottom: 6px; }
        .faq { display: grid; gap: 14px; }
        .faq-item {
            border: 1px solid var(--gla-border);
            border-radius: 18px;
            padding: 18px;
            background: #fff;
        }
        .faq-item strong { display: block; margin-bottom: 8px; color: var(--gla-blue-dark); }
        @media (max-width: 900px) {
            .hero, .section-grid, .plan-grid { grid-template-columns: 1fr; }
            .hero-main h2 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="topbar">
        <div class="brand">
            <img src="{{ asset('public/assets/img/greenland-agro-logo.jpeg') }}" alt="GreenLand Agro">
            <div>
                <h1>GreenLand Agro</h1>
                <p>Inovação que cultiva o futuro</p>
            </div>
        </div>
        <div class="actions">
            <a class="btn btn-secondary" href="{{ route('login') }}">Entrar</a>
            <a class="btn btn-primary" href="{{ route('register') }}">Criar cadastro</a>
        </div>
    </div>

    <div class="hero">
        <div class="panel hero-main">
            <h2>Tecnologia que organiza a jornada do produtor moderno.</h2>
            <p>A GreenLand Agro une visual agricola, progressao clara, convites inteligentes e operacao digital em uma experiencia mais profissional para acompanhar planos, ciclos, equipe e beneficios da plataforma.</p>
            <div class="hero-grid">
                <div class="hero-card">
                    <strong>Planos base de 40 dias</strong>
                    Ative sua conta com etapas de entrada claras e alinhadas a sua evolucao.
                </div>
                <div class="hero-card">
                    <strong>Ciclos e oportunidades</strong>
                    Escolha ciclos compativeis com seu nivel e acompanhe a progressao da sua estrategia.
                </div>
                <div class="hero-card">
                    <strong>Equipe e convites</strong>
                    Compartilhe seu link, acompanhe sua rede e visualize suas comissoes com mais clareza.
                </div>
                <div class="hero-card">
                    <strong>Operacao organizada</strong>
                    Veja regras de saque, check-in, compartilhamentos e controle de conta em um unico ambiente.
                </div>
            </div>
        </div>
        <div class="panel hero-side">
            <h3>Comece em poucos passos</h3>
            <ul>
                <li>Crie sua conta e informe seus dados com seguranca.</li>
                <li>Ative uma etapa base de 40 dias para liberar sua jornada.</li>
                <li>Cadastre sua chave PIX para saques futuros.</li>
                <li>Deposite, acompanhe sua evolucao e compartilhe seu convite.</li>
            </ul>
            <div class="actions" style="margin-top:20px;">
                <a class="btn btn-primary" href="{{ route('register') }}">Quero entrar na plataforma</a>
            </div>
        </div>
    </div>

    <div class="section-grid">
        <div class="section-card">
            <h3>Empresa</h3>
            <p>A GreenLand Agro apresenta uma experiencia inspirada em produtividade, crescimento e estrategia, com identidade visual coerente e comunicacao voltada a tecnologia e agronegocio.</p>
        </div>
        <div class="section-card">
            <h3>Tecnologia</h3>
            <p>O ambiente foi desenhado para simplificar deposito, saque, convites, compartilhamentos e acompanhamento de etapas dentro da plataforma.</p>
        </div>
        <div class="section-card">
            <h3>Vantagens</h3>
            <p>Onboarding guiado, metas visuais, historicos claros, area de equipe e uma experiencia mobile com mais leitura e menos ruído.</p>
        </div>
    </div>

    <div class="wide-card">
        <h3>Etapas de entrada</h3>
        <p>Conheca a progressao inicial da plataforma, todas com 40 dias de duracao.</p>
        <div class="plan-grid">
            <div class="plan"><strong>Semente</strong><div class="price">R$ 40,00</div><span>R$ 6,00 por dia</span></div>
            <div class="plan"><strong>Broto</strong><div class="price">R$ 80,00</div><span>R$ 12,00 por dia</span></div>
            <div class="plan"><strong>Cultivo</strong><div class="price">R$ 120,00</div><span>R$ 18,00 por dia</span></div>
            <div class="plan"><strong>Safrinha</strong><div class="price">R$ 240,00</div><span>R$ 36,00 por dia</span></div>
            <div class="plan"><strong>Safra</strong><div class="price">R$ 480,00</div><span>R$ 72,00 por dia</span></div>
            <div class="plan"><strong>Colheita Premium</strong><div class="price">R$ 960,00</div><span>R$ 144,00 por dia</span></div>
        </div>
    </div>

    <div class="wide-card">
        <h3>Perguntas frequentes</h3>
        <div class="faq">
            <div class="faq-item">
                <strong>Como faco para comecar?</strong>
                Crie sua conta, escolha uma etapa de entrada, cadastre sua chave PIX e acompanhe sua jornada pelo painel.
            </div>
            <div class="faq-item">
                <strong>Quando posso solicitar saque?</strong>
                As solicitacoes seguem a janela das 10:00 as 17:00, com limite de uma por dia, taxa operacional e prazo de processamento informado na plataforma.
            </div>
            <div class="faq-item">
                <strong>Como funciona o sistema de convites?</strong>
                Cada conta recebe um codigo e um link unicos. Voce acompanha sua rede por niveis e suas comissoes diretamente na area de convites.
            </div>
        </div>
    </div>
</div>
</body>
</html>
