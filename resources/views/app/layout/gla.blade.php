@php
    $headerName = trim((string) auth()->user()->name);
    if ($headerName === '' || str_starts_with($headerName, 'User')) {
        $headerName = 'Produtor GreenLand';
    }

    $headerIdentifier = auth()->user()->phone
        ? 'Telefone ' . auth()->user()->phone
        : 'Codigo ' . (auth()->user()->ref_id ?: '--');
@endphp
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ ($pageTitle ?? 'GreenLand Agro') . ' | GreenLand Agro' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --gla-green: #2E8B57;
            --gla-green-light: #6BCB77;
            --gla-green-cta: #22C55E;
            --gla-blue: #1E6FA8;
            --gla-blue-dark: #0B3C5D;
            --gla-blue-hover: #3B82F6;
            --gla-bg: #F5F7F9;
            --gla-surface: #FFFFFF;
            --gla-text: #1F2937;
            --gla-muted: #6B7280;
            --gla-border: rgba(11, 60, 93, 0.10);
            --gla-shadow: 0 18px 48px rgba(11, 60, 93, 0.12);
            --gla-radius: 18px;
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'Barlow', sans-serif;
            background: linear-gradient(180deg, #f8fbfd 0%, #eef5f7 100%);
            color: var(--gla-text);
        }
        a { color: inherit; text-decoration: none; }
        img { max-width: 100%; display: block; }
        .shell {
            min-height: 100vh;
            padding: 24px 16px 92px;
            max-width: 760px;
            margin: 0 auto;
        }
        .topbar {
            background: var(--gla-surface);
            border: 1px solid var(--gla-border);
            border-radius: 22px;
            box-shadow: var(--gla-shadow);
            padding: 18px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 18px;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .brand-mark {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: linear-gradient(135deg, var(--gla-blue) 0%, var(--gla-green) 100%);
            color: #fff;
            display: grid;
            place-items: center;
            font-weight: 800;
            letter-spacing: 0.06em;
        }
        .brand h1 {
            margin: 0;
            font-size: 1.15rem;
            color: var(--gla-blue-dark);
        }
        .brand p, .meta, .subtle {
            margin: 0;
            color: var(--gla-muted);
        }
        .hero {
            background: linear-gradient(135deg, var(--gla-blue) 0%, var(--gla-green) 100%);
            border-radius: 28px;
            color: #fff;
            padding: 28px 24px;
            box-shadow: var(--gla-shadow);
            margin-bottom: 18px;
        }
        .hero h2 {
            margin: 0 0 10px;
            font-size: 1.75rem;
            line-height: 1.1;
        }
        .hero p {
            margin: 0;
            color: rgba(255,255,255,0.9);
            line-height: 1.55;
        }
        .section {
            background: var(--gla-surface);
            border: 1px solid var(--gla-border);
            border-radius: 24px;
            box-shadow: 0 10px 24px rgba(11, 60, 93, 0.06);
            padding: 22px;
            margin-bottom: 18px;
        }
        .section h3 {
            margin: 0 0 14px;
            font-size: 1.2rem;
            color: var(--gla-blue-dark);
        }
        .section p { line-height: 1.6; }
        .grid {
            display: grid;
            gap: 14px;
        }
        .grid.cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .card {
            border: 1px solid var(--gla-border);
            border-radius: var(--gla-radius);
            padding: 18px;
            background: linear-gradient(180deg, #fff 0%, #f8fbfd 100%);
        }
        .card h4 {
            margin: 0 0 8px;
            color: var(--gla-blue-dark);
            font-size: 1rem;
        }
        .card .price {
            font-size: 1.45rem;
            font-weight: 800;
            color: var(--gla-green);
            margin-bottom: 10px;
        }
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border-radius: 999px;
            padding: 7px 12px;
            font-size: 0.85rem;
            font-weight: 700;
            background: rgba(46, 139, 87, 0.12);
            color: var(--gla-green);
        }
        .badge.info {
            background: rgba(30, 111, 168, 0.12);
            color: var(--gla-blue);
        }
        .badge.warn {
            background: rgba(250, 204, 21, 0.18);
            color: #9a6b00;
        }
        .stats {
            display: grid;
            gap: 14px;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
        .stat {
            padding: 18px;
            border-radius: 20px;
            background: var(--gla-surface);
            border: 1px solid var(--gla-border);
        }
        .stat strong {
            display: block;
            font-size: 1.6rem;
            color: var(--gla-blue-dark);
        }
        .actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 16px;
        }
        .btn {
            appearance: none;
            border: 0;
            border-radius: 12px;
            padding: 12px 16px;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
        }
        .btn-primary {
            background: var(--gla-green-cta);
            color: #fff;
        }
        .btn-primary:hover { background: #16A34A; }
        .btn-secondary {
            background: rgba(30, 111, 168, 0.10);
            color: var(--gla-blue-dark);
        }
        .btn-ghost {
            background: transparent;
            border: 1px solid var(--gla-border);
            color: var(--gla-blue-dark);
        }
        .list {
            margin: 0;
            padding-left: 18px;
            color: var(--gla-text);
            line-height: 1.7;
        }
        .timeline {
            display: grid;
            gap: 12px;
        }
        .timeline-item {
            padding: 16px 18px;
            border-left: 4px solid var(--gla-green);
            background: rgba(46, 139, 87, 0.06);
            border-radius: 0 14px 14px 0;
        }
        .table-like {
            display: grid;
            gap: 10px;
        }
        .row-line {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid var(--gla-border);
        }
        .row-line:last-child { border-bottom: 0; }
        .flash {
            margin-bottom: 16px;
            padding: 14px 16px;
            border-radius: 14px;
            font-weight: 600;
        }
        .flash.success { background: rgba(34, 197, 94, 0.15); color: #116432; }
        .flash.error { background: rgba(220, 38, 38, 0.12); color: #991b1b; }
        .field {
            display: grid;
            gap: 8px;
            margin-bottom: 14px;
        }
        .field label { font-weight: 700; color: var(--gla-blue-dark); }
        .field input,
        .field textarea,
        .field select {
            width: 100%;
            border-radius: 12px;
            border: 1px solid rgba(11, 60, 93, 0.14);
            padding: 13px 14px;
            font: inherit;
            background: #fff;
            color: var(--gla-text);
        }
        .field small { color: var(--gla-muted); }
        .nav-bottom {
            position: fixed;
            left: 50%;
            bottom: 14px;
            transform: translateX(-50%);
            width: min(760px, calc(100% - 24px));
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(12px);
            border: 1px solid var(--gla-border);
            border-radius: 20px;
            box-shadow: var(--gla-shadow);
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            padding: 10px;
            z-index: 20;
        }
        .nav-bottom a {
            text-align: center;
            font-size: 0.78rem;
            color: var(--gla-muted);
            padding: 8px 4px;
            border-radius: 14px;
            font-weight: 700;
        }
        .nav-bottom a.active,
        .nav-bottom a:hover {
            background: rgba(34, 197, 94, 0.12);
            color: var(--gla-green);
        }
        @media (max-width: 640px) {
            .grid.cols-2, .stats {
                grid-template-columns: 1fr;
            }
            .topbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .hero h2 { font-size: 1.45rem; }
        }
    </style>
</head>
<body>
<div class="shell">
    <div class="topbar">
        <div class="brand">
            <div class="brand-mark">GLA</div>
            <div>
                <h1>GreenLand Agro</h1>
                <p>Inovacao que cultiva o futuro</p>
            </div>
        </div>
        <div class="meta">
            <strong>{{ auth()->user()->package_tab ?: 'VIP 0' }}</strong><br>
            {{ $headerIdentifier }}
        </div>
    </div>

    @if(session('success'))
        <div class="flash success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="flash error">{{ session('error') }}</div>
    @endif
    @if($errors->any())
        <div class="flash error">{{ $errors->first() }}</div>
    @endif

    @yield('content')
</div>

<nav class="nav-bottom">
    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">Inicio</a>
    <a href="{{ route('vip') }}" class="{{ request()->routeIs('vip') ? 'active' : '' }}">Planos</a>
    <a href="{{ route('user.deposit') }}" class="{{ request()->routeIs('user.deposit') ? 'active' : '' }}">Deposito</a>
    <a href="{{ route('user.invite') }}" class="{{ request()->routeIs('user.invite') ? 'active' : '' }}">Convites</a>
    <a href="{{ route('profile') }}" class="{{ request()->routeIs('profile') ? 'active' : '' }}">Conta</a>
</nav>
</body>
</html>
