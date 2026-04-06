@extends('app.layout.gla')
@php $pageTitle = 'Ajuda'; @endphp
@section('content')
    <section class="hero">
        <h2>Central de ajuda</h2>
        <p>Encontre respostas rapidas para ativacao, niveis VIP, check-in, compartilhamentos e operacoes financeiras.</p>
    </section>
    <section class="section">
        <h3>Perguntas frequentes</h3>
        <div class="timeline">
            <div class="timeline-item"><strong>Como ativo minha conta?</strong><br>Compre um plano base de 40 dias para sair do VIP 0 e liberar os beneficios iniciais.</div>
            <div class="timeline-item"><strong>Como evoluo de nivel?</strong><br>Seu VIP sobe conforme o valor total investido na plataforma.</div>
            <div class="timeline-item"><strong>Como recebo o check-in?</strong><br>Basta entrar diariamente e confirmar seu bonus diario na area de check-in.</div>
            <div class="timeline-item"><strong>Como recebo o bonus de compartilhamento?</strong><br>Envie um comprovante de saque na area de compartilhamento e aguarde a validacao administrativa.</div>
        </div>
    </section>
@endsection
