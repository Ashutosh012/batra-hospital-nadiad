<form id="appointmentForm">
    @csrf
    <div class="appointment-form">
        <div class="col-lg-12">
            <div class="wpcf7-form-control-wrap">
                <label for="fname">Patient's First Name</label>
                <input type="text" id="fname" name="first_name" placeholder="First Name">
                <p id="fnameError" style="color: red;"></p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="wpcf7-form-control-wrap">
                <label for="lname">Patient's Last Name</label>
                <input type="text" id="lname" name="last_name" placeholder="Last Name">
                <p id="lnameError" style="color: red;"></p>
            </div>
        </div>
        
        <div class="col-lg-12">
            <div class="wpcf7-form-control-wrap">
                <label for="mobile-no">Email Address</label>
                <div class="hint-text">Notification for appointment and reminders will be sent
                    to this email address.</div>
                <div class="row">
                    <div class="col-lg-9">
                    <input type="text" id="email" name="email"
                            placeholder="Email Address">
                    </div>
                    <div class="col-lg-3">
                        <button class="sec-btn solid-btn"
                            title="Verify"><span>Verify</span>Verify</button>
                    </div>
                </div>
                <p id="emailError" style="color: red;"></p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="wpcf7-form-control-wrap">
                <label for="mobile-no">Mobile Number</label>
                <div class="hint-text">Notification for appointment and reminders will be sent
                    to this number.</div>
                <div class="row">
                    <div class="col-lg-9">
                        <input type="text" id="mobile_number" name="mobile_number"
                            placeholder="Mobile Number" maxlength=10>
                    </div>
                    <div class="col-lg-3">
                        <button class="sec-btn solid-btn"
                            title="Verify"><span>Verify</span>Verify</button>
                    </div>
                </div>
                <p id="mobileError" style="color: red;"></p>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="wpcf7-form-control-wrap">
                <label for="health_problem">Enter Your Health Problem</label>
                <textarea id="health_problem" name="health_problem" rows="4" cols="50" maxlength="350" required></textarea>
                <p id="healthProblemError" style="color: red;"></p>
            </div>
        </div>

        <div class="col-lg-12">
            <span class="calender">
                <label for="datepicker">Take Appointment for Doctor</label>
                <input type="datetime-local" id="datepicker" placeholder="YYYY/MM/DD" name="appointment_date">  
            </span>
            <p id="appointmentError" style="color: red;"></p>
        </div>

         <div class="form-group">
            <input type="hidden" name="g-recaptcha-response" id="recaptcha">
        </div>
    </div>
    <div class="col-lg-12">
        <div class="appointment-form-btn">
            <button id="appointmentFormBtn" class="sec-btn solid-btn"
                title="submit"><span>submit</span></button>
            <img width="50" height="50" id="loaderSubmit" class="loader-submit" src="{{ asset('assets/images/loader.gif') }}" />
        </div>
    </div>
