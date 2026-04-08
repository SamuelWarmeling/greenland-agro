@extends('admin.partials.master')
@section('admin_content')
    @php
        $pendingDepositsCount = \App\Models\Deposit::where('status', 'pending')->count();
        $pendingWithdrawsCount = \App\Models\Withdrawal::where('status', 'pending')->count();
        $pendingProofsCount = \App\Models\SocialProof::where('status', 'pending')->count();
        $usersWithoutPix = \App\Models\User::where(function ($query) {
            $query->whereNull('gateway_number')->orWhere('gateway_number', '');
        })->count();
    @endphp
    <style>
        .card-body {
            background: #425c49;
        }

        .text-muted {
            color: #fff !important;
        }

        h3 {
            color: #fff;
        }
        .quick-link {
            display: block;
            border-radius: 12px;
            padding: 14px 16px;
            background: #fff;
            border: 1px solid rgba(66, 92, 73, 0.14);
            color: #2f4435;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .quick-link small {
            display: block;
            margin-top: 4px;
            color: #64748b;
            font-weight: 500;
        }
    </style>
    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="{{ route('admin.payment.pending') }}" class="quick-link">
                            Depositos pendentes
                            <small>{{ $pendingDepositsCount }} aguardando analise</small>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="{{ route('admin.withdraw.pending') }}" class="quick-link">
                            Saques pendentes
                            <small>{{ $pendingWithdrawsCount }} aguardando analise</small>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="{{ route('admin.social-proof.index') }}" class="quick-link">
                            Compartilhamentos pendentes
                            <small>{{ $pendingProofsCount }} aguardando validacao</small>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <a href="{{ route('admin.customer.index') }}" class="quick-link">
                            Usuarios sem chave PIX
                            <small>{{ $usersWithoutPix }} precisam completar o cadastro</small>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-12 dashboard-users">
                <div class="row  ">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-4 col-12 dashboard-users-danger">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                <i class="bx bx-user font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Users</div>
                                            <h3 class="mb-0">{{\App\Models\User::get()->count()}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-12 dashboard-users-success">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                                <i class="bx bx-briefcase-alt font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Total Purchase</div>
                                            <h3 class="mb-0">{{\App\Models\Purchase::get()->count()}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-12 dashboard-users-success">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-success mx-auto mb-50">
                                                <i class="bx bx-briefcase-alt font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Total Checkin</div>
                                            <h3 class="mb-0">{{\App\Models\Checkin::get()->count()}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12 dashboard-users-danger">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                <i class="bx bx-shopping-bag font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Active Bonus</div>
                                            <?php
                                            $b = \App\Models\Bonus::where('status', 'active')->first();
                                            ?>
                                            <h3 class="mb-0"
                                                style="font-size: 13px !important;">{{$b ? $b->bonus_name : 'Bonus not Available'}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4 col-12 dashboard-users-danger">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                <i class="bx bx-shopping-bag font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Already Use Bonus</div>
                                            <?php
                                            $b_c = \App\Models\Bonus::where('status', 'active')->first();
                                            ?>
                                            <h3 class="mb-0" style="font-size: 13px !important;">{{$b_c ? $b_c->counter : 'N/A'}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-sm-4 col-12 dashboard-users-danger">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                <i class="bx bx-circle font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Approved Withdraw</div>
                                            <h3 class="mb-0">{{price(\App\Models\Withdrawal::where('status', 'approved')->get()->sum('amount'))}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12 dashboard-users-danger">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                <i class="bx bx-circle font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Pending Withdraw</div>
                                            <h3 class="mb-0">{{price(\App\Models\Withdrawal::where('status', 'pending')->get()->sum('amount'))}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12 dashboard-users-danger">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                <i class="bx bx-circle font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Rejected Withdraw</div>
                                            <h3 class="mb-0">{{price(\App\Models\Withdrawal::where('status', 'rejected')->get()->sum('amount'))}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12 dashboard-users-danger">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                <i class="bx bx-circle font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Approved Deposit</div>
                                            <h3 class="mb-0">{{price(\App\Models\Deposit::where('status', 'approved')->get()->sum('amount'))}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12 dashboard-users-danger">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                <i class="bx bx-circle font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Pending Deposit</div>
                                            <h3 class="mb-0">{{price(\App\Models\Deposit::where('status', 'pending')->get()->sum('amount'))}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12 dashboard-users-danger">
                                <div class="card text-center">
                                    <div class="card-content">
                                        <div class="card-body py-1">
                                            <div
                                                class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto mb-50">
                                                <i class="bx bx-circle font-medium-5"></i>
                                            </div>
                                            <div class="text-muted line-ellipsis">Rejected Deposit</div>
                                            <h3 class="mb-0">{{price(\App\Models\Deposit::where('status', 'rejected')->get()->sum('amount'))}}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
