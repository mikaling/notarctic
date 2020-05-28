
        <div class="container">


                <section class="latest-product-area pb-40 category-list" style="margin-top: 50px">
                    <div class="row">

                        @foreach($category as $category)
{{--                        <li class="filter-list"><input class="pixel-radio" type="radio" id="men" name="brand"><label for="men"> <a href="/categories/{{ $category->id }}" class="btn-dark">{{$category->name}}</a><span> (3600)</span></label></li>--}}


                        <div class="col-md-6 col-lg-4">
                            <div class="card text-center card-product">
                                <div class="card-product__img">
                                    <img class="card-img" src="img/product/img{{$category->id}}.png" style="width: 210px;height: 210px" alt="">

                                </div>
                                <div class="card-body">
{{--                                    <p>Accessories</p>--}}
                                    <h4 class="card-product__title"><a href="/notarctic/public/categories/{{ $category->id }}" >{{$category->name}}</a></h4>
                                </div>
                            </div>
                        </div>


{{--                        <div>--}}
{{--                            <p>{{$category->name}}</p>--}}
{{--                        </div>--}}

                    @endforeach
                    </div>

                </section>

    </div>

