@extends('layouts.app')

@section('content')
<!-- ================ start banner area ================= -->
  <section class="blog-banner-area" id="category">
    <div class="container h-25">
      <div class="blog-banner">
        <div class="text-center">
          <h1>User Reviews</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
<!-- ================ end banner area ================= -->

<style type="text/css">
  * {
  box-sizing: border-box;
}

/*body {
  font-family: Arial, Helvetica, sans-serif;
}*/

.review1,.review3 {

  background-color: #f1f1f1;
  padding: 10px;
}


}
</style>
<section class="section-margin--small mb-5">
<div class="container justify-content-center">
<div class="row">
<div class="accordion w-100" id="accordionExample">
 <section class=Reviews>
  <div class="review1">
  <article>
      <p><i>Service</i></p>

    <p>"Arctic responds quickly..is reasonably priced and has always come through fixing my computer problems.<p> I'd recommend them far and wide to everyone!"</p>

 <b><p>Jon Mesa, Nairobi</p></b>
  </article>
</div>
<div class="review2">
  <article>
  <p><i>Service</i></p>
    <p>"Quick, highly efficient,and cost-effective computers brought to you by really nice people.</p><p> What else could a customer ask for?"</p>

 <b><p>Ken Pumo,Nakuru</p></b>
  </article>
</div>
<div class="review3">
  <article>
    <p><i>Unfair Policies</i></p>
    <p>"The no refund policy is quite unfair to us. Considering the items being bought are a tad bit costly"</p>
    <b><p>Martin Musa,Nairobi</p></b>
  </article>
</div>
</section> 
 <div>
  <p><b>Make Review:</b></p>
   <form action="/action_page.php">
  <br><label for="reviewTitle">Title:</label><br>
  <input type="text" id="reviewTitle" name="Title" ><br><br>
  
  <label for="Review" >Body</label><br>
<textarea rows="10" cols="50" name="comment" form="usrform">
Enter text here...</textarea><br><br>
  <input type="submit" value="Submit Review">
</form> 
 </div> 
  
  
  
</div>
</div>
</div>
</section>
@endsection



