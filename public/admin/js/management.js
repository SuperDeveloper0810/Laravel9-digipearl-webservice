// var userId, contactInfoId, serviceId, menuId, postId, reviewId;
var Management = function () {
    $('.btn-user-create').on('click', function () {
        localStorage.setItem('userId', 0);
    })

    var handleUserForm = function () {
        $('.createUserForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                user_name: {
                    required: true
                },
                full_name: {
                    required: true
                },
                position: {
                    required: true
                },
                password: {
                    required: true
                },
                rpassword: {
                    equalTo: "#create_password"
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
                    url: '/admin/user_store',
                    dataType: "json",
                    data: formData,
                    contentType: false,
                    processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: 'New Admin was created!',
                                position: 'topRight'
                            });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.info({
                                title: 'Information',
                                message: 'Already exist Admin!',
                                position: 'topRight'
                            });
                        }
                    },
                    error: function (res, err) {
                        iziToast.error({
                            title: 'Error',
                            message: 'New Admin create Error!',
                            position: 'topRight'
                        });
                    }
                })
                $('#newUserModal').modal('hide');
            }
        });

        $('.createUserForm input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.createUserForm').validate().form()) {
                    
                }
                return false;
            }
        });
    }
    // user button event      -----------------------------------------------
    $('.btn-user-edit').on('click', function () {
        var userId = $(this).data("id");
        localStorage.setItem('userId', userId);
        $('#editUserModal').modal('show');
        getUserData(userId, callback = (res) => {
            var userInfo = res;
            var $avatar = $('<img>');
            $avatar[0].src = userInfo['avatar_url'];
            $('.user-avatar').html($avatar);
            $('.user-name').val(userInfo['user_name']);
            $('.user-full-name').val(userInfo['full_name']);
            $('.user-position').val(userInfo['position']);
            $('.user-description').val(userInfo['description']);
        });
    })

    function getUserData(userId, callback) {
        alert(userId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: '/admin/user_view',
            dataType: "json",
            data: {
                userId: userId
            },
            // contentType: false,
            // processData: false,
            // cache: false,
            success: function (res) {
                // let status = res.status;
                console.log(res.userInfo);
                var userInfo = res.userInfo;
                callback(userInfo);
            },
            error: function (res, err) {
                iziToast.error({
                    title: 'Error',
                    message: 'New Admin create Error!',
                    position: 'topRight'
                });
            }
        })
    }

    var handleUserEdit = function () {
        // alert("Here");
        $('.editUserForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                user_name: {
                    required: true
                },
                full_name: {
                    required: true
                },
                position: {
                    required: true
                },
                password: {
                    required: true
                },
                rpassword: {
                    equalTo: "#edit_password"
                }
            },

            submitHandler: function (form) {
                // alert("Here");
                var formData = new FormData(form);
                formData.append('userId', localStorage.getItem('userId'));
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: '/admin/user_edit',
                    dataType: "json",
                    data: formData,
                    contentType: false,
                    processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        var userInfo = res.userInfo;
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: `${userInfo.full_name}'s info was updated successful`,
                                position: 'topRight'
                            });
                            // swal(`${userInfo.full_name}'s info was updated successful`, {
                            //     icon: 'success',
                            // });
                            setTimeout(() => {
                                // window.location.href = "/";
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.error({
                                title: 'Updating Error',
                                message: `An error occurred updating`,
                                position: 'topRight'
                            });
                        }
                    },
                    error: function (res, err) {
                        iziToast.error({
                            title: 'Error',
                            message: 'New Admin create Error!',
                            position: 'topRight'
                        });
                    }
                })
                $('#editUserModal').modal('hide');
            }
        });

        $('.editUserForm input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.editUserForm').validate().form()) {
                    // alert("Here");
                    var formData = new FormData(form);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'post',
                        url: '/admin/user_store',
                        dataType: "json",
                        data: formData,
                        contentType: false,
                        processData: false,
                        // cache: false,
                        success: function (res) {
                            let status = res.status;
                            console.log(res);
                            if (status) {
                                iziToast.success({
                                    title: 'Success',
                                    message: 'New Admin was created!',
                                    position: 'topRight'
                                });
                                setTimeout(() => {
                                    window.location.href = "/";
                                }, 2000);
                            } else {
                                iziToast.info({
                                    title: 'Information',
                                    message: 'Already exist Admin!',
                                    position: 'topRight'
                                });
                            }
                        },
                        error: function (res, err) {
                            iziToast.error({
                                title: 'Error',
                                message: 'New Admin create Error!',
                                position: 'topRight'
                            });
                        }
                    })
                }
                return false;
            }
        });
    }

    $('.btn-user-delete').on('click', function () {
        var userId = $(this).data("id");
        localStorage.setItem('userId', userId);
        alert(userId);
        swal({
                title: 'Are you sure?',
                text: 'Once deleted, you will not be able to recover this file!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'post',
                        url: '/admin/user_delete',
                        dataType: "json",
                        data: {
                            userId: userId
                        },
                        // contentType: false,
                        // processData: false,
                        // cache: false,
                        success: function (res) {
                            let status = res.status;
                            let userInfo = res.userInfo;
                            console.log(res);
                            if (status) {
                                iziToast.success({
                                    title: 'Success',
                                    message: 'Info was deleted successful',
                                    position: 'topRight'
                                });
                                // swal('Info has been deleted!', {
                                //     icon: 'success',
                                // });
                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            } else {
                                iziToast.error({
                                    title: 'Updating Error',
                                    message: `An error occurred updating`,
                                    position: 'topRight'
                                });
                            }
                        },
                        error: function (res, err) {
                            iziToast.error({
                                title: 'Error',
                                message: 'New Admin create Error!',
                                position: 'topRight'
                            });
                        }
                    })
                } else {
                    iziToast.info({
                        title: 'Info',
                        message: 'Info is safe!',
                        position: 'topRight'
                    });
                    // swal('Info is safe!');
                }
            });
    })

    // post button event      -----------------------------------------------
    $('.btn-post-create').on('click', function () {
        alert("Here");
        localStorage.setItem('postId', 0);
    })

    var handlePostForm = function () {
        $('.PostForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                postTitle: {
                    required: true
                },
                postImage: {
                    required: true
                },
                editor2: {
                    required: true
                }
            },

            submitHandler: function (form) {
                var postContent = CKEDITOR.instances.editor2.getData();
                console.log(postContent);
                var formData = new FormData(form);
                formData.append('postContent', postContent);

                var apiUrl = "";
                var strmessage = "";
                if (localStorage.getItem('postId')=='0') {
                    alert('store');
                    apiUrl = "post_store";
                    strmessage = "New Post was created successful!";
                }else{
                    apiUrl = "post_edit";
                    formData.append('postId', localStorage.getItem('postId'));
                    strmessage = "Post was updated successful!";
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: `/admin/${apiUrl}`,
                    dataType: "json",
                    data: formData,
                    contentType: false,
                    processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: `${strmessage}`,
                                position: 'topRight'
                            });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.info({
                                title: 'Information',
                                message: 'Already exist Post!',
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
                $('#PostModal').modal('hide');
            }
        });

        $('.PostForm input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.PostForm').validate().form()) {
                    
                }
                return false;
            }
        });
    }

    $('.btn-post-edit').on('click', function () {
        var postId = $(this).data("id");
        alert(postId);
        localStorage.setItem('postId', postId);
        $('#PostModal').modal('show');
        getPostData(postId, callback = (res) => {
            var postInfo = res;
            var $image = $('<img>');
            $image[0].src = postInfo['image_url'];
            $('.post-image').html($image);
            $('.post-title').val(postInfo['title']);
            CKEDITOR.instances['editor2'].setData(postInfo['content']);
        });
    })

    function getPostData(postId, callback) {
        alert(postId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: '/admin/post_view',
            dataType: "json",
            data: {
                postId: postId
            },
            // contentType: false,
            // processData: false,
            // cache: false,
            success: function (res) {
                // let status = res.status;
                console.log(res.postInfo);
                var postInfo = res.postInfo;
                callback(postInfo);
            },
            error: function (res, err) {
                iziToast.error({
                    title: 'Error',
                    message: 'New Admin create Error!',
                    position: 'topRight'
                });
            }
        })
    }

    $('.btn-post-delete').on('click', function () {
        var postId = $(this).data("id");
        localStorage.setItem('postId', postId);
        alert(postId);
        swal({
            title: 'Are you sure?',
            text: 'Once deleted, you will not be able to recover this file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: '/admin/post_delete',
                    dataType: "json",
                    data: {
                        postId: postId
                    },
                    // contentType: false,
                    // processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: 'Post was deleted successful',
                                position: 'topRight'
                            });
                            // swal('Info has been deleted!', {
                            //     icon: 'success',
                            // });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.error({
                                title: 'Updating Error',
                                message: `Already was deleted!`,
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
            } else {
                iziToast.info({
                    title: 'Info',
                    message: 'Post is safe!',
                    position: 'topRight'
                });
                // swal('Info is safe!');
            }
        });
    })

    // contact info button event      -----------------------------------------------
    $('.btn-contact-create').on('click', function () {
        localStorage.setItem('contactInfoId', 0);
    })

    var handleContactInfoForm = function () {
        $('.ContactInfoForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                contact_type: {
                    required: true
                },
                contact_info: {
                    required: true
                }
            },

            submitHandler: function (form) {
                alert("Here");
                var formData = new FormData(form);
                var apiUrl = "";
                var strmessage = "";
                if (localStorage.getItem('contactInfoId')=='0') {
                    alert('store');
                    apiUrl = "contact_store";
                    strmessage = "New contactInfo was created successful!";
                }else{
                    apiUrl = "contact_edit";
                    formData.append('contactInfoId', localStorage.getItem('contactInfoId'));
                    strmessage = "Selected contactInfo was updated successful!";
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: `/admin/${apiUrl}`,
                    dataType: "json",
                    data: formData,
                    contentType: false,
                    processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: `${strmessage}`,
                                position: 'topRight'
                            });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.info({
                                title: 'Information',
                                message: 'Already exist Post!',
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
                $('#ContactInfoModal').modal('hide');
            }
        });

        $('.ContactInfoForm input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.ContactInfoForm').validate().form()) {
                    
                }
                return false;
            }
        });
    }

    $('.btn-contact-edit').on('click', function () {
        var contactInfoId = $(this).data("id");
        alert(contactInfoId);
        localStorage.setItem('contactInfoId', contactInfoId);
        $('#ContactInfoModal').modal('show');
        getContactInfoData(contactInfoId, callback = (res) => {
            var contactInfo = res;
            $('.contact-info-type').val(contactInfo['type']);
            $('.contact-info-value').val(contactInfo['info']);
        });
    })

    function getContactInfoData(contactInfoId, callback) {
        alert(contactInfoId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: '/admin/contact_view',
            dataType: "json",
            data: {
                contactInfoId: contactInfoId
            },
            // contentType: false,
            // processData: false,
            // cache: false,
            success: function (res) {
                // let status = res.status;
                console.log(res.contactInfo);
                var contactInfo = res.contactInfo;
                callback(contactInfo);
            },
            error: function (res, err) {
                iziToast.error({
                    title: 'Error',
                    message: 'New Admin create Error!',
                    position: 'topRight'
                });
            }
        })
    }

    $('.btn-contact-delete').on('click', function () {
        var contactInfoId = $(this).data("id");
        localStorage.setItem('contactInfoId', contactInfoId);
        alert(contactInfoId);
        swal({
           title: 'Are you sure?',
            text: 'Once deleted, you will not be able to recover this file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: '/admin/contact_delete',
                    dataType: "json",
                    data: {
                        contactInfoId: contactInfoId
                    },
                    // contentType: false,
                    // processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: 'Selected contact info was deleted successful',
                                position: 'topRight'
                            });
                            // swal('Info has been deleted!', {
                            //     icon: 'success',
                            // });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.error({
                                title: 'Updating Error',
                                message: `Already was deleted!`,
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
            } else {
                iziToast.info({
                    title: 'Info',
                    message: 'contact is safe!',
                    position: 'topRight'
                });
                // swal('Info is safe!');
            }
        });
    })

    // service button event      -----------------------------------------------
    $('.btn-service-create').on('click', function () {
        localStorage.setItem('serviceId', 0);
    })

    var handleServiceForm = function () {
        $('.ServiceForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                serviceName: {
                    required: true
                },
                serviceLink: {
                    required: true
                }
            },

            submitHandler: function (form) {
                alert("Here");
                var formData = new FormData(form);
                var apiUrl = "";
                var strmessage = "";
                if (localStorage.getItem('serviceId')=='0') {
                    alert('store');
                    apiUrl = "service_store";
                    strmessage = "New contactInfo was created successful!";
                }else{
                    apiUrl = "service_edit";
                    formData.append('serviceId', localStorage.getItem('serviceId'));
                    strmessage = "Selected contactInfo was updated successful!";
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: `/admin/${apiUrl}`,
                    dataType: "json",
                    data: formData,
                    contentType: false,
                    processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: `${strmessage}`,
                                position: 'topRight'
                            });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.info({
                                title: 'Information',
                                message: 'Already exist Post!',
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
                $('#ServiceModal').modal('hide');
            }
        });

        $('.ServiceForm input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.ServiceForm').validate().form()) {
                    
                }
                return false;
            }
        });
    }

    $('.btn-service-edit').on('click', function () {
        var serviceId = $(this).data("id");
        alert(serviceId);
        localStorage.setItem('serviceId', serviceId);
        $('#ServiceModal').modal('show');
        getServiceData(serviceId, callback = (res) => {
            var serviceInfo = res;
            $('.service-name').val(serviceInfo['name']);
            $('.service-link').val(serviceInfo['link']);
        });
    })

    function getServiceData(serviceId, callback) {
        alert(serviceId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: '/admin/service_view',
            dataType: "json",
            data: {
                serviceId: serviceId
            },
            // contentType: false,
            // processData: false,
            // cache: false,
            success: function (res) {
                // let status = res.status;
                console.log(res.serviceInfo);
                var serviceInfo = res.serviceInfo;
                callback(serviceInfo);
            },
            error: function (res, err) {
                iziToast.error({
                    title: 'Error',
                    message: 'New Admin create Error!',
                    position: 'topRight'
                });
            }
        })
    }

    $('.btn-service-delete').on('click', function () {
        var serviceId = $(this).data("id");
        alert(serviceId);
        localStorage.setItem('serviceId', serviceId);
        swal({
           title: 'Are you sure?',
            text: 'Once deleted, you will not be able to recover this file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: '/admin/service_delete',
                    dataType: "json",
                    data: {
                        serviceId: serviceId
                    },
                    // contentType: false,
                    // processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: 'Selected service was deleted successful',
                                position: 'topRight'
                            });
                            // swal('Info has been deleted!', {
                            //     icon: 'success',
                            // });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.error({
                                title: 'Updating Error',
                                message: `Already was deleted!`,
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
            } else {
                iziToast.info({
                    title: 'Info',
                    message: 'Service is safe!',
                    position: 'topRight'
                });
                // swal('Info is safe!');
            }
        });
    })

    // menu button event      -----------------------------------------------
    $('.btn-menu-create').on('click', function () {
        localStorage.setItem('menuId', 0);
    })

    var handleMenuForm = function () {
        $('.MenuForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                menuName: {
                    required: true
                },
                menuLink: {
                    required: true
                }
            },

            submitHandler: function (form) {
                alert("Here");
                var formData = new FormData(form);
                var apiUrl = "";
                var strmessage = "";
                if (localStorage.getItem('menuId')=='0') {
                    alert('store');
                    apiUrl = "menu_store";
                    strmessage = "New menuInfo was created successful!";
                }else{
                    apiUrl = "menu_edit";
                    alert(localStorage.getItem('menuId'));
                    formData.append('menuId', localStorage.getItem('menuId'));
                    strmessage = "Selected menuInfo was updated successful!";
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: `/admin/${apiUrl}`,
                    dataType: "json",
                    data: formData,
                    contentType: false,
                    processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: `${strmessage}`,
                                position: 'topRight'
                            });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.info({
                                title: 'Information',
                                message: 'Already exist Post!',
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
                $('#MenuModal').modal('hide');
            }
        });

        $('.MenuForm input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.MenuForm').validate().form()) {
                    
                }
                return false;
            }
        });
    }

    $('.btn-menu-edit').on('click', function () {
        var menuId = $(this).data("id");
        alert(menuId);
        localStorage.setItem('menuId', menuId);
        $('#MenuModal').modal('show');
        getMenuData(menuId, callback = (res) => {
            var menuInfo = res;
            $('.service-name').val(menuInfo['name']);
            $('.service-link').val(menuInfo['link']);
        });
    })

    function getMenuData(menuId, callback) {
        alert(menuId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: '/admin/menu_view',
            dataType: "json",
            data: {
                menuId: menuId
            },
            // contentType: false,
            // processData: false,
            // cache: false,
            success: function (res) {
                // let status = res.status;
                console.log(res.menuInfo);
                var menuInfo = res.menuInfo;
                callback(menuInfo);
            },
            error: function (res, err) {
                iziToast.error({
                    title: 'Error',
                    message: 'New Admin create Error!',
                    position: 'topRight'
                });
            }
        })
    }

    $('.btn-menu-delete').on('click', function () {
        var menuId = $(this).data("id");
        alert(menuId);
        localStorage.setItem('menuId', menuId);
        swal({
           title: 'Are you sure?',
            text: 'Once deleted, you will not be able to recover this file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: '/admin/menu_delete',
                    dataType: "json",
                    data: {
                        menuId: menuId
                    },
                    // contentType: false,
                    // processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: 'Selected menu was deleted successful',
                                position: 'topRight'
                            });
                            // swal('Info has been deleted!', {
                            //     icon: 'success',
                            // });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.error({
                                title: 'Updating Error',
                                message: `Already was deleted!`,
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
            } else {
                iziToast.info({
                    title: 'Info',
                    message: 'Menu is safe!',
                    position: 'topRight'
                });
                // swal('Info is safe!');
            }
        });
    })

    // review button event      -----------------------------------------------
    $('.btn-review-create').on('click', function () {
        localStorage.setItem('reviewId', 0);
    })

    var handleReviewForm = function () {
        $('.ReviewForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                reviewContent: {
                    required: true
                }
            },

            submitHandler: function (form) {
                alert("Here");
                var formData = new FormData(form);
                var apiUrl = "";
                var strmessage = "";
                if (localStorage.getItem('reviewId')=='0') {
                    alert('store');
                    apiUrl = "review_store";
                    strmessage = "New review was created successful!";
                }else{
                    apiUrl = "review_edit";
                    formData.append('reviewId', localStorage.getItem('reviewId'));
                    strmessage = "Selected review was updated successful!";
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: `/admin/${apiUrl}`,
                    dataType: "json",
                    data: formData,
                    contentType: false,
                    processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: `${strmessage}`,
                                position: 'topRight'
                            });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.info({
                                title: 'Information',
                                message: 'Already exist Post!',
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
                $('#ReviewModal').modal('hide');
            }
        });

        $('.ReviewForm input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.ReviewForm').validate().form()) {
                    
                }
                return false;
            }
        });
    }

    $('.btn-review-edit').on('click', function () {
        var reviewId = $(this).data("id");
        alert(reviewId);
        localStorage.setItem('reviewId', reviewId);
        $('#ReviewModal').modal('show');
        getReviewData(reviewId, callback = (res) => {
            var reviewInfo = res;
            $('.review-description').val(reviewInfo['content']);
        });
    })

    function getReviewData(reviewId, callback) {
        alert(reviewId);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: 'post',
            url: '/admin/review_view',
            dataType: "json",
            data: {
                reviewId: reviewId
            },
            // contentType: false,
            // processData: false,
            // cache: false,
            success: function (res) {
                // let status = res.status;
                console.log(res.reviewInfo);
                var reviewInfo = res.reviewInfo;
                callback(reviewInfo);
            },
            error: function (res, err) {
                iziToast.error({
                    title: 'Error',
                    message: 'New Review create Error!',
                    position: 'topRight'
                });
            }
        })
    }

    $('.btn-review-delete').on('click', function () {
        var reviewId = $(this).data("id");
        alert(reviewId);
        localStorage.setItem('reviewId', reviewId);
        swal({
           title: 'Are you sure?',
            text: 'Once deleted, you will not be able to recover this file!',
            icon: 'warning',
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'post',
                    url: '/admin/review_delete',
                    dataType: "json",
                    data: {
                        reviewId: reviewId
                    },
                    // contentType: false,
                    // processData: false,
                    // cache: false,
                    success: function (res) {
                        let status = res.status;
                        console.log(res);
                        if (status) {
                            iziToast.success({
                                title: 'Success',
                                message: 'Selected review was deleted successful',
                                position: 'topRight'
                            });
                            // swal('Info has been deleted!', {
                            //     icon: 'success',
                            // });
                            setTimeout(() => {
                                location.reload();
                            }, 2000);
                        } else {
                            iziToast.error({
                                title: 'Updating Error',
                                message: `Already was deleted!`,
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
            } else {
                iziToast.info({
                    title: 'Info',
                    message: 'Review is safe!',
                    position: 'topRight'
                });
                // swal('Info is safe!');
            }
        });
    })


    return {
        init: function () {
            handleUserForm();
            handleUserEdit();
            handlePostForm();
            handleContactInfoForm();
            handleServiceForm();
            handleMenuForm();
            handleReviewForm();
        }
    }
}();
