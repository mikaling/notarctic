<section class="product_description_area">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
                   aria-selected="false">Reviews</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row total_rate d-flex">
                            <div class="col-6">
                                <div class="box_total">
                                    <h5>Overall</h5>
                                    <h4>{{ $review_analysis['review_rating'] }}</h4>
                                    <h6>({{ $review_analysis['review_count'] }} Reviews)</h6>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="rating_list">
                                    <h3>Based on {{ $review_analysis['review_count'] }} Reviews</h3>
                                    <ul class="list">
                                        <li><a href="#">
                                            {{ $review_analysis['count_rating_five'] }}
                                            @for($i = 0; $i < 5; $i++)
                                            <i class="fa fa-star"></i>
                                            @endfor
                                        </a></li>

                                        <li><a href="#">
                                            {{ $review_analysis['count_rating_four'] }}
                                            @for($i = 0; $i < 4; $i++)
                                            <i class="fa fa-star"></i>
                                            @endfor
                                        </a></li>

                                        <li><a href="#">
                                            {{ $review_analysis['count_rating_three'] }}
                                            @for($i = 0; $i < 3; $i++)
                                            <i class="fa fa-star"></i>
                                            @endfor
                                        </a></li>

                                        <li><a href="#">
                                            {{ $review_analysis['count_rating_two'] }}
                                            @for($i = 0; $i < 2; $i++)
                                            <i class="fa fa-star"></i>
                                            @endfor
                                        </a></li>

                                        <li><a href="#">
                                            {{ $review_analysis['count_rating_one'] }}
                                            @for($i = 0; $i < 1; $i++)
                                            <i class="fa fa-star"></i>
                                            @endfor
                                        </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                        <div class="review_list">
                            @foreach($reviews as $review)
                                <div class="review_item">
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="img/product/review-1.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4>Blake Ruiz</h4>
                                            @for($i = 0; $i < $review->rating; $i++)
                                            <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>
                                    <h4>{{$review->title}}</h4>
                                    <p>{{$review->body}}</p>
                                </div>
                            @endforeach
                            {{ $reviews->links() }}
                        </div>
                    </div>
                    <!--div here-->
            </div>
        </div>
    </div>
</section>
