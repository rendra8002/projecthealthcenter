@extends('layouts.frontend.app')

@section('content')
    <div class="container" style="display: flex; height: 100vh;">

        <!-- Form Section -->
        <div class="form-section" style="flex: 1; display: flex; align-items: center; justify-content: center;">
            <div class="form-box" id="formBox" style="width: 80%; max-width: 400px;">
                <h2 style="text-align:center; margin-bottom:20px;">Make an appointment</h2>

                <input type="text" id="firstName" placeholder="First name" required
                    style="width:100%; padding:12px; margin:10px 0; border:1px solid #ccc; border-radius:4px;">
                <input type="text" id="lastName" placeholder="Last name" required
                    style="width:100%; padding:12px; margin:10px 0; border:1px solid #ccc; border-radius:4px;">
                <input type="text" id="subject" placeholder="Subject" required
                    style="width:100%; padding:12px; margin:10px 0; border:1px solid #ccc; border-radius:4px;">
                <textarea id="message" rows="5" placeholder="Message :" required
                    style="width:100%; padding:12px; margin:10px 0; border:1px solid #ccc; border-radius:4px;"></textarea>

                <button onclick="submitForm()"
                    style="width:100%; padding:12px; background:#007BFF; color:#fff; border:none; border-radius:4px; cursor:pointer;">
                    Submit
                </button>
            </div>
        </div>


    </div>

    <script>
        function submitForm() {
            let fname = document.getElementById("firstName").value;
            let lname = document.getElementById("lastName").value;
            let subject = document.getElementById("subject").value;
            let message = document.getElementById("message").value;

            if (fname && lname && subject && message) {
                document.getElementById("formBox").style.display = "none";
                document.getElementById("resultBox").style.display = "block";
            } else {
                alert("Mohon isi semua form terlebih dahulu!");
            }
        }
    </script>
@endsection
