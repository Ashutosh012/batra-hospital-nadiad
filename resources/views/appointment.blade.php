<!-- APPOINTMENT START -->
    <section id="appointment" class="main-appointment back-img"
        style="background-image: url('assets/images/appointment-bg-img.jpg')">
        <div class="sec-wp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title white-text wow fadeup-animation" data-wow-duration="0.8s"
                            data-wow-delay="0.2s">
                            <h2 class="h2-title icon">Make Appointment!</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="appointment-form-wp wow left-animation" data-wow-duration="0.8s"
                            data-wow-delay="0.4s">
                            <form id="appointmentForm">
                                @csrf
                                <div class="appointment-form">
                                    <div class="col-lg-12">
                                        <div class="wpcf7-form-control-wrap">
                                            <label for="fname">Patients First Name</label>
                                            <input type="text" id="fname" name="first_name" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="wpcf7-form-control-wrap">
                                            <label for="lname">Patients Last Name</label>
                                            <input type="text" id="lname" name="last_name" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="wpcf7-form-control-wrap">
                                            <label for="email">Email Address</label>
                                            <div class="hint-text">Notification for appointment and reminders will
                                                be sent
                                                to this email address.</div>
                                            <div class="row">
                                                <!-- <div class="col-lg-9"> -->
                                                    <input type="text" id="email" name="email"
                                                        placeholder="Email Address">
                                                <!-- </div> -->

                                                <!-- <div class="col-lg-3">
                                                    <button id="verifyUser" class="sec-btn solid-btn"
                                                        title="Verify"><span>Verify</span>Verify</button>
                                                </div>

                                                <div class="col-3 mt-2" style="display:none;" id="getOTP">
                                                    <input type="text" id="enterOtp" name="otp"
                                                        placeholder="Enter OTP" maxlength="6">                                      
                                                    <div class="mt-2">
                                                        <button id="submitOTP" class="sec-btn solid-btn"
                                                            title="Submit"><span>Submit</span>Submit</button>
                                                    </div>              
                                                </div> -->
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="wpcf7-form-control-wrap">
                                            <label for="mobile-no">Mobile Number</label>
                                            <div class="row">
                                                <!-- <div class="col-lg-9"> -->
                                                    <input type="text" id="mobile_number" name="mobile_number"
                                                        placeholder="Mobile Number">
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="wpcf7-form-control-wrap">
                                            <label for="health-problem">Select Health Problem</label>
                                            <select id="health-problem" name="health_problem_id">
                                                @foreach(\App\Models\HealthProblems::all() as $healthproblem)
                                                    <option value="{{ $healthproblem->id}}">{{ $healthproblem->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="icon"><i class="fas fa-angle-down"></i></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <span class="calender">
                                            <label for="datepicker">Take Appointment for Doctor</label>
                                            <input type="datetime-local" id="datepicker" placeholder="YYYY/MM/DD" name="appointment_date">
                                        </span>
                                    </div>

                                     <div class="form-group">
                                        <input type="hidden" name="g-recaptcha-response" id="recaptcha">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="appointment-form-btn">
                                        <button id="appointmentFormBtn" class="sec-btn solid-btn"
                                            title="submit"><span>submit</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="appointment-img-wp for-des">
                            <div class="back-img"
                                style="background-image: url(assets/images/appointment-doctor-img.png);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- APPOINTMENT END -->

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('recaptchav3.sitekey') }}"></script>
    <script>
             grecaptcha.ready(function() {
                 grecaptcha.execute('{{ config('recaptchav3.sitekey') }}', {action: 'book-appointment'}).then(function(token) {
                    if (token) {
                      document.getElementById('recaptcha').value = token;
                    }
                 });
             });
    </script>

    <script type="text/javascript">

        $(document).ready(function(){
            config = {
                enableTime: true,
                dateFormat: 'Y-m-d H:i',
                minDate: "today",
                minTime: "10:00",
                maxTime: "18:00",
                defaultTime: "10:00",
                disable: [
                    function(date){
                        return date.getDay() == 0;
                    }
                ]
            }
            flatpickr("input[type=datetime-local]", config);
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#appointmentFormBtn").click(function(e){
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url:"{{ route('book-appointment') }}",
                data: $('#appointmentForm').serialize(),
                success: function(data){
                    if($.isEmptyObject(data.error)){
                        toastr.success(data.success);
                        document.getElementById("appointmentForm").reset(); 
                    }else{
                        toastr.error(data.error);
                    }
                }
            });
        });

        $("#verifyUser").click(function(e){
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url:"{{ route('verify-user') }}",
                data: $('#email').serialize(),
                success: function(data){
                    if($.isEmptyObject(data.error)){
                        toastr.success(data.success);
                        $("#getOTP").css("display", "block");
                    } else {
                        toastr.error(data.error);   
                    }
                }
            });
        });

        $("#submitOTP").click(function(e){
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: "{{ route('verify-otp') }}",
                data: { 
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'otp' :  $("#enterOtp").val(),
                    'email' : $("#email").val()
                },
                success: function(data){
                    if($.isEmptyObject(data.error)){
                        toastr.success(data.success);
                    } else {
                        toastr.error(data.error);   
                    }   
                }
            })
            
        })

    </script>