@extends('app.layout.gla')
@php $pageTitle = 'Quem somos'; @endphp
@section('content')
    <section class="hero">
        <h2>GreenLand Agro</h2>
        <p>Cultivando tecnologia, colhendo resultados.</p>
    </section>
    <section class="section">
        <h3>Apresentacao institucional</h3>
        <p>A GreenLand Agro é uma empresa global de tecnologia agrícola dedicada ao desenvolvimento de soluções inteligentes para o cultivo de soja. Atuamos com monitoramento, proteção de lavouras, análise de dados e otimização de recursos para apoiar uma agricultura mais eficiente, segura e rentável.</p>
    </section>
    <section class="section">
        <h3>O que fazemos</h3>
        <div class="grid cols-2">
            <div class="card"><h4>Aceleracao do crescimento</h4><p>Solucoes que apoiam o desenvolvimento saudavel da soja do plantio a colheita.</p></div>
            <div class="card"><h4>Prevencao de pragas</h4><p>Monitoramento inteligente e protecao em tempo real contra riscos agronomicos.</p></div>
            <div class="card"><h4>Gestão e análise</h4><p>Plataformas digitais para decisões mais assertivas no campo.</p></div>
            <div class="card"><h4>Otimizacao de recursos</h4><p>Uso eficiente de agua, insumos e fertilizantes com foco em produtividade.</p></div>
        </div>
    </section>
    <section class="section">
        <h3>Linha do tempo</h3>
        <div class="timeline">
            <div class="timeline-item"><strong>2008</strong><br>Fundacao na Netherlands por Daniel Kruger.</div>
            <div class="timeline-item"><strong>2012</strong><br>Primeiros sistemas de monitoramento inteligente para lavouras de soja.</div>
            <div class="timeline-item"><strong>2015</strong><br>Expansão para a América do Sul, com operações no Brasil.</div>
            <div class="timeline-item"><strong>2018</strong><br>Lançamento da plataforma digital de gestão agrícola baseada em dados.</div>
            <div class="timeline-item"><strong>2021</strong><br>Parcerias estrategicas com produtores nos United States e Argentina.</div>
            <div class="timeline-item"><strong>2024</strong><br>Consolidacao como referencia em solucoes tecnologicas para soja em larga escala.</div>
        </div>
    </section>
@endsection
