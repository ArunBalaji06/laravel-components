@foreach ($datas as $data)
    <div class="card text-center m-2" style="width: 15rem;">
        <div class="card-header">
            {{ $data['name'] }}
        </div>
        <div class="card-body">
            <h5 class="card-title">User Email</h5>
            <p class="card-text">{{ $data['email'] }}</p>
            <h5 class="card-title">User Phone</h5>
            <p class="card-text">{{ $data['phone'] }}</p>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
@endforeach