</form>
        

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
        $("#loaderSubmit").css("display", "none");
        config = {
            enableTime: true,
            dateFormat: 'Y-m-d H:i',
            minDate: "today",
            minTime:"10:00",
            maxTime:"13:00",
            weekNumbers: true,
            time_24hr: true,
            disable: [
                function(date){
                    return date.getDay() == 0;
                }
            ],
            onChange: function(selectedDates, dateStr, instance) {
                var currentDate = new Date(dateStr);
                var currentDay = currentDate.getDay();
                var minTime, maxTime;

                // Set different time ranges for each day
                if (currentDay !== 0) {
                    console.log('line no 119', currentDate.getHours())
                    if(currentDate.getHours() < 10){
                        minTime = "10:00";
                        toastr.error("Please select time between 10:00AM to 01:00PM");
                        instance.set('minTime', minTime);
                        return false;
                    }
                    if(currentDate.getHours() > 13 || currentDate.getHours() > 16){
                        minTime = "10:00";
                        maxTime = "13:00";
                        instance.set('minTime', minTime);
                        instance.set('maxTime', maxTime);
                        toastr.error("Please select time between 04:00PM to 06:00PM");
                        return false;
                    }
                    if(currentDate.getHours() > 18){
                        minTime = "16:00";
                        maxTime = "18:00";
                        instance.set('minTime', minTime);
                        instance.set('maxTime', maxTime);
                        toastr.error("Please book the appointment of next available dates.");
                        return false;
                    }
                }
            }
        }
        flatpickr("input[type=datetime-local]", config);

        $('#fname').on('keyup blur',function() {
            var fname = $(this).val().trim();
            if (fname === '') {
                $('#fnameError').text(`Patient's First Name is required.`);
            } else {
                $('#fnameError').text('');
            }
        });

        $('#lname').on('keyup blur',function() {
            var lname = $(this).val().trim();
            if (lname === '') {
                $('#lnameError').text(`Patient's Last Name is required.`);
            } else {
                $('#lnameError').text('');
            }
        });

        $('#email').on('keyup blur',function() {
            var email = $(this).val().trim();
            if (email === '') {
                $('#emailError').text('Email is required.');
            } else if (!isValidEmail(email)) {
                $('#emailError').text('Please enter correct email format.');
            } else {
                $('#emailError').text('');
            }
        });

        function isValidEmail(email) {
            var emailRegex = /\S+@\S+\.\S+/;
            return emailRegex.test(email);
        }

        function isValidMobile(mobile) {
            var mobileRegex = /^[6-9]\d{9}$/;
            return mobileRegex.test(mobile);
        }

        $('#mobile_number').on('keyup blur',function() {
            var mobile = $(this).val().trim();
            if (mobile === '') {
                $('#mobileError').text('Mobile number is required.');
            } else if (!isValidMobile(mobile)) {
                $('#mobileError').text('Please enter a 10-digit mobile number.');
            } else {
                $('#mobileError').text('');
            }
        });

        $('#health_problem').on('keyup blur',function() {
            var health_problem = $(this).val().trim();
            var characterCount = health_problem.length;
            if (health_problem === '') {
                $('#healthProblemError').text('Health Problem Description is required.');
            } else if (characterCount < 100) {
                $('#healthProblemError').text('Please provide a description of at least 100 words.');
            } else {
                $('#healthProblemError').text('');
            }
        });
    });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#appointmentFormBtn").click(function(e){
        e.preventDefault();
        $("#loaderSubmit").css("display", "block");
        $("#appointmentFormBtn").css("display", "none");

        var fname = $("#fname").val().trim();
        var lname = $("#lname").val().trim();
        var email = $("#email").val().trim();
        var mobile = $("#mobile_number").val().trim();
        var health_problem = $("#health_problem").val().trim();
        var datepicker = $("#datepicker").val().trim();

        if (fname === '') {
            $('#fnameError').text(`Patient's First Name is required.`);
        } else {
            $('#fnameError').text('');
        }
        
        if (lname === '') {
            $('#lnameError').text(`Patient's Last Name is required.`);
        } else {
            $('#lnameError').text('');
        }
        
        if (email === '') {
            $('#emailError').text('Email is required.');
        } else if (!isValidEmail(email)) {
            $('#emailError').text('Please enter correct email format.');
        } else {
            $('#emailError').text('');
        }

        function isValidEmail(email) {
            var emailRegex = /\S+@\S+\.\S+/;
            return emailRegex.test(email);
        }

        function isValidMobile(mobile) {
            var mobileRegex = /^[6-9]\d{9}$/;
            return mobileRegex.test(mobile);
        }

        
        if (mobile === '') {
            $('#mobileError').text('Mobile number is required.');
        } else if (!isValidMobile(mobile)) {
            $('#mobileError').text('Please enter a 10-digit mobile number.');
        } else {
            $('#mobileError').text('');
        }
        
        var characterCount = health_problem.length;

        if (health_problem === '') {
            $('#healthProblemError').text('Health Problem Description is required.');
        } else if (characterCount < 100) {
            $('#healthProblemError').text('Please provide a description of at least 100 words.');
        } else {
            $('#healthProblemError').text('');
        }

        if (datepicker === '') {
            $('#appointmentError').text('Appointment Date is required.');
        } else {
            $('#appointmentError').text('');
        }

        $.ajax({
            type: 'POST',
            url:"{{ route('book-appointment') }}",
            data: $('#appointmentForm').serialize(),
            success: function(data){
                if($.isEmptyObject(data.error)){
                    toastr.success(data.success);
                    document.getElementById("appointmentForm").reset(); 
                    $("#loaderSubmit").css("display", "none");
                    $("#appointmentFormBtn").css("display", "block");
                } else {
                    $("#loaderSubmit").css("display", "none");
                    $("#appointmentFormBtn").css("display", "block");
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