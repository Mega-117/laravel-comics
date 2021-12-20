@foreach ($productsList as $item)
          <div class="card">
              <div class="img-container">
                  <img src="{{$item['thumb']}}" alt="" />
                </div>
                <div class="title">
                    <h6>{{$item['series']}}</h6>
                </div>
            </div>
            @endforeach