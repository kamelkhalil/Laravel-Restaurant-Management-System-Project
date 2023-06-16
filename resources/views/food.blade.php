 <!-- ***** Menu Area Starts ***** -->
<style>
   .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 7px 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
 </style>
 <section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                @foreach($data as $data)
                <form action="{{url('/addcart',$data->id)}}" method="Post">
                    @csrf
                <div class="item">
                    <div style="background-image:url('/foodimage/{{$data->image}}')"class='card'>
                        <div class="price"><h6>{{$data->price}}$</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$data->title}}</h1>
                          <p class='description'>{{$data->description}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                    <input type="number" name="quantity" min="1" value="1" style="width: 95px;">
                    <input class="button button2" type="submit" value="add cart">
                </div>
            </form>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
