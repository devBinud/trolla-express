@extends('public.layout.layout')
@section('title', 'Feedback Trolla')
@section('meta-description', '')
@section('meta-keywords', '')
@section('ogtitle', '')
@section('meta-og-description', '')
@section('url', 'https://www.trollaexpress.com/page?action=feedback')
@section('image', '')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/public/css/Contact.css') }}">
@endsection
@section('body')

    <section class="u-clearfix u-image u-shading u-valign-middle-md u-section-1" id="carousel_2375" data-image-width="1280"
        data-image-height="853"
         style="background-image:linear-gradient(0deg, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('assets/public/images/contact.jpg') }}');">
        <div class="u-list u-list-1">

        </div>
        </div>

        <div class="u-clearfix u-gutter-14 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-align-left u-black u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-4">
                        <h3 class="u-text u-text-body-alt-color u-text-default u-text-7">Contact info</h3>
                        <div class="u-expanded-width-sm u-expanded-width-xs u-form">
                             <form action="{{ url('send-mail') }}" method="POST" id="contactForm"
                                    style="padding: 30px;">
                                    @csrf
                                    <div class="u-form-email u-form-group u-form-partition-factor-2">
                                        <label for="email-319a"
                                            class="u-custom-font u-label u-text-body-alt-color u-label-1"></label>
                                        <input type="email" placeholder="Enter a valid email address" id="email"
                                            name="email"
                                            class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-1">
                                    </div><br>
                                    <div class="u-form-group u-form-name u-form-partition-factor-2">
                                        <label for="name-319a"
                                            class="u-custom-font u-label u-text-body-alt-color u-label-2"></label>
                                        <input type="text" placeholder="Enter your Name" id="name" name="name"
                                            class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-2"><br>
                                    </div>
                                    <div class="u-form-group u-form-group-3">
                                        <label for="text-5dc1"
                                            class="u-custom-font u-label u-text-body-alt-color u-label-3"></label>
                                        <input type="text" placeholder="Enter your subject" id="subject"
                                            name="subject"
                                            class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-3">
                                    </div><br>
                                    <div class="u-form-group u-form-message">
                                        <label for="message-319a"
                                            class="u-custom-font u-label u-text-body-alt-color u-label-4"></label>
                                        <textarea placeholder="Enter your message" rows="4" cols="50" id="message" name="message"
                                            class="u-border-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-custom-font u-input u-input-rectangle u-input-4"></textarea>
                                    </div>
                                    <div class="u-align-left u-form-group u-form-submit">
                                        <!-- <a href="#" class="u-btn u-btn-submit u-button-style u-custom-font u-white u-btn-1">Submit</a>
                                      <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true"> -->
                                        <button type="submit" id="contactFormBtn"
                                            class="u-btn u-btn-submit u-button-style u-custom-font u-white u-btn-1"
                                            wfd-invisible="true">SUBMIT</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('custom-js')
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#contactForm').submit(function(e) {
                e.preventDefault();

                var url = $(this).attr('action');
                var method = $(this).attr('method');
                var formData = new FormData(this);
                var error = $('.error');

                error.text("");

                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: formData,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#contactFormBtn').text("Please wait ...").attr('disabled', true);
                    },
                    success: function(data) {
                        // alert message
                        if (!data.success) {
                            if (data.data != null) {
                                $.each(data.data, function(id, error) {
                                    $('#' + id).text(error);
                                });
                            } else {
                                Swal.fire(data.message);
                            }
                        } else {
                            Swal.fire(data.message);
                            setTimeout(() => {
                            window.location.reload();
                            }, 2000);
                        }
                    },
                    complete: function() {
                        $('#contactFormBtn').text("Save").attr('disabled', false);
                    }
                });
            });

        });
    </script>
@endsection
