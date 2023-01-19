            @extends('main')

            @section('content')
            
            @if (Auth::user()->role === "Admin")
            
            <h4 class="teks-complaiment" style="text-align: center;margin-top: 3%">Complainment App</h4>
            
            <section style="display: flex;margin-top: 5%;justify-content: space-around ; flex-wrap: wrap">
                

                @foreach ($data as $item)
                <a href="detail-complain/{{ $item->id }}">
                        <div class="card card-complaiment" style="width: 18rem; background-color: #f8f9fd" >
                            <div class="card-body">
                                <h5 style="text-align: center">{{ $item->name }}</h5>
                                <hr>
                                <div style="display: flex;justify-content: space-between">
                                    <p  style="font-style: italic">Date posting</p>
                                    <h6 >{{ $item->date }}</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </section>
            
            
            @else

            
            <section class="teks-welcome" style="margin-top: 5%">
                <h3 style="text-align: center">Welcome To Complainment Area</h3>
                <p style="text-align: center">In here you can complain all about community service in city of ABC</p>
            </section>

            <section style="display: flex;justify-content: center;margin-top:5%;margin-bottom:5%">
                <div class="card card-form" style="width: 80%;">
                    <div class="card-body" >
                        <form action="/submitComplain" style="padding: 12px" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="formGroupExampleInput" class="form-label">Full Name</label>
                                <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Full Name....">
                            </div>
                            <div class="mb-4">
                                <label for="formGroupExampleInput2" class="form-label">Address</label>
                                <input name="address" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Address.....">
                            </div>
                            <div class="mb-4">
                                <label for="formGroupExampleInput2" class="form-label">No Telp</label>
                                <input name="number_telp" type="tel" class="form-control" id="formGroupExampleInput2" placeholder="Telp.....">
                            </div>
                            <div class="mb-4">
                                <label for="formGroupExampleInput2" class="form-label">Date</label>
                                <input name="date" type="date" class="form-control" id="formGroupExampleInput2" placeholder="Telp.....">
                            </div>
                            <div class="mb-4">
                                <label for="formGroupExampleInput2" class="form-label">Whats your complain?</label>
                                <input id="x" type="hidden" name="complain">
                                <trix-editor input="x"></trix-editor>
                            </div>
                            <div style="display: flex;justify-content: flex-end">
                                <button type="submit" class="btn btn-success button-submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        

            @endif

            @endsection