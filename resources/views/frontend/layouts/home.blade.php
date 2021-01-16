@extends('frontend.master')

<!-- Header -->


@section('content')


<header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="intro-text">
              <h1>Shongi</h1>
              <p>Reservations: 01623284090</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Features Section -->
  <div id="features" class="text-center">
    <div class="container">
      <div class="section-title">
        <h2>Our Specials</h2>
      </div>
      {{-- @dd($list) --}}

      @foreach ($list as $key=>$data)
      <div class="row">
        <div class="col-xs-12 col-sm-4">
          <div class="features-item">
            <p class="card-text">{{$data->name}}</p>
            <img width="200px;" src="{{ url('uploads/products/'.$data->image) }}" style="    width: 250px;
            height: 250px">
            <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">{{$data->price}} BDT</small>

            </div>
                <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('frontend.item.view',$data->id) }}">View</a>
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('frontend.item.addTocart',$data->id) }}"> Add To Cart</a>
                </div>


          </div>
        </div>

        @endforeach

      </div>
    </div>
  </div>
  <!-- About Section -->
  <div id="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-6 about-img"> </div>
        <div class="col-xs-12 col-md-3 col-md-offset-1">
          <div class="about-text">
            <div class="section-title">
              <h2>Our Story</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Restaurant Menu Section -->
  <div id="restaurant-menu">
    <div class="container">
      <div class="section-title text-center">
        <h2>Menu</h2>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Breakfast & Starters</h2>
            <div class="menu-item">
              <div class="menu-item-name">Tortellini Skewers</div>
              <div class="menu-item-price"> $9 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Fried Ravioli</div>
              <div class="menu-item-price"> $7 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Wild Mushroom Arancini</div>
              <div class="menu-item-price"> $9 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Mozzarella Sticks</div>
              <div class="menu-item-price"> $10 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Main Course</h2>
            <div class="menu-item">
              <div class="menu-item-name">Roast Stuffed Chicken</div>
              <div class="menu-item-price"> $18 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Chicken & Mushroom Pasta</div>
              <div class="menu-item-price"> $20 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Beef Lasagne</div>
              <div class="menu-item-price"> $14 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Chicken Goujons</div>
              <div class="menu-item-price"> $19 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Dinner</h2>
            <div class="menu-item">
              <div class="menu-item-name">Sesame-Ginger Beef</div>
              <div class="menu-item-price"> $15 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Crispy Fried Chicken</div>
              <div class="menu-item-price"> $17 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Mongolian Shrimp & Broccoli</div>
              <div class="menu-item-price"> $18 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Spicy Coconut Salmon</div>
              <div class="menu-item-price"> $20 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="menu-section">
            <h2 class="menu-section-title">Desserts</h2>
            <div class="menu-item">
              <div class="menu-item-name">Chocolate Mud Cake</div>
              <div class="menu-item-price"> $11 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Bourbon-Pecan Tart</div>
              <div class="menu-item-price"> $14 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Texas Sheet Cake</div>
              <div class="menu-item-price"> $15 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
            <div class="menu-item">
              <div class="menu-item-name">Vanilla Cheesecake</div>
              <div class="menu-item-price"> $18 </div>
              <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Gallery Section -->
  <div id="gallery">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6 col-md-3">
          <div class="gallery-item"> <img src="img/gallery/01.jpg" class="img-responsive" alt=""></div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="gallery-item"> <img src="img/gallery/02.jpg" class="img-responsive" alt=""></div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="gallery-item"> <img src="img/gallery/03.jpg" class="img-responsive" alt=""></div>
        </div>
        <div class="col-xs-6 col-md-3">
          <div class="gallery-item"> <img src="img/gallery/04.jpg" class="img-responsive" alt=""></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team Section -->
  <div id="team">
    <div class="container">
      <div id="row">
        <div class="col-md-6">
          <div class="col-md-10 col-md-offset-1">
            <div class="section-title">
              <h2>Meet Our Chef</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="team-img"><img src="img/chef.jpg" alt="..."></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Section -->
  <div id="contact" class="text-center">
    <div class="container text-center">
      <div class="col-md-4">
        <h3>Reservations</h3>
        <div class="contact-item">
          <p>Please call</p>
          <p>(887) 654-3210</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Address</h3>
        <div class="contact-item">
          <p>4321 California St,</p>
          <p>San Francisco, CA 12345</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Opening Hours</h3>
        <div class="contact-item">
          <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
          <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="section-title text-center">
        <h3>Send us a message</h3>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
  </div>



  @endsection
