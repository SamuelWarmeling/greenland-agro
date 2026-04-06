<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Recharge History</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css"/>

  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #0e0e0e;
      color: white;
    }

    .header {
      display: flex;
      align-items: center;
      padding: 1rem;
      background-color: #1a1a1a;
      border-bottom: 1px solid #333;
    }

    .header i {
      color: #f78e04;
      font-size: 1.5rem;
      cursor: pointer;
      margin-right: 1rem;
    }

    .header h1 {
      font-size: 1.2rem;
      color: white;
    }

    .container {
      padding: 1rem;
    }

    .history-item {
      background-color: #1a1a1a;
      padding: 1rem;
      border-radius: 8px;
      margin-bottom: 1rem;
      border: 1px solid #2e2e2e;
    }

    .history-item .row {
      display: flex;
      justify-content: space-between;
      margin-bottom: 0.5rem;
      font-size: 0.95rem;
    }

    .history-item .row span {
      color: #f78e04;
    }

    .status-success {
      color: #00c853;
    }

    .status-pending {
      color: #fcd535;
    }

    @media (max-width: 600px) {
      .container {
        padding: 1rem 0.8rem;
      }

      .history-item .row {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>

<body>
  <div class="header">
    <i class="fas fa-arrow-left" onclick="window.history.back()"></i>
    <h1>Recharge History</h1>
  </div>

  <div class="container">

  
     @foreach(\App\Models\Deposit::where('user_id', auth()->id())->orderBydesc('id')->get() as $element)
    <!-- History Item 1 -->
    <div class="history-item">
      <div class="row">
        <strong>Amount:</strong>
        <span>{{price($element->amount)}}</span>
      </div>
      <div class="row">
        <strong>Date:</strong>
        <span>{{$element->created_at}}</span>
      </div>
      <div class="row">
        <strong>Status:</strong>
        <span class="status-success">@if($element->status == 'approved')
                                    Successful Deposit
                                @elseif($element->status == 'pending')
                                    Deposit Processing
                                @elseif($element->status == 'rejected')
                                    Deposit Rejected
                                @endif</span>
      </div>
     
    </div>



@endforeach
  </div>
</body>
</html>
