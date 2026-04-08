@extends('app.layout.gla')
@php $pageTitle = 'Ajuda'; @endphp
@section('content')
    <section class="hero">
        <h2>Central de ajuda</h2>
        <p>Encontre respostas rápidas para ativação, níveis, check-in, compartilhamentos e operações financeiras.</p>
    </section>
    <section class="section">
        <h3>Perguntas frequentes</h3>
        <div class="timeline">
            <div class="timeline-item"><strong>Como ativo minha conta?</strong><br>Compre um plano base de 40 dias para sair do Nível 0 e liberar os beneficios iniciais.</div>
            <div class="timeline-item"><strong>Como evoluo de nível?</strong><br>Seu nível evolui conforme o valor total investido na plataforma.</div>
            <div class="timeline-item"><strong>Como recebo o check-in?</strong><br>Basta entrar diariamente e confirmar seu bônus diário na área de check-in.</div>
            <div class="timeline-item"><strong>Como recebo o bônus de compartilhamento?</strong><br>Envie um comprovante de saque na área de compartilhamento e aguarde a validação administrativa.</div>
        </div>
    </section>
@endsection
