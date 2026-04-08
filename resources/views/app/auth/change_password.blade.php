@extends('app.layout.gla')
@php
    $pageTitle = 'Alterar senha';
@endphp

@section('content')
    <section class="hero">
        <h2>Alterar senha de acesso</h2>
        <p>Atualize sua senha para manter sua conta protegida e continuar usando a plataforma GreenLand Agro com segurança.</p>
    </section>

    <section class="section">
        <h3>Dados da nova senha</h3>
        <form action="{{ route('user.change.password.confirmation') }}" method="POST" style="display:grid; gap:16px;">
            @csrf
            <div class="field">
                <label for="old_password">Senha atual</label>
                <input id="old_password" name="old_password" type="password" placeholder="Digite sua senha atual" required>
            </div>
            <div class="field">
                <label for="new_password">Nova senha</label>
                <input id="new_password" name="new_password" type="password" placeholder="Digite a nova senha" required>
                <small>Use pelo menos 8 caracteres para aumentar a proteção da sua conta.</small>
            </div>
            <div class="field">
                <label for="confirm_password">Confirmar nova senha</label>
                <input id="confirm_password" name="confirm_password" type="password" placeholder="Repita a nova senha" required>
            </div>
            <div class="actions">
                <button class="btn btn-primary" type="submit">Salvar nova senha</button>
            </div>
        </form>
    </section>

    <section class="section">
        <h3>Boas práticas</h3>
        <div class="table-like">
            <div class="row-line"><span>Evite senhas simples</span><strong>Use letras, números e combinações únicas</strong></div>
            <div class="row-line"><span>Não compartilhe sua senha</span><strong>Mantenha esse acesso somente com você</strong></div>
            <div class="row-line"><span>Validade imediata</span><strong>A nova senha passa a valer logo após a confirmação</strong></div>
        </div>
    </section>
@endsection