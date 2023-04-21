@extends('mainsub')
@section('content')
<div class="card mb-4">  
<div class="card-header">



<div class="row">
    <div class="col-md-6">
      <h1 class='fadeh2'>Alien Online Hotline</h1>
      <h4>Are you someone who has witnessed a UFO sighting or an encounter with extraterrestrial beings? Or are you simply curious about the existence of UFOs and the possibility of intelligent life beyond our planet?</h4>
      <p>Our hotline is a place for individuals like you to share your experiences, seek support, and connect with others who have had similar encounters. Our team of experts is dedicated to providing a safe and confidential space for you to discuss your encounters with UFOs and alien life.</p>
      <p><b>Our hotline is available 24/7, so you can reach out to us anytime, anywhere. We believe that by sharing our experiences and knowledge, we can expand our understanding of the universe and our place within it.</b></p>
     

    </div>
    
    <div class="col-md-6">
            <form method="post" action="/process" enctype="multipart/form-data" class="">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="location" placeholder="Location">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="date" name="date" placeholder="Date">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="time" name="time" placeholder="Time">
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" name="scary" id="scary">
                            <label class="form-check-label" for="scary">Does the alien look scary?</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5"></textarea>
                        </div>
                    
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
            </form>
   </div>
</div>


</div>        
</div>
@endsection