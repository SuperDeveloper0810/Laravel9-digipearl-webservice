var Auth = function () {
    var handleLogin = function () {
        $('.LoginForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                user_name: {
                    required: true
                },
                password: {
                    required: true
                }
            },

            submitHandler: function (form) {
                var formData = new FormData(form);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: `/admin/login`,
                    dataType: "json",
                    data: formData,
                    contentType: false,
                    processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        var userInfo  = res.userInfo;
                        console.log(res);
                        if (status) {
                            localStorage.setItem('CurrentUserId', userInfo.id);
                            localStorage.setItem('userAvatarUrl', userInfo.avatar_url);
                            localStorage.setItem('userFullName', userInfo.full_name);
                            iziToast.success({
                                title: 'Success',
                                message: 'Login successful!',
                                position: 'topRight'
                            });
                            setTimeout(() => {
                                window.location.href="/admin/dashboard";
                            }, 2000);
                        } else {
                            iziToast.error({
                                title: 'Error',
                                message: 'Login failure!',
                                position: 'topRight'
                            });
                        }
                    },
                    error: function (res, err) {
                        iziToast.error({
                            title: 'Error',
                            message: 'Server Error!',
                            position: 'topRight'
                        });
                    }
                })
            }
        });

        $('.LoginForm input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.LoginForm').validate().form()) {
                    
                }
                return false;
            }
        });
    }

    return {
        init : function () {
            handleLogin();
        }
    }
}();