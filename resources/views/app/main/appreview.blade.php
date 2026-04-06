@extends('app.layout.gla')
@php $pageTitle = 'Compartilhar saque'; @endphp
@section('content')
    <section class="hero">
        <h2>Compartilhe suas conquistas</h2>
        <p>Publique um comprovante de saque dentro da plataforma, inclua uma mensagem opcional e receba de {{ price(1) }} a {{ price(3) }} apos validacao administrativa.</p>
    </section>
    <section class="section">
        <h3>Novo compartilhamento</h3>
        <form action="{{ route('appreview.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="field">
                <label for="message">Mensagem ou depoimento</label>
                <textarea id="message" name="message" rows="5" placeholder="Conte sua experiencia com a GreenLand Agro."></textarea>
            </div>
            <div class="field">
                <label for="photo">Captura de tela do saque</label>
                <input id="photo" name="photo" type="file" accept="image/*" required>
                <small>Cada postagem passa por validacao antes da liberacao do bonus.</small>
            </div>
            <button class="btn btn-primary" type="submit">Enviar para validacao</button>
        </form>
    </section>
@endsection
