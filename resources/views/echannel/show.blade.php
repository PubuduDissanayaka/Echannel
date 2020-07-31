@extends('layouts.app', ['activePage' => 'echannel', 'titlePage' => __('echannel')])

@section('externalcss')
    
@endsection

@section('content')
  <div class="content" id="froala-editor">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header card-header-primary">
                      <h4 class="card-title ">Dr. {{$echannel->doc_name}}</h4>
                      <p class="card-category">{{$echannel->doc_spec}}</p>
                    </div>
                    <div class="card-body">
                        <h4>
                            Dr. {{$echannel->name}}
                        </h4>
                        <p>
                            Please arrive at the hospital at least half an hour before the time mentioned here.
                        </p>
                        <div class="row">
                        <div class="col-md-8">
                            <table class="table table-hover table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            name
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Patients name
                                        </td>
                                        <td>
                                            {{$echannel->name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Patients email
                                        </td>
                                        <td>
                                            {{$echannel->email}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Patients NIC
                                        </td>
                                        <td>
                                            {{$echannel->nic}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Patients Contact No
                                        </td>
                                        <td>
                                            {{$echannel->tel}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Patients Living City
                                        </td>
                                        <td>
                                            {{$echannel->city}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                  <h4 class="card-title ">Echannel Details</h4>
                                  <p class="card-category">refer below Date and Time</p>
                                </div>
                                <div class="card-body">
                                    <table class="table table-hover table-sm table-bordered">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    Date
                                                </td>
                                                <td>
                                                    {{$echannel->date}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Time
                                                </td>
                                                <td>
                                                    {{$echannel->time}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Charge
                                                </td>
                                                <td>
                                                    Rs. 2000/=
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                              </div>
                        </div>
                    </div>
                        <p>
                            Book confirmed Doctor Appointments online for a faster and easier experience. Channeling your Doctor is just a click away! 2000+ Appointments Daily. Instant Channeling. 24/7 Service. Services: Channelling, Talk to a Doctor, Chat with a Doctor.
                        </p>
                        
                    </div>
                  </div>
                  <button id="cmd" onclick="window.print()">Print PDF</button>
            </div>
        </div>
    </div>
  </div>

@endsection

@section('externaljs')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>

<script>

    var doc = new jsPDF();
    var specialElementHandlers = {
        '#editor': function (element, renderer) {
            return true;
        }
    };
    
    $('#cmd').click(function () {
        doc.fromHTML($('.content').html(), 2, 2, {
            'elementHandlers': specialElementHandlers,
            'orientation': 'p', 
            'unit': 'in', 
            'format': 'a4'
        });
            doc.save('echannel.pdf');
    });
</script> --}}
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.css"></script>
<script>

    
</script>
@endsection