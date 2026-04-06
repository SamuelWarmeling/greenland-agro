@extends('admin.partials.master')
@section('admin_content')
<section id="dashboard-ecommerce">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h4 class="card-title">Compartilhamentos de saque</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Usuario</th>
                                    <th>Mensagem</th>
                                    <th>Bonus</th>
                                    <th>Status</th>
                                    <th>Imagem</th>
                                    <th>Acao</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($proofs as $proof)
                                    <tr>
                                        <td>{{ $proof->id }}</td>
                                        <td>
                                            <strong>{{ $proof->user->username ?: $proof->user->email }}</strong><br>
                                            <small>ID {{ $proof->user->ref_id }}</small>
                                        </td>
                                        <td>{{ $proof->message ?: 'Sem mensagem' }}</td>
                                        <td>{{ price($proof->payout_amount) }}</td>
                                        <td>{{ ucfirst($proof->status) }}</td>
                                        <td>
                                            <a href="{{ view_image($proof->photo) }}" target="_blank">
                                                <img src="{{ view_image($proof->photo) }}" alt="proof" style="width:64px;height:64px;object-fit:cover;border-radius:8px;">
                                            </a>
                                        </td>
                                        <td>
                                            @if($proof->status === 'pending')
                                                <form action="{{ route('admin.social-proof.status', $proof->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    <input type="hidden" name="status" value="approved">
                                                    <button class="btn btn-success btn-sm" type="submit">Aprovar</button>
                                                </form>
                                                <form action="{{ route('admin.social-proof.status', $proof->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    <input type="hidden" name="status" value="rejected">
                                                    <button class="btn btn-danger btn-sm" type="submit">Rejeitar</button>
                                                </form>
                                            @else
                                                <span class="badge badge-light">Finalizado</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">Nenhum compartilhamento enviado ate o momento.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
