<div class="col">
    <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-header py-3">
        <h4 class="my-0 fw-normal">xxxxFree</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">{{ $price }} UAH <br>
        <h<small class="text-body-secondary fw-light">/per service<br>{{ $duration }} minutes</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
            @foreach($options as $option)
                <li>{{ $option }}</li>
            @endforeach
        </ul>
        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Order(</button>
      </div>
    </div>
  </div>
