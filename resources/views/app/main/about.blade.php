@extends('app.layout.gla')
@php $pageTitle = 'Quem somos'; @endphp
@section('content')
    <section class="hero">
        <h2>GreenLand Agro</h2>
        <p>Cultivando tecnologia, colhendo resultados.</p>
    </section>
    <section class="section">
        <h3>Apresentacao institucional</h3>
        <p>A GreenLand Agro e uma empresa global de tecnologia agricola dedicada ao desenvolvimento de solucoes inteligentes para o cultivo de soja. Atuamos com monitoramento, protecao de lavouras, analise de dados e otimizacao de recursos para apoiar uma agricultura mais eficiente, segura e rentavel.</p>
    </section>
    <section class="section">
        <h3>O que fazemos</h3>
        <div class="grid cols-2">
            <div class="card"><h4>Aceleracao do crescimento</h4><p>Solucoes que apoiam o desenvolvimento saudavel da soja do plantio a colheita.</p></div>
            <div class="card"><h4>Prevencao de pragas</h4><p>Monitoramento inteligente e protecao em tempo real contra riscos agronomicos.</p></div>
            <div class="card"><h4>Gestao e analise</h4><p>Plataformas digitais para decisoes mais assertivas no campo.</p></div>
            <div class="card"><h4>Otimizacao de recursos</h4><p>Uso eficiente de agua, insumos e fertilizantes com foco em produtividade.</p></div>
        </div>
    </section>
    <section class="section">
        <h3>Linha do tempo</h3>
        <div class="timeline">
            <div class="timeline-item"><strong>2008</strong><br>Fundacao na Netherlands por Daniel Kruger.</div>
            <div class="timeline-item"><strong>2012</strong><br>Primeiros sistemas de monitoramento inteligente para lavouras de soja.</div>
            <div class="timeline-item"><strong>2015</strong><br>Expansao para a South America, com operacoes no Brazil.</div>
            <div class="timeline-item"><strong>2018</strong><br>Lancamento da plataforma digital de gestao agricola baseada em dados.</div>
            <div class="timeline-item"><strong>2021</strong><br>Parcerias estrategicas com produtores nos United States e Argentina.</div>
            <div class="timeline-item"><strong>2024</strong><br>Consolidacao como referencia em solucoes tecnologicas para soja em larga escala.</div>
        </div>
    </section>
@endsection
