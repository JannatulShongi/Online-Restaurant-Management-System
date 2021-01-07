@extends ('frontend.master')
@section('content')

<div class="container" style="margin-bottom: 320px">
    <div class="section-title">
      <h2>Our Specials</h2>
    </div>

    <div class="row">
        @foreach ($items as $item)
        <div class="col-xs-12 col-sm-4">
            <div class="features-item">
              <p class="card-text">{{ $item->name }}</p>
              <img src="" class="img-responsive" alt="">
              <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">150 BDT</small>

              </div>
                  <div class="btn-group">
                      <a class="btn btn-sm btn-outline-secondary" href="">View</a>
                      <a class="btn btn-sm btn-outline-secondary" href=""> Add To Cart</a>
                  </div>


            </div>
        </div>
        @endforeach


    </div>
  </div>
</div>


@stop
