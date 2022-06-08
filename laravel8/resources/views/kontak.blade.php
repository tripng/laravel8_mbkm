@extends('layouts.main')

@section('content')
    <div class="row mt-3">
        <div class="col-lg-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">Contact Me</div>
                    <hr>
                    <form>
                        <div class="form-group">
                            <label for="input-1">Name</label>
                            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="input-2">Email</label>
                            <input type="text" class="form-control" id="input-2" placeholder="Enter Your Email Address">
                        </div>
                        <div class="form-group">
                            <label for="input-3">Mobile Number</label>
                            <input type="text" class="form-control" id="input-3" placeholder="Enter Your Mobile Number">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" placeholder="Enter Your Message"
                                id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-light px-5"><i class="zmdi zmdi-assignment-check"></i>
                                Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End Row-->
    @endsection