    @extends('main')

    @section('content')

    

        <h4 class="teks-detail" style="text-align: center;margin-top: 5%">Detail Complain</h4>
        <section  style="display: flex;justify-content: center ;margin-top: 3%">
            <div class="card card-detail" style="width: 80%">
                <div class="card-body" >
                    <div style="padding: 12px">
                        <p>
                            {{ strip_tags($data->complain) }}
                        </p>

                        <article style="display: flex;justify-content: end;margin-top: 5%">
                            
                            <div>
                                <p style="text-align: end">{{ $data->name }},</p>
                                <p style="text-align: end">{{ $data->address }}</p>
                            </div>
                        </article>

                        
                        <article style="margin-top: 3%">
                            <div>
                                <p style="text-align: end; font-size: 14px; font-style: italic">Date Posting : {{ $data->date }}</p>
                                <p style="text-align: end; font-size: 14px">Contact Number : {{ $data->number_telp }}</p>
                            </article>
                            </div>
                    </div>
                    
                    <div>
                    </div>
                </div>
            </div>
            
            
            <a href="/dashboard">
                <div style="display: flex;justify-content: center;margin-top: 3%">
                    <button style="width: 50%" type="button" class="btn btn-primary btn-back">Back</button>
                </div>
            </a>
        </section>

        
    @endsection