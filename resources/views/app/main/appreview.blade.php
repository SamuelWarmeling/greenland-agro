@extends('app.layout.gla')
@php
    $pageTitle = 'Compartilhar saque';
    $recentProofs = \App\Models\SocialProof::with('user')->where('status', 'approved')->latest()->take(4)->get();
@endphp
@section('content')
    <section class="hero">
        <h2>Compartilhe suas conquistas</h2>
        <p>Publique um comprovante de saque dentro da plataforma, inclua uma mensagem opcional e receba de {{ price(1) }} a {{ price(3) }} após validação administrativa.</p>
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
                <small>Cada postagem passa por validação antes da liberação do bônus.</small>
            </div>
            <button class="btn btn-primary" type="submit">Enviar para validação</button>
        </form>
    </section>
    <section class="section">
        <h3>Vitrine da comunidade</h3>
        @if($recentProofs->isEmpty())
            <div class="card">
                <h4>Primeiras conquistas em destaque</h4>
                <p>Assim que os compartilhamentos forem validados pela equipe, os depoimentos e conquistas recentes vao aparecer aqui para fortalecer a credibilidade da comunidade.</p>
            </div>
        @else
            <div class="grid cols-2">
                @foreach($recentProofs as $proof)
                    <div class="card">
                        <div class="badge info" style="margin-bottom:12px;">Conquista validada</div>
                        <h4>{{ $proof->user->name ?: 'Produtor GreenLand' }}</h4>
                        <p>{{ $proof->message ?: 'Compartilhamento validado pela equipe GreenLand Agro.' }}</p>
                        <small class="subtle">Bônus recebido: {{ price($proof->payout_amount) }}</small>
                    </div>
                @endforeach
            </div>
        @endif
    </section>
@endsection
