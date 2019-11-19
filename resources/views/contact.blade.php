@extends('layouts.app')

@section('title')
Health Life is Possible | Contact
@endsection

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Reach us
                </div>
                <div class="card-body">
                    <p>
                        Buckingham Terrace 
                <br>Downcliff, Westiville 3629
                        <br>
                    </p>
                    <p>
                        <abbr title="Phone">P</abbr>: <a href="tel:+270312624821">031-262-4821</a> or <a href="tel:+270312329999">031-232-9999</a>
                    </p>
                    <p>
                        <abbr title="Email">E</abbr>:
                        <a href="mailto:name@example.com">enquiry@healthlife.co.za
                        </a>
                    </p>
                </div>
            </div>



        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Contact us
                </div>
                <div class="card-body">
                    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?q=westville%20mall%20durban&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                    <hr>
                    <form>
                        <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name">
                                
                            </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" class="form-control" id="phone" aria-describedby="phone" placeholder="Phone">
                               
                            </div>


                        <div class="form-group">
                            <label for="msg">Message</label>
                            <textarea class="form-control" name="msg" id="msg" cols="30" rows="10" placeholder="Your message.."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Send</button>
                        </form>
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection